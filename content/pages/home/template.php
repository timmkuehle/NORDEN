<?php

$projects = [
	'/projekte/soelden',
	'/projekte/seefeld',
	'/projekte/oetztal/corporate-design'
];
$projectsMobile = [
	'/projekte/soelden',
	'/projekte/seefeld',
	'/projekte/oetztal/corporate-design',
	'/projekte/soelden/electric-mountain-festival'
];

new \SiteHeader(null, null, true, null, null, null, [], []);
?>
<main>
	<section class="showreel overlap-header">
		<?php new \Video(
  	'showreel-video',
  	'/content/resources/media/agency/home/Sommer_desktop.mp4',
  	'16/9',
  	'/content/resources/media/agency/Startseitenvideo_Fruehling_Still.png',
  	'NORDEN Showreel',
  	false,
  	true,
  	true,
  	true,
  	false,
  	'/content/resources/media/agency/home/Sommer_mobile.mp4',
  	'1/1',
  	null,
  	true
  ); ?>
	</section>
	<section class="home-section">
			<p class="meta-headline">Hi und</p>
			<h1 class="main-headline">Servus,</h1>
			<div class="row">
				<div class="col s16 m6 l4">
					<p class="text-is-large">Wir sind <span class="bold highlight-circle">NORDEN.</span></p>
				</div>
				<div class="col s16 m10 l11">
					<p class="bold text-is-large mobile-small">Eine Agentur mit großem Gespür für Menschen, Orte und Identität.</p>
				</div>
			</div>
			<div class="row">
				<div class="col s16 m6 l4">
					<p class="desktop-only">Was wir machen?</p>
				</div>
				<div class="col s16 m10 l11">
					<p class="desktop-only">Wir machen Marken sichtbar, Inhalte verständlich und Ideen lebendig.Unser Herz schlägt für strategisches Denken, gutes Design und klare Kommunikation.Wir gestalten Marken über alle Touchpoints hinweg – klar im Profil, flexibel in der Anwendung und in jedem Medium stimmig.</p>
					<p class="mobile-only">Wir machen Marken sichtbar, Inhalte verständlich und Ideen lebendig. Mit strategischem Denken, gutem Design und klarer Kommunikation gestalten wir Marken über alle Touchpoints hinweg.</p>
					<p class="desktop-only">Kreativität ohne Schublade. Alles, was gute Kommunikation braucht – von Anfang an.</p>
					<?php new \Button(
     	null,
     	'home-button',
     	'Mehr zu uns',
     	'/agentur',
     	'secondary'
     ); ?>
				</div>
			</div>
			<div class="row">
				<div class="col s16">
					<p>Ein kleiner Teaser an Projekten ...</p>
				</div>
			</div>
	</section>
	<div class="desktop-only desktop-projects-preview full-width no-padding" >
		<?php new \ProjectsPreview(null, 'full-width', $projects, false); ?>
		<div class="row">
			<div class="col s16 centered">
				<p class="mobile-small text-is-large">Interesse auf mehr geweckt?</p>
				<a class="button text-style-button primary more-button" href="/work">Alle Projekte</a>
			</div>
		</div>
	</div>

	<div class="mobile-only mobile-projects-preview full-width no-padding">
		<?php new \ProjectsPreview(null, 'full-width', $projectsMobile, false); ?>
		<div class="row">
			<div class="col s16 centered">
				<p class="mobile-small text-is-large">Interesse auf mehr geweckt?</p>
				<a class="button text-style-button primary more-button" href="/work">Alle Projekte</a>
			</div>
		</div>
</div>
<section class="client-section">
	<div class="row center-row">
		<div class="col s14 m16 center-col">
			<p class="text-is-large">Eine kleine Auswahl an <span class="bold highlight-circle">Kunden</span> die uns bereits ihr Vertrauen schenken:</p>
		</div>
		</div>
		<?php new \ClientLogoStrip(null, 'full-width'); ?>
		<div class="row bottom-row">
			<div class="col s16 m16 bottom-col">
				<p class="text-is-large">Du willst auch dabei sein?</p>

				<svg width="15" height="68" viewBox="0 0 15 68" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M6.65883 67.6719C7.04935 68.0624 7.68251 68.0624 8.07304 67.6719L14.4371 61.3081C14.8277 60.9176 14.8277 60.2844 14.4371 59.8939C14.0466 59.5033 13.4135 59.5033 13.0229 59.8938L7.36597 65.5506L1.70923 59.8936C1.31871 59.5031 0.685543 59.5031 0.295012 59.8936C-0.0955198 60.2841 -0.0955315 60.9173 0.294985 61.3078L6.65883 67.6719ZM7.36719 0L6.36719 -1.84987e-05L6.36595 66.9648L7.36595 66.9648L8.36595 66.9648L8.36719 1.84987e-05L7.36719 0Z" fill="#3D73FF"/>
					</svg>
					
			</div>
		</div>
</section>
<div class="spacer full-width" style="height: 6rem;"></div>
</main>
<?php new \SiteFooter(null, null); ?>

