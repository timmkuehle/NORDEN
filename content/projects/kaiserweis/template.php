<?php
$seoTitle = 'Kaiserweis Premium-Käsekistl – Verpackungsdesign | NORDEN';
$seoDescription =
	'Verpackungsdesign von NORDEN für das Kaiserweis Premium-Käsekistl: Holzkiste mit Siebdruck und Käsekarten auf Naturpapier. Regionaler Genuss, natürlich verpackt.';

if (isset($NORDEN_TEMPLATE_META_ONLY) && $NORDEN_TEMPLATE_META_ONLY) {
	$NORDEN_TEMPLATE_META = [
		'title' => $seoTitle,
		'description' => $seoDescription
	];
	return;
}
?>

<div class="project-wrapper kaiserweis">
    <section class="project-section section-1 pb-0 pt-0">
    <?php new Image(
    	null,
    	'hero-image',
    	'/content/resources/media/kaiserweis/premium-box/01_Headerbild_Kaiserwinkl_Koessen.jpg',
    	'Kaiserweis Hero',
    	true
    ); ?>
    </section>

    <section class="project-section has-padding-lr section-2 bg-col-white">
       <div class="row">
       <div class="col s16 m12 l11">
			<p class="text-is-large">Regionaler Genuss. Spürbar gut verpackt. Unter der Genussmarke Kaiserweis vereinen das Kufsteinerland und der Kaiserwinkl ihre regionalen Spezialitäten. Für das Premium-Käsekistl entwickelten wir ein Verpackungsdesign aus Holz, Siebdruck und Naturpapier, das die Herkunft sichtbar macht.</p>
		</div>
		<div class="col s16 m2 push-m2 push-l2 l3">
		<div class="buttons">
        <?php new Button(
        	null,
        	'project-button secondary-button',
        	'Kidsbox',
        	'/projekte/kaiserweis/kids'
        ); ?>
		 <?php new Button(
   	null,
   	'project-button',
   	'Premium Kistl',
   	'/projekte/kaiserweis'
   ); ?>
        </div>
		</div>
       </div>
    </section>

    <section class="project-section section-3 bg-col-white pb-0 pt-0">
		<?php new AnimatedBanner(
  	null,
  	'animated-banner',
  	[
  		'Konzept',
  		'Gestaltung',
  		'Packaging',
  		'Illustration',
  		'Druckvorbereitung'
  	],
  	'', // no label
  	'kaiserweis-project-row-track',
  	'', // hide default "Unsere Leistungen" label
  	'' // no separators
  ); ?>
    </section>
<section class="project-section section-4 bg-col-white pb-0 pt-0 has-padding-lr">
<?php new Image(
	null,
	'hero-image',
	'/content/resources/media/kaiserweis/premium-box/02_Bild_matheus-frade-8AgEr3m-86s-unsplash.jpg',
	'Premium Box',
	true
); ?>
    <!-- <figure>
        <figcaption>
           Naturerlebnis Kaisergebirge_Almhütte_34(c)Mathäus Gartner.jpg
        </figcaption>
    </figure> -->
</section>

<section class="project-section section-5 bg-col-white">
	<div class="row centered  has-padding-lr">
		<div class="col s16 m10 l9 xl8">
            <h4 class="small-title">ZWEI BOXEN. EINE HERKUNFT.</h4>
			<p class="is-text">Für Kaiserweis entstanden zwei Verpackungen mit eigenem Charakter: die verspielte Kids Käsebox und das Premium-Käsekistl. Natürliche Materialien und eine reduzierte Gestaltung unterstreichen die regionale Käsekultur.</p>
		</div>
	</div>
</section>

<section class="project-section section-7 bg-col-white pb-0 pt-0">
<?php new Image(
	null,
	'look-and-feel',
	'/content/resources/media/kaiserweis/premium-box/03_Grafik.png',
	'Look and Feel',
	true
); ?>
</section>

<section class="project-section section-8 bg-col-white">
	<div class="row centered has-padding-lr">
		<div class="col s16 m10 l9 xl8">
		<h4 class="small-title">HOLZ MIT CHARAKTER.</h4>
			<p class="is-text is-indented">Für das Premium-Käsekistl haben wir uns bewusst für eine Holzkiste entschieden. Ihre sichtbare Maserung und natürliche Haptik sind Teil der Gestaltung. So wird die Verbindung zu Herkunft und Handwerk schon beim Anfassen spürbar.</p>
		</div>
	</div>
</section>

