<?php
$seoTitle = 'Sölden Destination Branding & Corporate Design | NORDEN';
$seoDescription =
	'Destination Branding für Sölden: Markenstrategie, Corporate Design und visuelle Kommunikation für einen prägnanten Auftritt als internationale Destination Marke.';

if (isset($NORDEN_TEMPLATE_META_ONLY) && $NORDEN_TEMPLATE_META_ONLY) {
	$NORDEN_TEMPLATE_META = [
		'title' => $seoTitle,
		'description' => $seoDescription
	];
	return;
}
?>

<section class="soelden-intro full-width soelden-project">
	<header>
		<h1>
			<?php new \Svg(
   	'soelden_logo',
   	null,
   	'/content/resources/media/soelden/SOEL_Logo.svg'
   ); ?>
   		</h1>
		<quote class="quote color-orange">„This is where your heartbeat is turning up. This is where you belong. <span class="own-line"><span class=" bold">THIS is Sölden</span>.“</span></quote>
	</header>
	<div class="content">
		<div class="slot start">
			<p class="soel-side-note">Brandclip</p>
		</div>
		<div class="slot center">
			<div class="video-container">
				<?php new \Video(
    	'brand-clip',
    	'/content/resources/media/soelden/brandclip/SOEL_Brandclip_2022_Web.mp4',
    	'16/9',
    	'content/resources/media/soelden/brandclip/Brandclip_SOEL_Still_Web.jpg',
    	'Sölden Brandclip',
    	false,
    	true,
    	true,
    	true,
    	false,
    	'/content/resources/media/soelden/brandclip/SOEL_Brandclip_2022_Mobile.mp4',
    	'1/1',
    	'content/resources/media/soelden/brandclip/Brandclip_SOEL_Still_Mobile.jpg'
    ); ?>
			</div>
		</div>
		<div class="slot end"></div>
	</div>
</section>
<section class="norden-intro">
	<p class="norden-intro-text text-is-large desktop-only">Mitten in den Alpen, aber mit urbanem Mindset: Sölden steht für Sport, Action und Entertainment. Ob Winter oder Sommer – Sölden bringt Sport, Musik und Lifestyle auf einzigartige Weise zusammen. Der neue Markenauftritt übersetzt diesen Spirit in ein klares, progressives Design. Für eine Destination, die mehr ist als ein Ort: <span class="highlight-circle">eine Haltung.</span>.</p>
	<p class="norden-intro-text text-is-large mobile-only">Sölden ist Bewegung, Energie und Haltung. Die Marke verbindet alpinen Sport mit urbanem Lifestyle – klar, progressiv und unverwechselbar.</p>


<?php new AnimatedBanner(
	null,
	'animated-banner',
	[
		'Markenstrategie',
		'Corporate Design',
		'Branding & Implementierung',
		'Online & Offline Kommunikationskonzept',
		'Brandclip',
		'Animationen',
		'Social Media',
		'Anpassungen aller Events / Submarken'
	],
	'col-red',
	'col-red'
); ?>
</section>

<div class="spacer"></div>
<section class="soelden-section graphic-elements-text">
	<div class="soelden-text-block">
		<h2 class="heading desktop-only">Live Dynamic</h2>
		<h2 class="heading mobile-only">Graphic Elements</h2>
		<h3 class="subline desktop-only">Graphic Elements</h3>
		<p class="desktop-only">Die diagonalen Linien bringen Energie ins System. Sie geben dem Auftritt Rhythmus, schaffen Wiedererkennung und transportieren genau das, wofür Sölden steht: Bewegung, Präzision und sportliche Dynamik.</p>
		<p class="mobile-only">Die diagonalen Linien bringen Dynamik ins System und machen Bewegung sichtbar.</p>
	</div>
</section>
<section class="soelden-gallery graphic-elements-images full-width section-1">
	<div class="slot side-note-start">
		<p class="soel-side-note">Graphic Elements</p>
	</div>
	<div class="content">
		<div class="slot start">
			<?php new \Image(
   	null,
   	'lines-wide',
   	'/content/resources/media/soelden/graphics/02_SOEL_CD22_Grafiktoolbox_Linien_eng.svg',
   	'Strichgrafiken weit',
   	true
   ); ?>
		</div>
		<div class="slot center">
			<?php new \Image(
   	null,
   	'lines-medium',
   	'/content/resources/media/soelden/graphics/02_SOEL_CD22_Grafiktoolbox_Linien_mittel.svg',
   	'Strichgrafiken mittel',
   	true
   ); ?>
		</div>
		<div class="slot end">
			<?php new \Image(
   	null,
   	'lines-narrow',
   	'/content/resources/media/soelden/graphics/02_SOEL_CD22_Grafiktoolbox_Linien_weit.svg',
   	'Strichgrafiken eng',
   	true
   ); ?>
		</div>
	</div>
	<div class="slot side-note-end"></div>
