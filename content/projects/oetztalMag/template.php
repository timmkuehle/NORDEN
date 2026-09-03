<?php
$seoTitle = 'Ötztal Magazin | NORDEN';
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

<div class="project-wrapper oetztal-magazin">
    
<section class="project-section section-1 pt-0 pb-0 bg-col-white">
	<div class="hero-stack">
		<div class="hero-media">
			<?php new Image(
   	null,
   	'hero-image',
   	'/content/resources/media/oetztalMag/01_header/oetzt_mag_header_bild_desktop.png',
   	'Ötztal Magazin Hero',
   	false,
   	'/content/resources/media/oetztalMag/01_header/oetzt_mag_header_bild_mobile.png'
   ); ?>
		</div>
		<div class="hero-intro has-padding-lr">
			<div class="row">
				<div class="col s16 m16 l12 xl8">
					<p class="text-is-large">Wieviel das Ötztal zu bieten hat, zeigt sich eindrucksvoll im jährlich erscheinenden ÖTZTAL MAGAZIN. Es erzählt auf fast 100 Seiten Geschichten aus Natur, Kultur, Tourismus und Alltag – eindrücklich, nah und über alle Jahreszeiten hinweg. Ein Magazin, das das Ötztal in all seinen Facetten zeigt. Ein Magazin das Bewegt. </p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="project-section section-3 pb-0 pt-0">
<?php new AnimatedBanner(
	null,
	'animated-banner',
	[
		'Konzept',
		'Gestaltung',
		'Editorial Design',
		'Ausarbeitung der Ausgaben',
		'Druckvorbereitung'
	],
	'col-white',
	'col-red',
	null,
	'' // no separators
); ?>
</section>
    
<section class="project-section section-4">
    <?php new Image(
    	null,
    	'image',
    	'/content/resources/media/oetztalMag/02_cover/01_oetzt_cover_mockup_desktop.jpg',
    	'Ötztal Magazin Image',
    	false
    ); ?>
	    <?php new Video(
     	'video',
     	'/content/resources/media/oetztalMag/02_cover/02_oetzt-mag-cover-animation.mp4',
     	'15/8',
     	'/content/resources/media/oetztalMag/02_cover/02_oetzt-mag-cover-animation-still.jpg',
     	'Ötztal Magazin Video',
     	false,
     	true,
     	true,
     	true,
     	false
     ); ?>
	     <?php new Image(
      	null,
      	'image',
      	'/content/resources/media/oetztalMag/02_cover/03_oetzt-mag-facts.svg',
      	'Ötztal Magazin Image',
      	false
      ); ?>
</section>

<section class="project-section section-5 has-padding-lr">
	<div class="carousel-container">
		<div class="carousel" aria-label="Inhaltsseiten carousel">
			<div class="carousel-track">
				<div class="carousel-slide">
					<?php new Image(
     	null,
     	'carousel-image',
     	'/content/resources/media/oetztalMag/03_inhaltsseiten/01_Slider/1_IMG_0937.jpg',
     	'Ötztal Magazin Inhaltsseite 1',
     	true
     ); ?>
				</div>
				<div class="carousel-slide">
					<?php new Image(
     	null,
     	'carousel-image',
     	'/content/resources/media/oetztalMag/03_inhaltsseiten/01_Slider/2_IMG_0828.jpg',
     	'Ötztal Magazin Inhaltsseite 2',
     	true
     ); ?>
				</div>
				<div class="carousel-slide">
					<?php new Image(
     	null,
     	'carousel-image',
     	'/content/resources/media/oetztalMag/03_inhaltsseiten/01_Slider/3_IMG_0788.jpg',
     	'Ötztal Magazin Inhaltsseite 3',
     	true
     ); ?>
				</div>
				<div class="carousel-slide">
					<?php new Image(
     	null,
     	'carousel-image',
     	'/content/resources/media/oetztalMag/03_inhaltsseiten/01_Slider/4_IMG_0800.jpg',
     	'Ötztal Magazin Inhaltsseite 4',
     	true
     ); ?>
				</div>
			</div>
		</div>
		<div class="carousel-navigation" aria-label="Carousel navigation">
			<button type="button" class="carousel-prev" aria-label="Previous slide"></button>
			<button type="button" class="carousel-next" aria-label="Next slide"></button>
		</div>
	</div>
