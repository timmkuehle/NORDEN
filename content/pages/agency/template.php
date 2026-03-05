<?php

$people = [
    [
        'name' => 'Julian',
        'image' => '/content/resources/media/agency/TeamFoto_Elaine.jpg'
    ],
    [
        'name' => 'Elaine',
        'image' => '/content/resources/media/agency/TeamFoto_Elaine.jpg'
    ],
    [
        'name' => 'Mira',
        'image' => '/content/resources/media/agency/TeamFoto_Lisa.jpg'
    ],
    [
        'name' => 'Julia',
        'image' => '/content/resources/media/agency/TeamFoto_Lisa.jpg'
    ],
    [
        'name' => 'You?',
        'image' => '/content/resources/media/agency/TeamFoto_You.png'
    ]
]; ?>
<section class="content-card">
	<header>
		<div class="header-content has-side-note">
			<h1 class="text-style-subline vertical-text color-primary side-note no-inline-margin">This is NORDEN</h1>
			<div class="header-text">
				<p class="text-style-big">Mit strategischer Kompetenz und hohem Designanspruch bieten wir erstklassigen Service in den Bereichen <span class="uppercase bold">Corporate Design, Film, Motion Design</span> und <span class="uppercase bold">crossmedialen <span class="highlight-circle">Konzepten.</span></span> und vielem mehr.</p>
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
						<p class="copy"><span class="bold">NORDEN — Stratey and Design Agency</span><br>Every remarkable brand experience is fueled by the power of thoughtful strategy and bold design. We do both.<br><br>Mit einem starken Fokus auf strategische Markenberatung, Region Branding und der Gestaltung plattformübergreifender Kommunikationslösungen setzen wir Trends und schaffen unvergessliche Markenerlebnisse. Bist du bereit dafür, dass deine Marke nicht nur gesehen, sondern gefordert wird?</p>
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
				<?php new \Image(
				    null,
				    null,
				    'content/resources/media/agency/Fotos_Agentur_1.jpg',
				    'Einblick in die Agentur',
				    true
				); ?>
			</div>
		</div>
	</div>
</section>
<section class="content-card full-width awards-section">
	<header>
		<div class="header-content has-side-note">
			<p class="text-style-subline vertical-text color-primary side-note no-inline-margin">We are good :)</p>
			<div class="header-text">
				<div class="awards">
					<h2 class="awards-heading"><span class="highlight-circle">Awards</span></h2>
					<div class="award">
						<p class="bold">2025 German Brand Award Winner:</p>
						<p>Ötztaler Radmarathon – Excellence in Brand Strategy and Creation – Winner in Brand Communication - Brand Events<p>
					</div>
					<div class="award">
						<p class="bold">2024 German Brand Award Winner:</p>
						<p>Sölden – Winner in Brand Design - Corporate Brand<p>
					</div>
					<div class="award">
						<p class="bold">2024 German Brand Award Winner:</p>
						<p>Electric Mountain Festival – Winner in Brand Communication - Brand Events<p>
					</div>
					<div class="award">
						<p class="bold">2020 German Design Award Winner:</p>
						<p>Ötztal Tourismus – Excellent Communication Design<p>
					</div>
					<div class="award">
						<p class="bold">2020 German Design Award Winner</p>
						<p>Ötztal Magazin – Excellent in Brand Stratey and Creation<p>
					</div>
					<div class="award">
						<p class="bold">2019 German Brand Award Special:</p>
						<p>Ötztal Tourismus – Excellent in Brand Stratey and Creation<p>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="content"></div>
</section>
<!-- <section class="content-card full-width bg-col-light-shade">
	<header>
		<div class="header-content">
			<p class="text-style-subline vertical-text color-primary side-note">What we look like</p>	
			<div class="header-text">
				<h2 class="heading">Hi, we are NORDEN !</h2>				
			</div>
			<div class="buttons">
				<h3 class="heading">Join our team!</h3>
				<?php new \Button(null, null, 'Jobs', '/jobs', 'secondary'); ?>
			</div>
		</div>
		
	</header>
	<div class="content">
		<?php new \PeopleGallery(null, null, $people); ?>
	</div>
</section> -->
	
