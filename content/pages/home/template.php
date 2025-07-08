<?php

$projects = ['/projekte/soelden', '/projekte/seefeld', 'projekte/gurgl'];

new \SiteHeader(null, null, true, null, null, null, [], []);
?>
<main>
	<section class="showreel overlap-header">
		<?php new \Video(
		    'showreel-video',
		    '/content/resources/media/agency/Norden_Showreel_Web.mp4',
		    '16/9',
		    '/content/resources/media/agency/Norden_Showreel_Web_Still.png',
		    'NORDEN Showreel',
		    false,
		    true,
		    true,
		    true,
		    false
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
				<p class="text-style-big">Wir sind <span class="bold">NORDEN</span></p>
				<p class="text-style-big bold">Eine Agentur mitten in den Tiroler Alpen – mit großem Gespür für Menschen, Orte und Identität.</p>
			</div>
			<div class="intro-timeline-wrapper">
				<div class="timeline-strip"></div>
				<div>
					<div class="intro-entry">
						<p class="text-style-big">Was wir machen?</p>
						<div>
							<p>Wir machen Marken sichtbar, Inhalte verständlich und Ideen lebendig.Unser Herz schlägt für gutes Design, klare Kommunikation und Projekte, die etwas bewegen. Ob Tourismus, Branding, Konzeption, Animation,... – wir gestalten, animieren, denken mit. Und manchmal auch quer.</p>
							<p style="margin-top: 1.25em;">Kreativität ohne Schublade. Alles, was gute Kommunikation 	braucht – 	von Anfang an.</p>
							<a class="button text-style-button secondary" href="/agentur">Mehr zu uns</a>
						</div>
					</div>
					<div class="intro-entry big-margin">
						<p>Kunden, die uns bereits ihr Vertrauen schenken:</p>
						<?php new \ClientList(null, null); ?>
					</div>	
					<div class="intro-entry huge-margin">
						<p class="text-style-big">Ein kleiner Teaser an Projekten ...</p>
						<div class="all-projects-wrapper">
							<p class="text-style-big">oder doch gleich mehr?</p>
							<a class="button text-style-button primary" href="/agentur">Alle Projeckte</a>
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

