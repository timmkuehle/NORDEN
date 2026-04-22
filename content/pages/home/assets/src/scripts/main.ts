type Season = 'spring' | 'summer' | 'autumn' | 'winter';

type SeasonVideoSources = {
  season: Season;
  desktopSrc: string;
  mobileSrc: string;
};

function getSeasonForDate(date: Date = new Date()): Season {
  const month = date.getMonth() + 1; // 1..12

  // Meteorological seasons (northern hemisphere)
  if (month >= 3 && month <= 5) return 'spring';
  if (month >= 6 && month <= 8) return 'summer';
  if (month >= 9 && month <= 11) return 'autumn';
  return 'winter';
}

function getHomeSeasonVideoSources(date: Date = new Date()): SeasonVideoSources {
  const season = getSeasonForDate(date);
  const base = '/content/resources/media/agency/home';

  const sourcesBySeason: Record<Season, Omit<SeasonVideoSources, 'season'>> = {
    spring: {
      desktopSrc: `${base}/Frühling_desktop.mp4`,
      mobileSrc: `${base}/Frühling_mMobile.mp4`,
    },
    summer: {
      desktopSrc: `${base}/Sommer_desktop.mp4`,
      mobileSrc: `${base}/Sommer_mobile.mp4`,
    },
    // Autumn video doesn't exist yet: fall back to summer.
    autumn: {
      desktopSrc: `${base}/Sommer_desktop.mp4`,
      mobileSrc: `${base}/Sommer_mobile.mp4`,
    },
    winter: {
      desktopSrc: `${base}/Winter_desktop.mp4`,
      mobileSrc: `${base}/Winter_mobile.mp4`,
    },
  };

  return { season, ...sourcesBySeason[season] };
}

const MOBILE_BREAKPOINT_PX = 600;

function isMobileViewport(): boolean {
  return window.matchMedia(`(max-width: ${MOBILE_BREAKPOINT_PX}px)`).matches;
}

function applySeasonalHomeShowreelVideo(date: Date = new Date()) {
  const wrapper = document.querySelector<HTMLElement>('.showreel-video');
  const video = wrapper?.querySelector<HTMLVideoElement>('video');
  if (!video) return;

  const { desktopSrc, mobileSrc } = getHomeSeasonVideoSources(date);

  // Ensure autoplay works reliably (esp. iOS): autoplay requires muted + playsinline.
  video.autoplay = true;
  video.loop = true;
  video.muted = true;
  video.playsInline = true;
  video.setAttribute('autoplay', '');
  video.setAttribute('loop', '');
  video.setAttribute('muted', '');
  video.setAttribute('playsinline', '');

  // Force a single chosen file based on viewport.
  const chosenSrc = isMobileViewport() ? mobileSrc || desktopSrc : desktopSrc;

  // Remove all existing <source> tags so the browser can't pick the desktop file on mobile.
  const sources = Array.from(video.querySelectorAll<HTMLSourceElement>('source'));

  // In dev/prod, `\Video` prefixes sources with `ASSET_BASE_URL` which may include a subdir.
  // Our `chosenSrc` is root-relative ("/content/..."), so we reconstruct the correct base
  // by looking at the first rendered <source>.
  const renderedUrl =
    sources[0]?.getAttribute('src') || sources[0]?.getAttribute('data-src');
  const contentIdx = renderedUrl?.indexOf('/content/') ?? -1;
  const assetBase = contentIdx > 0 ? renderedUrl!.slice(0, contentIdx) : '';
  const resolvedSrc = assetBase
    ? `${assetBase}${chosenSrc}`
    : chosenSrc;

  for (const source of sources) source.remove();

  // Ensure non-ascii filenames (e.g. "Frühling") load reliably across browsers/servers.
  video.src = encodeURI(resolvedSrc);

  // Only hide placeholder once playback actually starts.
  // Some mobile browsers pause autoplaying video to save power, even though `canplay` fires.
  const onPlaying = () => {
    video.parentElement?.classList.add('can-play');
    video.removeEventListener('playing', onPlaying);
  };
  video.addEventListener('playing', onPlaying);

  video.load();
  void video.play().catch(() => {});
}

if (typeof window !== 'undefined') {
  const run = () => applySeasonalHomeShowreelVideo();

  if (document.readyState === 'loading') {
    window.addEventListener('DOMContentLoaded', run);
  } else {
    run();
  }

  // Ensure it re-runs on bfcache restore (mobile Safari back/forward).
  window.addEventListener('pageshow', (event) => {
    // `pageshow` fires on initial load too; only re-run on bfcache restore.
    // eslint-disable-next-line @typescript-eslint/no-explicit-any
    const persisted = (event as any)?.persisted;
    if (!persisted) return;
    run();
  });
}