</section>

<section class="project-section section-6 has-padding-lr">
    <div class="row">
        <div class="col s16 m9 l8 xl8">
		<?php new Image(
  	null,
  	'image',
  	'/content/resources/media/oetztalMag/03_inhaltsseiten/IMG_0816.jpg',
  	'Ötztal Magazin',
  	true
  ); ?>
        </div>

		<div class="col s14 m6 l7">
		<?php new Image(
  	null,
  	'quote-image',
  	'/content/resources/media/oetztalMag/03_inhaltsseiten/Zitat.svg',
  	'Ötztal Zitat',
  	true
  ); ?>
		</div>
    </div>
</section>

<section class="project-section section-7 bg-col-brown has-padding-lr">
	<div class="row">
		<div class="col s16 m6">
			<p class="is-text col-white">
			Das markante Magazin-Icon entstand aus dem „M“ des Wortes „Magazin“. Die Farben Rot, Hellblau und Dunkelblau leiten sich aus den jeweiligen Logofarben von Ötztal, Sölden und Gurgl ab und repräsentieren somit das gesamte Ötztal.
			</p>
		</div>
		<div class="col s16 m8 push-m2">
		<?php new Video(
  	'video',
  	'/content/resources/media/oetztalMag/04_Logoanaimation/Magazin_Logo_1080x1080.mp4',
  	'1/1',
  	'/content/resources/media/oetztalMag/04_Logoanaimation/Magazin_Logo_1080x1080_Still.jpg',
  	'Ötztal Magazin Logoanimation',
  	false,
  	true,
  	true,
  	true,
  	false
  ); ?>
		</div>
	</div>
</section>

<section class="project-section section-8">
<?php new Video(
	'video',
	'/content/resources/media/oetztalMag/05_Flipthrouganimation/Flipthrough_Animation.mp4',
	'3/2',
	'/content/resources/media/oetztalMag/05_Flipthrouganimation/Flipthrough_Animation_Still.jpg',
	'Ötztal Magazin Flipthroughanimation',
	false,
	true,
	true,
	true,
	false
); ?>
</section>

<section class="project-section section-9 bg-col-beige">

<div class="row has-padding-lr">
	<div class="col s16 m14 l11">
				<p class="text-is-large col-red">Typo-</p>
				<p class="is-indented text-is-large col-red">Grafie</p>
			</div>
	</div>
	<div class="row has-padding-lr">
		<div class="col s16 l14 mt">
		<?php new Image(
  	null,
  	'quote-image',
  	'/content/resources/media/oetztalMag/06_Absatzformate-Layout/01_Typo.svg',
  	'Ötztal Zitat',
  	true
  ); ?>
		</div>
	</div>
</section>

<section class="project-section section-10 pt-0 pb-0">
<?php new Image(
	null,
	'quote-image',
	'/content/resources/media/oetztalMag/06_Absatzformate-Layout/02_IMG_0830.jpg',
	'Ötztal Zitat',
	true
); ?>
</section>

<section class="project-section section-11">
		<div class="row has-padding-lr">
			<div class="col s16 m14 l11">
				<p class="text-is-large col-red">Absatz-</p>
				<p class="is-indented text-is-large col-red">Formate</p>
			</div>
		</div>

		<div class="row has-padding-lr mt gap-row">
			<div class="col s16 m8">
				<?php new Image(
    	null,
    	'quote-image',
    	'/content/resources/media/oetztalMag/06_Absatzformate-Layout/03_Absatzformate.svg',
    	'Ötztal Absatzformate',
    	true
    ); ?>
			</div>
			<div class="col s16 m8">
				<?php new Image(
    	null,
    	'quote-image',
    	'/content/resources/media/oetztalMag/06_Absatzformate-Layout/04_oetzt_mag_layout_grid.gif',
    	'Ötztal Layout Grid',
    	true
    ); ?>
			</div>
	</div>
</section>

