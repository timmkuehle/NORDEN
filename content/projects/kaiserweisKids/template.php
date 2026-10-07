<?php
$seoTitle = 'Kaiserweis Kids Käsebox – Verpackungsdesign | NORDEN';
$seoDescription =
	'Verpackungsdesign von NORDEN: Die Kaiserweis Kids Käsebox verbindet regionalen Genuss mit verspielten Illustrationen und Kinderkunst aus der Region.';

if (isset($NORDEN_TEMPLATE_META_ONLY) && $NORDEN_TEMPLATE_META_ONLY) {
	$NORDEN_TEMPLATE_META = [
		'title' => $seoTitle,
		'description' => $seoDescription
	];
	return;
}
?>

<div class="project-wrapper kaiserweis-kids">
    <section class="project-section section-1 pb-0 pt-0">
    <?php new Image(
    	null,
    	'hero-image',
    	'/content/resources/media/kaiserweis/kids-box/01_Header_KUUSK_KäseBoxen_Kidsbox_Desktop.svg',
    	'Kaiserweis Kids Hero',
    	true,
    	'/content/resources/media/kaiserweis/kids-box/01_Header_KUUSK_KäseBoxen_Kidsbox_Mobile.svg'
    ); ?>
    </section>

    <section class="project-section has-padding-lr section-2 bg-col-white">
	<div class="row">
       <div class="col s16 m12 l11">
			<p class="text-is-large">Regionaler Genuss, spielerisch verpackt. Die Käseregion Kaiserweis verbindet Kaiserwinkl und Kufsteinerland mit ihrer handwerklichen Käsetradition. Für ihren Heumilchkäse haben wir eine Verpackung gestaltet, die schon beim Aufmachen neugierig macht: die Kids Käsebox.</p>
		</div>
		<div class="col s16 m2 push-m2 push-l2 l3">
		<div class="buttons">
        <?php new Button(
        	null,
        	'project-button',
        	'Kidsbox',
        	'/projekte/kaiserweis/kids'
        ); ?>
		 <?php new Button(
   	null,
   	'project-button secondary-button',
   	'Premium Kistl',
   	'/projekte/kaiserweis'
   ); ?>
        </div>
		</div>
       </div>
    </section>

    <section class="project-section section-3 bg-col-white pb-0 pt-0 has-padding-lr">
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
  	'kaiserweis-kids-project-row-track',
  	'', // hide default "Unsere Leistungen" label
  	'' // no separators
  ); ?>
    </section>
<section class="project-section section-4 bg-col-white pb-0 pt-0 has-padding-lr">
<?php new Image(
	null,
	'hero-image',
	'/content/resources/media/kaiserweis/kids-box/02_Naturerlebnis-Kaisergebirge_Almhütte(c)Mathäus-Gartner.png',
	'Kaiserweis Kids Hero',
	true
); ?>
    <figure>
        <figcaption>
           Naturerlebnis Kaisergebirge_Almhütte_34(c)Mathäus Gartner.jpg
        </figcaption>
    </figure>
</section>

<section class="project-section section-5 bg-col-white">
	<div class="row centered  has-padding-lr">
		<div class="col s16 m10 l9 xl8">
            <h4 class="small-title">ZWEI BOXEN. EINE HERKUNFT.</h4>
			<p class="is-text is-indented">Für Kaiserweis haben wir zwei Verpackungen mit eigenem Charakter entwickelt: eine verspielte Käsebox für Kinder und ein traditionelles Holzkisterl für Erwachsene. Zwei unterschiedliche Zugänge, die dieselbe Geschichte erzählen – von regionaler Herkunft, gutem Handwerk und der Freude am Genießen.</p>
		</div>
	</div>
    <?php new Image(
    	null,
    	'illustration',
    	'/content/resources/media/kaiserweis/kids-box/03_Grafikelemente/01_KUUSK_Käseboxen_Maus-Illu.svg',
    	'Kaiserweis Kids Hero',
    	true
    ); ?>
</section>

<section class="project-section section-6 bg-col-white pb-0 pt-0">
<?php new Image(
	null,
	'svg-banner',
	'/content/resources/media/kaiserweis/kids-box/03_Grafikelemente/02_KUUSK_Kidsbox_Typo.svg',
	'Cheese Typography',
	true
); ?>
</section>

