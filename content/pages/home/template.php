<?php

$projects = ['/projekte/soelden', '/projekte/seefeld', 'projekte/gurgl'];

new SiteHeader(null, null, true, null, null, null, [], []);
?>
<main>
	<?php new ShowReel(null, 'overlap-header', [
 	'/content/resources/media/agency/Norden_Showreel_Web.mp4'
 ]); ?>
	<section class="content-card full-width bg-col-light-shade">
		<header>
			<p class="text-style-subline vertical-text color-primary">Hi</p>
			<div class="header-content">
				<div class="header-text">
					<h1 class="heading">Servus</h1>				
				</div>
			</div>
		</header>
		<div class="content align-right">
			<p class="text-style-big">mit unserem scharfen Blick für Kommunikation, <span class="bold uppercase">Markenentwicklung</span> und <span class="bold uppercase">Beratung</span> bringen wir deine Marke auf ein ganz neues Level. Hier treffen <span class="bold uppercase">Kreativität</span> und Digital aufeinander, um die Grenzen des Designs zu sprengen. Willkommen bei <span class="bold uppercase">NORDEN</span>, wo Ideen Wirklichkeit werden!</p>
		</div>
	</section>
	<?php new ProjectsPreview(null, null, $projects); ?>
	<section class="content-card full-width bg-col-light-shade">
		<header>
			<p class="text-style-subline vertical-text color-primary">Kunden</p>
			<div class="header-content">
				<div class="header-text">
					<h2 class="heading">Let's work together</h2>			
				</div>
				<div class="buttons">
					<?php new Button(null, null, 'Say hi', 'mailto:mail@norden.co'); ?>
						<?php new Button(
      	null,
      	null,
      	'Give us a call',
      	'tel:+43512935681',
      	'secondary'
      ); ?>
				</div>
			</div>
		</header>
		<p class="subtitle">Kunden, die uns bereits ihr Vertrauen schenken:</p>
		<div class="content align-center">
			<?php new ClientList(null, null); ?>
		</div>
	</section>
	<?php new ClientLogoStrip(null, 'full-width bg-col-light-shade'); ?>
</main>
<?php new MinimalFooter(null, null); ?>
