<?php

$in_link = 'https://at.linkedin.com/company/norden-werbeagentur';
$fb_link = 'https://www.facebook.com/norden.agency/';
$ig_link = 'https://www.instagram.com/norden_werbeagentur/';

new SiteHeader(null, null, true, null, null, null, [], []);
?>
<main>
	<?php new Logo(null, null, '100%'); ?>
	<section class="contact-info">
		<div class="content bg-col-light-shade">
			<div class="slot start">
				<a href="tel:+43512935681" class="contact-link text-style-subline vertical-text color-primary">Give us a call</a>
				<a href="mailto:mail@norden.co" class="contact-link text-style-subline vertical-text color-primary">Say hi</a>
				<div class="so-me-links">
					<?php new SocialMediaLink(null, null, 'linkedin', $in_link); ?>
		 			<?php new SocialMediaLink(null, null, 'facebook', $fb_link); ?>
		 			<?php new SocialMediaLink(null, null, 'instagram', $ig_link); ?>
				</div>
			</div>
			<div class="slot center">
				<p class="intro"><span class="bold">NORDEN</span> — wo Visionen lebendig werden und Marken zu Leben erweckt werden. Mit einem starken Fokus auf strategische Markenberatung, Region Branding und der Gestaltung plattformübergreifender Kommunikationslösungen setzen wir Trends und schaffen unvergessliche Markenerlebnisse. Bist du bereit dafür, dass deine Marke nicht nur gesehen, sondern gefordert wird?</p>
				<div class="awards">
					<h2 class="awards-heading">Awards</h2>
					<div class="award">
						<a href="https://test.de" rel="noopener noreferrer">2020 German Design Award Winner:</a>
						<p>Ötztal Tourismus – Excellent Communication Design<p>
					</div>
					<div class="award">
						<a href="https://test.de" rel="noopener noreferrer">2020 German Design Award Winner</a>
						<p>Ötztal Magazin – Excellent in Brand Stratey and Creation<p>
					</div>
					<div class="award">
						<a href="https://test.de">2019 German Brand Award Special:</a>
						<p>Ötztal Tourismus – Excellent in Brand Stratey and Creation<p>
					</div>
				</div>
			</div>
			<div class="slot end">
				<div class="contact-data">
					<div class="row">
						<p><span class="bold color-primary">NORDEN</span><br>Visuell Communication<p>
						<a href="<?php echo BASE_URL; ?>">www.norden.co</a>
					</div>
					<div class="row">
						<a href="https://maps.app.goo.gl/12PomVjPgj3omDMZ8" rel="noopener noreferrer">Kaiser-Franz-Joseph-Str. 10<br>6020 Innsbruck / Austria</a>
					</div>
					<div class="row">
						<a href="tel:+43 512935681">+43 512935681</a>
					</div>
					<div class="row">
						<a href="mailto:mail@norden.co">mail@norden.co</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php new MinimalFooter(null, null); ?>