<section class="project-section section-7 bg-col-white pb-0 pt-0">
<?php new Image(
	null,
	'look-and-feel',
	'/content/resources/media/kaiserweis/kids-box/03_Grafikelemente/03_KUUSK_LookFeel_Kidsbox.png',
	'Look and Feel',
	true,
	'/content/resources/media/kaiserweis/kids-box/03_Grafikelemente/03_KUUSK_LookFeel_Kidsbox_Mobile.png'
); ?>
</section>

<section class="project-section section-8 bg-col-white">
	<div class="row centered has-padding-lr">
		<div class="col s16 m10 l9 xl8">
            <h4 class="small-title">FÜR KINDER. MIT KINDERN.</h4>
			<p class="is-text is-indented">Eine Bühne für kleine Zeichentalente: Bei einem Zeichenwettbewerb an den Schulen der Region konnten alle Kinder ihre Bilder einreichen. Ausgewählte Arbeiten fanden ihren Platz auf der Innenseite des Deckels – und machen die Kids Käsebox beim Öffnen zur kleinen Galerie.</p>
		</div>
	</div>
</section>

<section class="project-section section-9 bg-col-white pt-0">
	<div class="row centered has-padding-lr">
		<div class="col s16 m14 l12">
		<?php new Image(
  	null,
  	'look-and-feel',
  	'/content/resources/media/kaiserweis/kids-box/03_Grafikelemente/04_KUUS_Kaiserweis__Illustrationen_kisBox.png',
  	'Look and Feel',
  	true
  ); ?>		
		</div>
	</div>
</section>

<section class="project-section section-10 bg-col-white">
	<div class="row centered has-padding-lr">
		<div class="col s16 m10 l9 xl8">
            <h4 class="small-title">KÄSE MIT CHARAKTER.</h4>
			<p class="is-text is-indented">Eine neugierige Maus, ein Käse auf zwei Beinen und jede Menge kleine Details: Unsere Illustrationen geben der Kids Käsebox ihre eigene kleine Welt. Die lockere Linienführung verbindet die Figuren und lässt viel Raum für ihren Charakter. So wird die Verpackung selbst zur Einladung, genauer hinzuschauen und auf Entdeckungsreise zu gehen.</p>
		</div>
	</div>
</section>

<section class="project-section section-11 bg-col-white pt-0">
	<div class="row centered has-padding-lr">
		<div class="col s16">
		<?php new Image(
  	null,
  	'mockup-1',
  	'/content/resources/media/kaiserweis/kids-box/04_Mockup/03_KidsBox_Mockup.jpg',
  	'Mockup 1',
  	true
  ); ?>
		<?php new Image(
  	null,
  	'mockup-2',
  	'/content/resources/media/kaiserweis/kids-box/04_Mockup/02_KidsBox_Illus.jpeg',
  	'Mockup 2',
  	true
  ); ?>		
			<?php new Image(
   	null,
   	'mockup-2',
   	'/content/resources/media/kaiserweis/kids-box/04_Mockup/01_KidsBox_Mockup_1.jpg',

   	'Mockup 2',
   	true
   ); ?>	

		</div>
	
	
	</div>
	<div class="row has-padding-lr flex-end">
	<div class="col s8 flex-end-col mb-0">
		<?php new Image(
  	null,
  	'mouse-svg',
  	'/content/resources/media/kaiserweis/kids-box/03_Grafikelemente/01_KUUSK_Käseboxen_Maus-Illu.svg',
  	'Mouse Illustration',
  	true
  ); ?>
		<?php new Image(
  	null,
  	'cheese-photo mb-0',
  	'/content/resources/media/kaiserweis/kids-box/04_Mockup/05_pexels-cheese_pic.jpg',
  	'Cheese Photo',
  	true
  ); ?>
		</div>
		<div class="col s8 mb-0">
		<?php new Image(
  	null,
  	'kidsbox-photo mb-0',
  	'/content/resources/media/kaiserweis/kids-box/04_Mockup/04_KidsBox_Foto_2.jpeg',
  	'Kidsbox Photo',
  	true
  ); ?>
		</div>
	</div>
</section>
<div class="row has-padding-lr btn-row">
	<div class="col s16 m8 flex-end-col">
	<?php new Button(
 	null,
 	'project-button',
 	'Zum Premium Käse Kisterl',
 	'/projekte/kaiserweis'
 ); ?>
	</div>
</div>
</div>