</section>
<section class="soelden-gallery graphic-elements-cols bg-color-anthrazit full-width">
	<div class="slot side-note-start empty"></div>
	<div class="content vert-align-center">
		<div class="slot start">
			<div class="soelden-text-block no-max-width">
				<h2 class="heading color-white desktop-only">We like to move it</h2>
				<h2 class="heading color-white mobile-only">Typography</h2>
				<h3 class="subline desktop-only">Typographie</h3>
				<p class="color-white desktop-only">Die Typografie ist markant, breit und selbstbewusst. Sie verleiht der Marke Präsenz, Geschwindigkeit und Haltung – und macht den urban-sportiven Charakter Söldens auf den ersten Blick sichtbar.Die Typografie wird um zentralen Identifikationsmerkmal der Marke.</p>
				<p class="color-white mobile-only">Die Typografie ist breit, markant und selbstbewusst – mit viel Präsenz und Tempo.</p>
				<p class="color-white">— Font creation in cooperation with TypeTogether</p>
				<?php new \Button(
    	'typo-button',
    	null,
    	'Mehr zur Typografie',
    	'/projekte/soelden/typografie'
    ); ?>
			</div>
		</div>
		<div class="slot end">
			<?php new \Image(
   	null,
   	'typography-animation',
   	'/content/resources/media/soelden/typo/02_SOEL_Letter_R.gif',
   	'Typographie Animation',
   	true
   ); ?>
		</div>
	</div>
	<div class="slot side-note-end"></div>
</section>
<section class="soelden-gallery color-1 full-width bg-color-anthrazit">
	<div class="slot side-note-start empty"></div>
	<div class="content">
		<div class="soelden-text-block">
			<h2 class="heading color-white desktop-only">Spray Colors</h2>
			<h2 class="heading color-white mobile-only">Colors</h2>
			<h3 class="subline desktop-only">Farben</h3>
			<p class="color-white desktop-only">Die Farbwelt verbindet kühle alpine Klarheit mit urbaner Schärfe. Dunkle, technische Töne schaffen Tiefe; helle Blau- und Graunuancen bringen Frische. Kräftige Akzentfarben setzen Energie und führen gezielt durch den Auftritt.</p>
			<p class="color-white mobile-only">Die Farbwelt verbindet alpine Klarheit mit urbaner Energie und starken Akzenten.</p>
		</div>
	</div>
</section>
<section class="soelden-gallery color-2 full-width section-2 bg-col-cool-gray">
	<div class="slot side-note-start">
		<p class="soel-side-note">Colors</p>
	</div>
	<div class="content">
	<?php new \Image(
 	null,
 	'heartbeat-claim web',
 	'/content/resources/media/soelden/SOEL_CD_Farben.svg',
 	'Heartbeat of the Alps',
 	true
 ); ?>
	</div>
</section>
<div class="spacer"></div>
<section class="soelden-section heartbeat">
	<?php new \Image(
 	null,
 	'heartbeat-claim web',
 	'/content/resources/media/soelden/claim/SOEL_Claim_Linien_Web.svg',
 	'Heartbeat of the Alps',
 	true
 ); ?>
 	<?php new \Image(
  	null,
  	'heartbeat-claim mobile',
  	'/content/resources/media/soelden/claim/SOEL_Claim_Linien_Mobile.svg',
  	'Heartbeat of the Alps',
  	true
  ); ?>	
</section>
<div class="spacer"></div>
<section class="soelden-gallery logo-animation">
	<div class="slot side-note-start align-end">
		<p class="soel-side-note">Logo Animation</p>
	</div>
	<div class="content">
		<div class="soelden-text-block no-max-width">
			<h2 class="heading">Logo Animation</h2>
			<h3 class="subline">Extended Logo Animation</h3>
			<?php new \Video(
   	'logo-animation',
   	'/content/resources/media/soelden/logo/SOEL_Logo_Animation_Long_16-9.mp4',
   	'16/9',
   	'/content/resources/media/soelden/logo/SOEL_Logo_Animation_Long_16-9_Still.jpg',
   	'Sölden Logo Animation',
   	true,
   	true,
   	true,
   	true,
   	false,
   	'/content/resources/media/soelden/logo/SOEL_Logo_Animation_Long_1-1.mp4',
   	'1/1',
   	'/content/resources/media/soelden/logo/SOEL_Logo_Animation_Long_1-1_Still.jpg'
   ); ?>
		</div>
	</div>
	<div class="slot side-note-end">
	</div>