<section class="project-section section-9 bg-col-white pt-0">
	<div class="row centered has-padding-lr">
		<div class="col s16 m16 l16">
		<?php new Image(
  	null,
  	'look-and-feel',
  	'/content/resources/media/kaiserweis/premium-box/04_Premium-Kaesebox_Fotogarfie_Desktop.jpg',
  	'Premium Box',
  	true,
  	'/content/resources/media/kaiserweis/premium-box/04_Premium-Kaesebox_Fotogarfie_Mobile.jpg'
  ); ?>		
		</div>
	</div>
</section>

<section class="project-section section-10 bg-col-white">
	<div class="row has-padding-lr">
		<div class="col s16 m7 l6">
		<?php new Image(
  	null,
  	'look-and-feel',
  	'/content/resources/media/kaiserweis/premium-box/011_look-and-feel.png',
  	'Look and Feel',
  	true
  ); ?>	
		</div>
	</div>

	<div class="row flex-end has-padding-lr">
		<div class="col s16 m9 l8 xl8">
			<p class="is-text">Schlanke Typografie trifft auf markante Berggrafik. Warme Gelbtöne, Schwarz und die natürliche Holzoberfläche bestimmen den Auftritt. Die Gestaltung bleibt bewusst zurückhaltend und gibt dem Material Raum.</p>
		</div>
	</div>
</section>

<section class="project-section section-11 bg-col-white">
	<div class="row">
		<div class="col s16">
		<?php new Image(
  	null,
  	'look-and-feel',
  	'/content/resources/media/kaiserweis/premium-box/07_Farben_Kaesebox_Premium.png',
  	'Farben',
  	true
  ); ?>	
		</div>
		<div class="col s16">
		<?php new Image(
  	null,
  	'look-and-feel',
  	'/content/resources/media/kaiserweis/premium-box/08_Bild_Siebdrucken_emarts-emarts-ZCTh4f4mv18-unsplash.jpg',
  	'Siebdruck',
  	true
  ); ?>	
		</div>
	</div>
</section>
<section class="project-section section-13 bg-col-white has-padding-lr">
	<div class="row">
		<div class="col s16 m8">
		<?php new Image(
  	null,
  	'look-and-feel',
  	'/content/resources/media/kaiserweis/premium-box/09_Premium-Kaesebox_Fotogarfie_Detail_1.jpg',
  	'Detail 1',
  	true
  ); ?>	
		</div>
		<div class="col s16 m8 l6 xl5">
		<h4 class="small-title">DIREKT AUFS HOLZ.</h4>
			<p class="is-text">Die Grafik wurde im Siebdruck direkt auf das Holz aufgebracht. Feine Rasterpunkte und kräftige Flächen treffen auf die individuelle Maserung und verbinden Druck und Material zu einem Gesamtbild.</p>
		</div>
	</div>
</section>

<section class="project-section section-14 bg-col-white has-padding-lr">
	<div class="row">
		<div class="col s16 m8 l8">
			<h4 class="small-title">GUTER GESCHMACK. AUF KARTEN.</h4>
			<p class="is-text">
			Ein Postkarten-Set stellt die Käsesorten und ihre Besonderheiten vor. Naturpapier, Landschaftsfotografie, Käseillustrationen und kurze Beschreibungen greifen die natürliche Anmutung des Kistls auf und machen Lust aufs Entdecken und Probieren.</p>
		</div>
	</div>
</section>

<section class="project-section section-15 bg-col-white has-padding-lr">
	<div class="row">
		<div class="col s16 m8">
		<?php new Image(
  	null,
  	'look-and-feel',
  	'/content/resources/media/kaiserweis/premium-box/10_Mockup_Kaesekarte_1.jpg',
  	'Mockup 1',
  	true
  ); ?>	
		</div>
		<div class="col s16 m8">
		<?php new Image(
  	null,
  	'look-and-feel',
  	'/content/resources/media/kaiserweis/premium-box/10_Mockup_Kaesekarte_2.jpg',
  	'Detail 1',
  	true
  ); ?>	
		</div>
	</div>
</section>

<div class="row has-padding-lr btn-row">
	<div class="col s0 m8"></div>
	<div class="col s16 m8 l8">
		<?php new Button(
  	null,
  	'project-button',
  	'Zur Kids Käsebox',
  	'/projekte/kaiserweis/kids'
  ); ?>
	</div>
</div>

<div class="project-section section-16">
<?php new Image(
	null,
	'grafik',
	'/content/resources/media/kaiserweis/premium-box/06_Grafik_PremiumKaesebox_Berge_2.png',
	'Grafik',
	true
); ?>	
</div>
</div>
