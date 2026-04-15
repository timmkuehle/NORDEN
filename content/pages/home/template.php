<?php

$projects = ['/projekte/soelden', '/projekte/seefeld', 'projekte/gurgl'];

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
  	'1/1'
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
  			<div class="intro-entry outside-timeline">
				<p class="text-style-big">Wir sind <span class="bold highlight-circle">NORDEN</span></p>
				<p class="text-style-big bold desktop-only">Eine Agentur mit großem Gespür für Menschen, Orte und Identität.</p>
				<p class="mobile-intro mobile-only">Eine Agentur mit Gespür für Menschen, Orte und Identität.Wir machen Marken sichtbar, Inhalte verständlich und Ideen lebendig.Mit strategischem Denken, gutem Design und klarer <span class="highlight-circle">Kommunikation</span> gestalten wir Marken über alle Touchpoints hinweg..</p>

			</div>
			<div class="intro-timeline-wrapper">
				<div class="timeline-strip"></div>
				<div>
					<div class="intro-entry desktop-only">
						<p class="text-style-big">Was wir machen?</p>
						<div>
							<p>Wir machen Marken sichtbar, Inhalte verständlich und Ideen lebendig.Unser Herz schlägt für strategisches Denken, gutes Design und klare <span class="highlight-circle">Kommunikation</span>.Wir gestalten Marken über alle Touchpoints hinweg – klar im Profil, flexibel in der Anwendung und in <span class="highlight-circle">jedem Me</span>dium stimmig.</p>
							<p style="margin-top: 1.25em;">Kreativität ohne Schublade. Alles, was gute Kommunikation 	braucht – 	von Anfang an.</p>
							<a class="button text-style-button secondary" href="/agentur">Mehr zu uns</a>
						</div>
					</div>
					<div class="intro-entry flex-entry">
						<p class="text-style-big">Ein kleiner Teaser an Projekten ...</p>

						<div class="button-text-wrapper">
						<p class="text-style-big justify-right">... oder doch gleich mehr?</p>
						<a class="button text-style-button primary" href="/work">Alle Projekte</a>
						</div>
					</div>
			</div>
			</div>
		</div>
	</section>
	<?php new \ProjectsPreview(null, 'full-width', $projects); ?>
	<?php new \ClientLogoStrip(null, 'full-width'); ?>
	<div class="spacer full-width" style="height: 6rem; background-color: #eceff0;"></div>
</main>
<?php new \SiteFooter(null, null); ?>

