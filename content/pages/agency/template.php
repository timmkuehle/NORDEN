<?php

$people = [
	[
		'name' => 'Julian',
		'image' => '/content/resources/media/TeamFoto_Elaine.jpg'
	],
	[
		'name' => 'Lisa',
		'image' => '/content/resources/media/TeamFoto_Lisa.jpg'
	],
	[
		'name' => 'Elaine',
		'image' => '/content/resources/media/TeamFoto_Elaine.jpg'
	],
	[
		'name' => 'Lena',
		'image' => '/content/resources/media/TeamFoto_Lisa.jpg'
	],
	[
		'name' => 'Elena',
		'image' => '/content/resources/media/TeamFoto_Elaine.jpg'
	],
	[
		'name' => 'You?',
		'image' => '/content/resources/media/TeamFoto_You.png'
	]
]; ?>
<section class="content-card">
	<header>
		<div class="header-content has-side-note">
			<h1 class="text-style-subline vertical-text color-primary side-note no-inline-margin">This is NORDEN</h1>
			<div class="header-text long">
				<p class="text-style-big">Mit strategischer Kompetenz und hohem Designanspruch bieten wir erstklassigen Service in den Bereichen <span class="uppercase bold">Corporate Design, Film, Motion Design</span> und <span class="uppercase bold">crossmedialen Konzepten.</span></p>
			</div>
		</div>
	</header>
	<div class="content">
		<div class="agency-intro">
			<div class="slot start">
				<div class="row top">
					<div class="col start">
						<p class="hidden text-style-subline vertical-text side-note" aria-hidden="true">hidden content</p>
					</div>
					<div class="col end">
						<p class="copy"><span class="bold">NORDEN</span> ist eine aufstrebende Agentur, die bereits zahlreiche Auszeichnungen für ihre herausragende Arbeit in den Bereichen visuelle Kommunikation, Markenentwicklung und Beratung erhalten hat. Unser Fokus liegt auf strategischer Markenberatung, Region Branding und der kreativen Entwicklung sowie Umsetzung von Kommunikationslösungen, die sämtliche Plattformen überspannen.</p>
					</div>
				</div>
				<div class="row bottom">
					<div class="col start">
						<p class="text-style-subline vertical-text color-primary side-note">What we love</p>
					</div>
					<div class="col end">
						<div class="bullet-list">
							<h2 class="heading">Digital</h2>
							<ul>
								<li>Filmprojekte</li>
								<li>Corporate Kampagnen</li>
								<li>Motion Design</li>
								<li>Social Media</li>
							</ul>
						</div>
						<div class="bullet-list">
							<h2 class="heading">Klassisch</h2>
							<ul>
								<li>Corporate Design</li>
								<li>Strategische Markenberatung</li>
								<li>Crossmedia Kampagnen</li>
								<li>Print- & Grafikdesign</li>
								<li>Illustration</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="slot end">
				<?php new Image(
    	null,
    	null,
    	'content/resources/media/Fotos_Agentur_1.webp',
    	'Einblock in die Agentur'
    ); ?>
			</div>
		</div>
	</div>
</section>
<section class="content-card full-width bg-col-light-shade">
	<header>
		<div class="header-content">
			<p class="text-style-subline vertical-text color-primary side-note">What we look like</p>	
			<div class="header-text">
				<h2 class="heading">Hi, we are NORDEN !</h2>				
			</div>
			<div class="buttons">
				<h3 class="heading">Join our team!</h3>
				<?php new Button(null, null, 'Jobs', '/jobs', 'secondary'); ?>
			</div>
		</div>
		
	</header>
	<div class="content">
		<?php new PeopleGallery(null, null, $people); ?>
	</div>
</section>
	