<section class="project-section section-12">
	<div class="row has-padding-lr">
	<div class="carousel-container">
		<div class="carousel" aria-label="Inhaltsseiten carousel">
			<div class="carousel-track">
				<div class="carousel-slide">
					<?php new Image(
     	null,
     	'carousel-image',
     	'/content/resources/media/oetztalMag/08_Bildergalerie/01_SLIDEBOX/01_oetztal-mag_slidebox_1.jpg',
     	'Ötztal Magazin Bildgalerie 1',
     	true
     ); ?>
				</div>
				<div class="carousel-slide">
					<?php new Image(
     	null,
     	'carousel-image',
     	'/content/resources/media/oetztalMag/08_Bildergalerie/01_SLIDEBOX/01_oetztal-mag_slidebox_2.jpg',
     	'Ötztal Magazin Bildgalerie 2',
     	true
     ); ?>
				</div>
				<div class="carousel-slide">
					<?php new Image(
     	null,
     	'carousel-image',
     	'/content/resources/media/oetztalMag/08_Bildergalerie/01_SLIDEBOX/01_oetztal-mag_slidebox_3.jpg',
     	'Ötztal Magazin Bildgalerie 3',
     	true
     ); ?>
				</div>
				<div class="carousel-slide">
					<?php new Image(
     	null,
     	'carousel-image',
     	'/content/resources/media/oetztalMag/08_Bildergalerie/01_SLIDEBOX/01_oetztal-mag_slidebox_4.jpg',
     	'Ötztal Magazin Bildgalerie 4',
     	true
     ); ?>
				</div>
				<div class="carousel-slide">
					<?php new Image(
     	null,
     	'carousel-image',
     	'/content/resources/media/oetztalMag/08_Bildergalerie/01_SLIDEBOX/01_oetztal-mag_slidebox_5.jpg',
     	'Ötztal Magazin Bildgalerie 5',
     	true
     ); ?>
				</div>
				<div class="carousel-slide">
					<?php new Image(
     	null,
     	'carousel-image',
     	'/content/resources/media/oetztalMag/08_Bildergalerie/01_SLIDEBOX/01_oetztal-mag_slidebox_6.jpg',
     	'Ötztal Magazin Bildgalerie 6',
     	true
     ); ?>
				</div>
				<div class="carousel-slide">
					<?php new Image(
     	null,
     	'carousel-image',
     	'/content/resources/media/oetztalMag/08_Bildergalerie/01_SLIDEBOX/01_oetztal-mag_slidebox_7.jpg',
     	'Ötztal Magazin Bildgalerie 7',
     	true
     ); ?>
				</div>
			</div>
		</div>
		<div class="carousel-navigation" aria-label="Carousel navigation">
			<button type="button" class="carousel-prev" aria-label="Previous slide"></button>
			<button type="button" class="carousel-next" aria-label="Next slide"></button>
		</div>
	</div>
	</div>
</section>

<section class="project-section section-13 has-padding-lr bg-col-brown">
	<div class="image-grid">
		<?php new Image(
  	null,
  	'grid-image',
  	'/content/resources/media/oetztalMag/08_Bildergalerie/02_oetztal-mag_cover.jpg',
  	'Ötztal Magazin Cover',
  	true
  ); ?>
		<?php new Image(
  	null,
  	'grid-image',
  	'/content/resources/media/oetztalMag/08_Bildergalerie/03_oetztal-mag_cover.jpg',
  	'Ötztal Magazin Cover Rückseite',
  	true
  ); ?>
		<?php new Image(
  	null,
  	'grid-image',
  	'/content/resources/media/oetztalMag/08_Bildergalerie/04_oetztal-mag_detail.jpg',
  	'Ötztal Magazin Detail',
  	true
  ); ?>
		<?php new Image(
  	null,
  	'grid-image',
  	'/content/resources/media/oetztalMag/08_Bildergalerie/05_oetztal-mag_detail.jpg',
  	'Ötztal Magazin Detail',
  	true
  ); ?>
	</div>
</section>
<section class="project-section section-14 bg-col-brown">
	<div class="row  has-padding-lr">
	<?php new Button(
 	null,
 	'project-button',
 	'ÖTZTAL CORPORATE DESIGN',
 	'/projekte/oetztal/corporate-design'
 ); ?>
		<?php new Button(
  	null,
  	'project-button',
  	'PLEASURE MAGAZIN',
  	'/projekte/pleasure'
  ); ?>
	</div>
</section>
</div>
