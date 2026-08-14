<?php
$seoTitle = 'Kaiserweis Käse Boxen Packaging Design | NORDEN';
$seoDescription =
	'Für die Käsregion Kaiserweis entwickelte NORDEN zwei sehr unterschiedlich Käse Boxen. Zum einen, eine farbenfrohe für Kinder, mit Fokus auf Spiel und Spaß. Auf der anderen Seite eine traditionelle Holzkiste für Erwachsene. Regionalität spielt dabei eine große Rolle.';

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
    	'/content/resources/media/kaiserweis/premium-box/01_Headerbild_Kaiserwinkl_Kössen.jpg',
    	'Kaiserweis Hero',
    	true
    ); ?>
    </section>

    <section class="project-section has-padding-lr section-2 bg-col-white">
       <div class="row">
       <div class="col s16 m12 l11">
			<p class="text-is-large">Die Region Kaiserwinkl und das Kufsteinerland sind bekannt für ihr regionale Vielfalt und die handwerkliche Herstellung von Genussmitteln. Geprägt durch die alpine, bäuerliche Struktur ist so die <span class="bold">Kaiserweis Käseregion</span> mit dem bekannten Heumilchkäse entstanden. </p>
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
            <h4 class="small-title">Unsere Käse Boxen</h3>
			<p class="is-text is-indented">Wir durften die Käsregion Kaiserweis bei einem spannenden Packaging Projekt unterstützen. Und dabei zwei sehr unterschiedlich Kastl entwickeln. Zum einen, eine farbenfrohe für Kinder, mit Fokus auf Spiel und Spaß. Auf der anderen Seite eine traditionelle Holzkiste für Erwachsene. Regionalität spielt dabei eine große Rolle.</p>
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
			<p class="is-text is-indented">Als zweite Variante entstand eine Premium Box für Erwachsene, bei der der Fokus klar auf Qualität, Herkunft und Regionalität lag. Schon die Verpackung aus echtem Holz vermittelt Wertigkeit und Handwerkskunst.</p>
		</div>
	</div>
</section>

<section class="project-section section-9 bg-col-white pt-0">
	<div class="row centered has-padding-lr">
		<div class="col s16 m16 l16">
		<?php new Image(
  	null,
  	'look-and-feel',
  	'/content/resources/media/kaiserweis/premium-box/04_Premium-Käsebox_Fotogarfie_Desktop.jpg',
  	'Premium Box',
  	true,
  	'/content/resources/media/kaiserweis/premium-box/04_Premium-Käsebox_Fotogarfie_Mobile.jpg'
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
			<p class="is-textd">Eine schlanke serifenlose Schrift wirkt modern, klar und hochwertig und unterstreicht damit den Premium-Charakter der Käsebox. Die Gelbtöne greifen die natürliche Farbe von Käse auf und vermitteln Wärme, Genuss und Qualität. Ergänzt wird dies durch eine Holzbox mit Siebdruck, die für Natürlichkeit, Handwerk und Exklusivität steht und das hochwertige Gesamtbild perfekt abrundet.</p>
		</div>
	</div>
</section>

<section class="project-section section-11 bg-col-white">
	<div class="row">
		<div class="col s16">
		<?php new Image(
  	null,
  	'look-and-feel',
  	'/content/resources/media/kaiserweis/premium-box/07_Farben_Käsebox_Premium.png',
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
  	'/content/resources/media/kaiserweis/premium-box/09_Premium-Käsebox_Fotogarfie_Detail_1.jpg',
  	'Detail 1',
  	true
  ); ?>	
		</div>
		<div class="col s16 m8 l6 xl5">
			<p class="is-text">
			Mithilfe von Siebdruck wurde die Grafik in einem österreichischen Druckerei regional auf die Box gedruckt.
			</p>
		</div>
	</div>
</section>

<section class="project-section section-14 bg-col-white has-padding-lr">
	<div class="row">
		<div class="col s16 m8 l8">
			<h4 class="small-title">Käsearten</h4>
			<p class="is-text">
			Wir durften die Käsregion Kaiserweis bei einem spannenden Packaging Projekt unterstützen. Und dabei zwei sehr unterschiedlich Kastl entwickeln. Zum einen, eine farbenfrohe für Kinder, mit Fokus auf Spiel und Spaß. Wichtig war bei zweitem vor allem der Austausch mit Kindern und deren Feedback, sowie das ein-beziehen der künstlerischen Arbeiten in das endgültige Produkt.			</p>
		</div>
	</div>
</section>

<section class="project-section section-15 bg-col-white has-padding-lr">
	<div class="row">
		<div class="col s16 m8">
		<?php new Image(
  	null,
  	'look-and-feel',
  	'/content/resources/media/kaiserweis/premium-box/10_Mockup_Käsekarte_1.jpg',
  	'Mockup 1',
  	true
  ); ?>	
		</div>
		<div class="col s16 m8">
		<?php new Image(
  	null,
  	'look-and-feel',
  	'/content/resources/media/kaiserweis/premium-box/10_Mockup_Käsekarte_2.jpg',
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
			'/projekte/kaiserweis'
		); ?>
	</div>
</div>

<div class="project-section section-16">
<?php new Image(
  	null,
  	'grafik',
  	'/content/resources/media/kaiserweis/premium-box/06_Grafik_PremiumKäsebox_Berge_2.png',
  	'Grafik',
  	true
  ); ?>	
</div>
</div>