</section>
<div class="mobile-spacer"></div>
<?php new \Image(
	null,
	'full-width-image',
	'/content/resources/media/soelden/06_SOEL_Trennerbild.jpg',
	'Alpenpanorama',
	true
); ?>
<section class="soelden-gallery layout-1 bg-color-anthrazit full-width">
	<div class="slot side-note-start">
		<p class="soel-side-note">Layout</p>
	</div>
	<div class="content">
		<div class="soelden-text-block no-max-width">
			<h2 class="heading color-white"><span class="color-cut-3">(</span>Don't<span class="color-cut-3">)</span> break the rules</h2>
			<div class="slots">
				<div class="slot">
					<h3 class="subline desktop-only">Layout</h3>
					<p class="color-white desktop-only">Das Layoutsystem gibt der Marke Struktur und zugleich Beweglichkeit. Es sorgt für einen konsistenten Auftritt über alle Medien hinweg.</p>
					<p class="color-white mobile-only">Das Layout schafft Struktur, Wiedererkennung und Raum für starke Bildwelten.</p>
				</div>
				<div class="slot">
					<h3 class="subline">Logo platzierung</h3>
					<p class="color-white">1. Abstand Rand = 7 x<br>2. Breite Logo = 13 x</p>
				</div>
				<div class="slot">
					<?php new \Image(
     	null,
     	'logo-placement',
     	'/content/resources/media/soelden/layout/01_SOEL_Logo_Platzierung.png',
     	'Logo-Platzierung',
     	true
     ); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="slot side-note-end"></div>
</section>
<section class="soelden-section layout-2 bg-color-anthrazit full-width">
	<div class="image-with-lines">
		<?php new \Image(
  	null,
  	'lines',
  	'/content/resources/media/soelden/graphics/02_SOEL_CD22_Grafiktoolbox_Linien_mittel.svg',
  	'Strichgrafik',
  	true
  ); ?>
		<?php new \Image(
  	null,
  	'layout-example',
  	'/content/resources/media/soelden/layout/03_SOEL_HikeMap.jpg',
  	'Layout-Beispiel',
  	true
  ); ?>
	</div>
</section>
<section class="soelden-gallery social-media-1 bg-color-anthrazit full-width">
	<div class="slot side-note-start empty"></div>
	<div class="content">
		<div class="soelden-text-block ">
			<h2 class="heading color-white desktop-only">Follow me, but I'm Lost too</h2>
			<h2 class="heading color-white mobile-only">Social Media</h2>
			<h3 class="subline desktop-only">Social Media</h3>
			<p class="color-white desktop-only">Für Social Media wurde die Markenlogik in einen flexiblen digitalen Auftritt übersetzt. Prägnante Typografie, wiedererkennbare Grafikelemente und ein modulares System sorgen für einen Feed, der eigenständig wirkt und dennoch klar zur Marke gehört.</p>
			<p class="color-white mobile-only">Auch digital bleibt die Marke prägnant, flexibel und klar wiedererkennbar.</p>
			</div>
		</div>
	</div>
	<div class="slot side-note-end"></div>
</section>
<section class="soelden-gallery social-media-2 bg-color-anthrazit full-width">
	<div class="slot side-note-start">
		<p class="soel-side-note">Social Media</p>
	</div>
	<div class="content">
		<div class="soelden-text-block no-max-width">
				<h3 class="subline">Icons</h3>
				<div class="soelden-icons">
					<?php new \Image(
     	null,
     	null,
     	'/content/resources/media/soelden/social/SOEL_SocialMedia_StoryIcons_Web.svg',
     	'Sölden Social Media Icons',
     	true,
     	'/content/resources/media/soelden/social/SOEL_SocialMedia_StoryIcons_Mobile.svg'
     ); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="slot side-note-end"></div>
</section>
<section class="soelden-gallery social-media-2 bg-color-anthrazit full-width">
	<div class="slot side-note-start empty"></div>
		<div class="content">
			<div class="soelden-text-block no-max-width">
				<h3 class="subline">Postings + Stories</h3>
				<div class="soelden-feed-carousel">
					<?php new \Image(
     	null,
     	'story-mockup',
     	'/content/resources/media/soelden/social/SOEL_SM_Carousel_mockup.png',
     	'Social Media Carousel',
     	true
     ); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="slot side-note-end"></div>
</section>
<section class="soelden-gallery social-media-3 bg-color-anthrazit full-width">
	<div class="slot side-note-start empty"></div>
	<div class="content">
		<div class="soelden-text-block no-max-width">
			<?php new \Image(
   	null,
   	'soelden-so-me-examples',
   	'/content/resources/media/soelden/social/SOEL_SM_Postings_Web.png',
   	'Sölden Social Media Postings',
   	true
   ); ?>
		</div>
	</div>
	<div class="slot side-note-end"></div>
</section>
<section class="soelden-gallery social-media-4 bg-color-anthrazit full-width">
	<div class="slot side-note-start empty"></div>
		<div class="content">
			<div class="soelden-text-block no-max-width full">
				<h3 class="subline">Social Media Feed</h3>
				<div class="soelden-feed-mockup">
					<div class="feed-mockup-wrapper">
						<?php new \Image(
      	null,
      	'feed-mockup',
      	'/content/resources/media/soelden/social/SOEL_SM_Feed_mockup.png',
      	'Social Media Carousel',
      	true
      ); ?>
	  				</div>
						<?php new \Image(
      	null,
      	'lines',
      	'/content/resources/media/soelden/graphics/02_SOEL_CD22_Grafiktoolbox_Linien_mittel.svg',
      	'Strichgrafik',
      	true
      ); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="slot side-note-end"></div>
</section>
<section class="soelden-gallery website">
	<div class="slot side-note-start">
		<p class="soel-side-note">Screendesign</p>
	</div>
		<div class="content">
			<?php new \Video(
   	'website-clip',
   	'/content/resources/media/soelden/layout/SOEL_Website_Screendesign.mp4',
   	'1600/1020',
   	'/content/resources/media/soelden/layout/SOEL_Website_New_Still.jpg',
   	'Sölden Website',
   	true,
   	true,
   	true,
   	true,
   	false
   ); ?>
		</div>
	</div>
	<div class="slot side-note-end"></div>
</section>
<section class="soelden-gallery full-width huge-space">
	<div class="slot side-note-start">
		<p class="soel-side-note">gifs</p>
	</div>
	<div class="content">
		<div class="soelden-text-block no-max-width">
	  		<h2 class="heading desktop-only">Move it nice and sweet</h2>
			<h3 class="subline desktop-only">Animated GIFs</h3>
			<h3 class="subline mobile-only">GIFs: Move it nice an sweet</h3>
			<div class="soelden-gifs">
				<?php new \Image(
    	null,
    	'soelden-gif',
    	'/content/resources/media/soelden/gifs/SOEL_GIF1_Claim.gif',
    	'Heartbeat of the Alps',
    	true
    ); ?>
				<?php new \Image(
    	null,
    	'soelden-gif',
    	'content/resources/media/soelden/gifs/SOEL_GIF2_Linien.gif',
    	'Sölden',
    	true
    ); ?>
				<?php new \Image(
    	null,
    	'soelden-gif',
    	'/content/resources/media/soelden/gifs/SOEL_GIF3_HappyPlace.gif',
    	'My Happy Place',
    	true
    ); ?>
				<?php new \Image(
    	null,
    	'soelden-gif',
    	'/content/resources/media/soelden/gifs/SOEL_GIF4_SkiYouLater.gif',
    	'Ski you later',
    	true
    ); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="slot side-note-end"></div>
</section>

<div class="section full-width with-deco bg-color-white">
<?php new \Image(
	null,
	'full-width-image',
	'/content/resources/media/soelden/branding/SOEL_GondelBranding.jpg',
	'Anwendungsbeispiel Gondeln',
	true
); ?>
<?php new \Image(
	null,
	'deco-element',
	'/content/resources/media/soelden/02_SOEL_CD22_Grafiktoolbox_Linien_Grafik_Gondel.svg',
	'Deco Element Gondeln',
	true
); ?>
</div>



<section class="full-width bg-color-white mt-5">
	<div class="soelden-gallery website">
		<div class="slot side-note-start empty"></div>
			<div class="content">
				<div class="soelden-text-block no-max-width">
	  				<h2 class="heading">This is how Sölden looks like</h2>
				</div>
			</div>
		</div>
		<div class="slot side-note-end"></div>
	</div>
	<div class="soelden-gallery folder">
		<div class="slot side-note-start">
			<p class="soel-side-note">Print</p>
		</div>
		<div class="content">
			<?php new \Image(
   	null,
   	'soelden-folder',
   	'/content/resources/media/soelden/branding/01_SOEL_Folder_Winter.png',
   	'Sölden Folder',
   	true
   ); ?>
		</div>
		<div class="slot side-note-end"></div>
	</div>
</section>
<section class="soelden-gallery full-width skiwear bg-color-white">
	<div class="slot side-note-start">
		<p class="soel-side-note">Ski Helmet • Skiboot Bag • Neckwarmer</p>
	</div>
		<div class="content image-layout">
			<div class="col">
				<div class="skibootbag-item">
					<?php new \Image(
     	null,
     	'desktop-only',
     	'/content/resources/media/soelden/branding/03_SOEL_Skibootbag.jpg',
     	'Sölden Skiboot Bag',
     	true
     ); ?>
				</div>
				<div class="skibootbag-item">
					<?php new \Image(
     	null,
     	'mobile-only',
     	'/content/resources/media/soelden/03_SOEL_Skibootbag_Mobile.jpg',
     	'Sölden Skiboot Bag',
     	true
     ); ?>
				</div>
			</div>
			<div class="col mobile-pair">
				<div class="pair-item">
					<?php new \Image(
     	null,
     	null,
     	'/content/resources/media/soelden/branding/04_SOEL_Helmbranding.png',
     	'Sölden Skihelm',
     	true
     ); ?>
				</div>
				<div class="pair-item">
					<?php new \Image(
     	null,
     	null,
     	'/content/resources/media/soelden/branding/SOEL_Buff.png',
     	'Sölden Buff',
     	true
     ); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="slot side-note-end"></div>
</section>
<section class="soelden-gallery full-width photo-point">
	<div class="slot side-note-start">
		<p class="soel-side-note">Photo Point</p>
	</div>
	<div class="content">
		<?php new \Image(
  	null,
  	'photo-point',
  	'/content/resources/media/soelden/branding/06_SOEL_Photopoint_NEU.jpg',
  	'Sölden Photo Point',
  	true
  ); ?>
  <?php new \Image(
  	null,
  	'deco-element',
  	'/content/resources/media/soelden/06_SOEL_Photopoint_Grafik.svg',
  	'Deco Element Gondeln',
  	true
  ); ?>
	</div>
	<div class="slot side-note-end"></div>
</section>
<section class="soelden-gallery full-width tram tram-mob bg-color-anthrazit huge-space">
	<div class="slot side-note-start">
		<p class="soel-side-note">Tram</p>
	</div>
	<div class="content">
		<?php new \Image(
  	null,
  	'tram',
  	'/content/resources/media/soelden/branding/07_SOEL_Tram_Beklebung.png',
  	'Sölden Tram Marketing',
  	true
  ); ?>
	</div>
	<div class="slot side-note-end"></div>
</section>
<section class="soelden-gallery full-width tram bg-color-anthrazit huge-space">
	<div class="slot side-note-start">
		<p class="soel-side-note">Bike Box</p>
	</div>
	<div class="content">
		<?php new \Image(
  	null,
  	'bike-box',
  	'/content/resources/media/soelden/branding/08_SOEL_BikeBox.jpg',
  	'Sölden Bike Box',
  	true
  ); ?>
	</div>
	<div class="slot side-note-end"></div>
</section>
<section class="soelden-gallery full-width soelden-beanie-section bg-color-anthrazit">
	<div class="slot side-note-start">
		<p class="soel-side-note">Beanie</p>
	</div>
	<div class="content">
		<div class="">
			<?php new \Image(
   	null,
   	'soelden-beanie',
   	'/content/resources/media/soelden/Soel_Beanie.jpg',
   	'Sölden Beanie',
   	true
   ); ?>
		</div>
	</div>
	<div class="slot side-note-end"></div>
</section>
<section class="soelden-gallery full-width soelden-bag">
	<div class="slot side-note-start">
		<p class="soel-side-note">Jutebeutel</p>
	</div>
	<div class="content">
		<div class="image-with-lines left">
			<?php new \Image(
   	null,
   	'lines',
   	'/content/resources/media/soelden/graphics/02_SOEL_CD22_Grafiktoolbox_Linien_mittel.svg',
   	'Strichgrafik',
   	true
   ); ?>
			<?php new \Image(
   	null,
   	'soelden-bag',
   	'/content/resources/media/soelden/branding/SOEL_Bag.jpg',
   	'Layout-Beispiel',
   	true
   ); ?>
		</div>
	</div>
	<div class="slot side-note-end"></div>
</section>
<section class="events-intro full-width">
<header>
	<h2 class="heading">Sport, Action & Enter<wbr>tainment</h2>
	</header>
	<?php new \Image(
 	null,
 	'full-width-image',
 	'/content/resources/media/soelden/12_SOEL_Trenner_Bild_Weltcup.jpg',
 	'Sölden Snow Park',
 	true
 ); ?>
	
</section>
<section class="soelden-gallery full-width world-cup-1">
	<div class="slot side-note-start empty"></div>
	<div class="content">
		<div class="soelden-text-block">
			<h3 class="subline">Skiweltcup</h3>
			<p>Wenn Sölden Bühne wird, verdichtet sich der Markenauftritt zu einem Erlebnis – sichtbar, kraftvoll und mit maximaler Wiedererkennbarkeit.</p>
		</div>
	</div>
	<div class="slot side-note-end"></div>
</section>
<section class="soelden-gallery full-width world-cup-2 huge-space">
	<div class="slot side-note-start empty">
		<p class="soel-side-note">Events</p>
	</div>
	<div class="content">
		<?php new \Image(
  	null,
  	'full-width-image',
  	'/content/resources/media/soelden/world_cup/02_Skiweltcup_Mockup.jpg',
  	'Sölden Ski-Weltcup Mockup',
  	true
  ); ?>
	</div>
	<div class="slot side-note-end"></div>
</section>
<section class="soelden-gallery full-width world-cup-3 huge-space">
	<div class="slot side-note-start empty"></div>
		<div class="content">
			<div class="wc-products">
				<div class="col start" style="flex-basis: 72%;">
					<?php new \Video(
     	'world-cup-video',
     	'/content/resources/media/soelden/world_cup/SOEL_Weltcup_2023_16-9.mp4',
     	'16/9',
     	'/content/resources/media/soelden/world_cup/SOEL_Weltcup_Still.jpg',
     	'Soelden Ski Weltcup Highlights',
     	true,
     	true,
     	true,
     	true,
     	false
     ); ?>
					<?php new \Image(
     	null,
     	'world-cup-iphone',
     	'/content/resources/media/soelden/world_cup/05_SOEL_Skiweltcup_Iphone.png',
     	'Sölden Ski Weltcup Social Media Posting',
     	true
     ); ?>
				</div>
				<div class="col end" style="flex-basis: 28%;">
					<?php new \Image(
     	null,
     	'world-cup-ski',
     	'/content/resources/media/soelden/world_cup/Skiweltcup_Ski_quer.png',
     	'Sölden Ski Weltcup Skier',
     	true
     ); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="slot side-note-end"></div>
</section>
<section class="soelden-gallery full-width project-links huge-space">
	<div class="slot side-note-start empty"></div>
	<div class="content">
		<div class="soelden-text-block no-max-width">
			<h3 class="subline">More Sölden Events</h3>
			<div class="buttons">
				<?php new \Button(
    	null,
    	'project-button',
    	'Electric Mountain Festival',
    	'/projekte/soelden/electric-mountain-festival'
    ); ?>
				<?php new \Button(
    	null,
    	'project-button',
    	'Ötztaler Radmarathon',
    	'/projekte/soelden/oetztaler-radmarathon'
    ); ?>
				<?php new \Button(
    	null,
    	'project-button',
    	'Test Fest',
    	'/projekte/soelden/test-fest'
    ); ?>
			</div>
		</div>
	</div>
	<div class="slot side-note-end"></div>
</section>
<section class="soelden-outro bg-color-anthrazit full-width">
	<h2 class="heading color-white">This is <br>Sölden</h2>
	<div class="image-with-lines left">
		<?php new \Image(
  	null,
  	'lines',
  	'/content/resources/media/soelden/graphics/02_SOEL_CD22_Grafiktoolbox_Linien_mittel.svg',
  	'Strichgrafik',
  	true
  ); ?>
  	<?php new \Video(
   	'outro-video',
   	'/content/resources/media/soelden/Schlussvideo_16x9.mp4',
   	'16/9',
   	'/content/resources/media/soelden/Schlussvideo_Still.jpg',
   	'Soelden Outro Video',
   	true,
   	true,
   	true,
   	true,
   	false
   ); ?>	
	</div>
</section>