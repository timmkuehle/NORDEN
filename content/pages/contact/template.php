<?php

$in_link = 'https://at.linkedin.com/company/norden-werbeagentur';
$fb_link = 'https://www.facebook.com/norden.agency/';
$ig_link = 'https://www.instagram.com/norden_werbeagentur/';

new \SiteHeader(null, null, true, null, null, null, [], []);
?>
<main>
	<h1 class="page-title">NORDEN</h1>
	<section class="contact-data">
		<div class="row">
			<p>Visuelle Kommunication, <br>Markenentwicklung & Beratung<p>
		</div>
		<div class="row address">
			<a href="https://maps.app.goo.gl/12PomVjPgj3omDMZ8" rel="noopenernoreferrer">Kaiser-Franz-Joseph-Str. 10<br>6020 Innsbruck / Austria</a>
		</div>
		<span class="row">+43 512935681</span>
		<p class="row links">
			<a href="mailto:mail@norden.co">
				<span class="prefix">></span>
				<span class="text">mail@norden.co</span>
			</a>
			<a href="tel:+43512935681">
				<span class="prefix">></span>
				<span class="text">www.norden.co</span>
			</a>
		</p>
	</section>
</main>
<footer class="contact-footer minimal-footer">
	<div class="contact-links">
		<a href="mailto:mail@norden.co" class="contact-link">Say hi</a>
		<a href="tel:+43512935681" class="contact-link">Give us a call</a>
	</div>
	<?php new \FooterMenu(null, null); ?>
	<div class="some-links">
		<?php new \SocialMediaLink(null, null, 'linkedin', $in_link); ?>
		<?php new \SocialMediaLink(null, null, 'facebook', $fb_link); ?>
		<?php new \SocialMediaLink(null, null, 'instagram', $ig_link); ?>
	</div>
</footer>
