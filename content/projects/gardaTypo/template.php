<?php
$seoTitle = 'Garda Font | NORDEN';
$seoDescription =
	'Für das Ötztal Magazin entwickelte NORDEN ein neues Design für die Printausgabe.';

if (isset($NORDEN_TEMPLATE_META_ONLY) && $NORDEN_TEMPLATE_META_ONLY) {
	$NORDEN_TEMPLATE_META = [
		'title' => $seoTitle,
		'description' => $seoDescription
	];
	return;
}
?>

<div class="project-wrapper garda-typo">
    <section class="project-section section-1 has-padding-lr">
	<div class="video ">
		<?php new Video(
  	'video',
  	'/content/resources/media/gardaTypo/01_garda_font_header_animation.mp4',
  	'15/8',
  	'/content/resources/media/gardaTypo/01_garda_font_header_animation_Still.jpg',
  	'Ötztal Magazin Video',
  	false,
  	true,
  	true,
  	true,
  	false
  ); ?>
	</div>
	</section>

	<section class="project-section section-2 has-padding-lr bg-col-turquoise" >
		<div class="row">
			<div class="col s16 m16 l12 xl10">
				<p class="text-is-large col-white">Eine individuell entwickelte Schrift, die den Geist von Garda Trentino einfängt. Dynamisch, <span class="highlight-circle">unverwechselbar</span> und markant.Die neue Garda Headline Font verbindet italienischen Lifestyle mit sportlicher Bewegung – und schafft so einen hohen Wiedererkennungswert über alle Touchpoints hinweg.</p>
			</div>
		</div>
	</section>

	<section class="project-section section-3 pt-0 bg-col-turquoise has-padding-lr">
		<?php new AnimatedBanner(
  	null,
  	'animated-banner',
  	['Fontdesign', 'Konzeptionierung'],
  	'col-gold',
  	'col-gold',
  	null,
  	'—' // no separators
  ); ?>
	</section>

	<section class="project-section section-4 has-padding-lr bg-col-turquoise">
		<div class="row">
			<div class="col s16 m12 l10 xl9">
				<h2 class="is-headline col-light-blue">Customized Corporate Font für GARDA trentino:</h2>
			</div>
		</div>
		<div class="row">
			<div class="col s16 m8 l7">
			<div class="meta-headline">Leitidee:</div>
			<p class="is-text col-white">Die Garda Headline Font ist eine moderne, kursive Sans-Serif mit zeitloser, sportlich-dynamischer Wirkung. Durch die geneigte Form entsteht ein starkes Bewegungsgefühl, das durch eine leicht variierende x-Höhe zusätzlich belebt wird.</p>
			<p class="is-text col-white">Ihr Charakter basiert auf individuell pro Zeichen auswählbaren, modifizierte Buchstaben, die über  Dropdown-Menü gewählt werden. So entsteht eine markante, moderne Schrift mit unverwechselbarem „Italian Outdoor“-Charakter.</p>
			<p class="is-text col-white">— Font creation in cooperation 
			with TypeTogether</p>
			</div>
			<div class="col s16 m8 l8 push-l1">
			<?php new Image(
   	null,
   	'image',
   	'/content/resources/media/gardaTypo/02_garda_leitidee.gif',
   	'Garda Font Leitidee',
   	false
   ); ?>
			</div>
		</div>
	</section>

	<section class="project-section section-5">
	<?php new Image(
 	null,
 	'image',
 	'/content/resources/media/gardaTypo/03_garda_font_GARDA_desktop.svg',
 	'Garda Font Desktop',
 	false,
 	'/content/resources/media/gardaTypo/03_garda_font_GARDA_mobile.svg'
 ); ?>
	</section>

	<section class="project-section section-6 has-padding-lr">
		<div class="row">
			<div class="col s15 m6 l6">
			<?php new Image(
   	null,
   	'image',
   	'/content/resources/media/gardaTypo/04_grada_font_charakter.svg',
   	'Garda Font Charakter',
   	false
   ); ?>
			</div>
			<div class="col s16 m9 l8 xl7 push-m1 push-l1">
				<div class="meta-headline">Font Charakter:</div>
				<p class="is-text col-black">Ihr Charakter basiert auf Kontrast: Runde, offene Formen wirken leicht und lebendig, während kantige Elemente an Natur, Felsen und sportliche Aktivität erinnern. Individuell modifizierte Buchstaben verbinden weiche, organische Formen mit klaren Linien zu einem typischen „italienischen Flow“. Einzelne gestretchte Buchstaben spiegeln den Sportlichen Charakter der Region wieder.</p>
			</div>
		</div>
	</section>

	<section class="project-section section-7 pb-0">
		<?php new Image(
  	null,
  	'image',
  	'/content/resources/media/gardaTypo/05_garda_font_Details.svg',
  	'Garda Font Details',
  	false
  ); ?>
	</section>

	<section class="project-section section-8 has-padding-lr">
		<div class="row">
			<div class="col s16 m14 l8 xl6">
				<div class="meta-headline">Fonts in use:</div>
				<p class="is-text">Die Garda Headline Schrift wird für prägnante Headlines, Branding und Editorial-Layouts eingesetzt. Im Zusammenspiel mit der klaren Neutralität von Montserrat entsteht ein ausgewogener Kontrast aus Ausdrucksstärke, Bewegung und hoher Lesbarkeit.</p>
			</div>
			<div class="col s16">
				<?php new Image(
    	null,
    	'image',
    	'/content/resources/media/gardaTypo/06_GARDA_Flyer.png',
    	'Garda Flyer',
    	false
    ); ?>
			</div>
		</div>
	</section>

	<section class="project-section section-9 has-padding-lr pt-0">
	<?php new Image(
 	null,
 	'image',
 	'/content/resources/media/gardaTypo/07_garda_typo_poster_mockup.jpg',
 	'Garda Flyer',
 	false
 ); ?>
	</section>

	<section class="project-section section-10 has-padding-lr">
		<div class="row">
			<div class="col s16 m6 l5">
			<?php new Button(
				null,
				'project-button',
				'TypoGraphy in use',
				'/projekte/garda-trentino-cd'
			); ?>
			</div>
			<div class="col s16 m6 l5">
			<?php new Button(
				null,
				'project-button disabled',
				'Rock master',
				'/projekte/rockmaster'
			); ?>
			</div>
		</div>
	</section>
</div>