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
	<section class="content-card full-width">
		<header>
			<p class="text-style-subline vertical-text color-primary">Hi</p>
			<div class="header-content">
				<div class="header-text">
					<h1 class="heading">Servus</h1>				
				</div>
			</div>
		</header>
		<div class="content align-right intro-wrapper">
			<div class="intro-timeline-wrapper">
				<div class="row intro-entry">
					<div class="col s16 m5 l5">
						<p class="text-style-big">Wir sind <span class="bold highlight-circle">NORDEN</span></p>
					</div>
					<div class="col s16 m10 l10 push-m1">
						<p class="text-style-big bold desktop-only">Eine Agentur mit großem Gespür für Menschen, Orte und Identität.</p>
						<p class="mobile-intro mobile-only">Eine Agentur mit Gespür für Menschen, Orte und Identität.Wir machen Marken sichtbar, Inhalte verständlich und Ideen lebendig.Mit strategischem Denken, gutem Design und klarer <span class="highlight-circle">Kommunikation</span> gestalten wir Marken über alle Touchpoints hinweg..</p>
					</div>
				</div>

				<div class="row intro-entry desktop-only">
					<div class="col s16 m5 l5">
						<p class="text-style-big">Was wir machen?</p>
					</div>
					<div class="col s16 m10 l10 push-m1">
						<div>
							<p>Wir machen Marken sichtbar, Inhalte verständlich und Ideen lebendig.Unser Herz schlägt für strategisches Denken, gutes Design und klare <span class="highlight-circle">Kommunikation</span>.Wir gestalten Marken über alle Touchpoints hinweg – klar im Profil, flexibel in der Anwendung und in <span class="highlight-circle">jedem Me</span>dium stimmig.</p>
							<p style="margin-top: 1.25em;">Kreativität ohne Schublade. Alles, was gute Kommunikation 	braucht – 	von Anfang an.</p>
							<a class="button text-style-button secondary" href="/agentur">Mehr zu uns</a>
						</div>
					</div>
				</div>

				<div class="row intro-entry flex-entry desktop-only">
					<div class="col s16 m5 l10">
						<p class="text-style-big">Ein kleiner Teaser an Projekten ...</p>
					</div>
					<div class="col s16 m10 l5 push-m1">
						<div class="button-text-wrapper">
							<p class="text-style-big justify-right">... oder doch gleich mehr?</p>
							<a class="button text-style-button primary" href="/work">Alle Projekte</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="desktop-only">
		<?php new \ProjectsPreview(null, 'full-width', $projects); ?>
	</div>

	<div class="mobile-only mobile-projects-preview full-width no-padding">
		<div class="row entry">
			<div class="col s8">
				<p class="text-style-big">Ein kleiner Teaser an Projekten ...</p>
			</div>
			<div class="col s5 push-s1">
				<a class="button text-style-button primary" href="/work">Alle Projekte</a>
			</div>
		</div>
		<?php new \ProjectsPreview(null, 'full-width', $projectsMobile); ?>
	</div>
	<?php new \ClientLogoStrip(null, 'full-width'); ?>
	<div class="spacer full-width" style="height: 6rem; background-color: #eceff0;"></div>
</main>
<?php new \SiteFooter(null, null); ?>

