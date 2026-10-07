<?php
$seoTitle = 'Garda Trentino – Corporate Design & Branding | NORDEN';
$seoDescription =
	'Corporate Design für Garda Trentino von NORDEN: visuelle Markenstrategie, eigenständige Gestaltung und Implementierung über alle Touchpoints der Marke.';

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
	<?php new Image(
 	null,
 	'image',
 	'/content/resources/media/gardaCd/headline.svg',
 	'Garda Corporate Design Headline',
 	false
 ); ?>
	<div class="video ">
		<?php new Video(
  	'video',
  	'/content/resources/media/gardaCd/01_Header/01_GARDA_Animation_Header_desktop.mp4',
  	'15/8',
  	'/content/resources/media/gardaCd/01_Header/01_GARDA_Animation_Header_Still.jpg',
  	'Ötztal Magazin Video',
  	false,
  	true,
  	true,
  	true,
  	false
  ); ?>
	</div>
	</section>

	<section class="project-section section-2 has-padding-lr pt-0 pb-0">
		<div class="row">
			<div class="col s10 m16 l4 xl4 center">
			<?php new Image(
   	null,
   	'logo-black',
   	'/content/resources/media/gardaCd/00_Garda logo black.svg',
   	'Garda Logo Black',
   	false
   ); ?>
			</div>
			<div class="col s16 m16 l12 xl11">
				<p class="text-is-large">Mountains & Water. Alpine Sportlichkeit trifft auf Dolce Vita. Für die nördliche Region des Gardasees – Garda Trentino –  haben wir die visuelle Markenstrategie entwickelt und in ein umfassendes Corporate Design übersetzt. Die Leitidee liegt im Zusammenspiel der Gegensätze: Berge und Wasser, kantig und rund, hart und weich. Aus ihrer Verbindung entsteht eine eigenständige Formensprache, die den jungen, sportlichen Charakter der Region zum Ausdruck bringt. Von der Konzeption bis zur Implementierung haben wir diesen Gedanken über alle Kontaktpunkte der Marke hinweg lebendig gemacht.</p>
			</div>
		</div>
	</section>

	<section class="project-section section-3 has-padding-lr">
		<?php new AnimatedBanner(
  	null,
  	'animated-banner',
  	[
  		'Visuelle Markenstrategie',
  		'Corporate Design',
  		'Markenimplementierung',
  		'Schriftentwicklung',
  		'Piktogramme',
  		'Printdesign',
  		'Screendesign',
  		'Social-Media-Konzept',
  		'Motion Design',
  		'Merchandise Design ',
  		'Event Branding'
  	],
  	'col-light-blue',
  	'col-light-blue',
  	null,
  	'—' // no separators
  ); ?>
	</section>

	<section class="project-section section-4">
		<div class="meta-headline">Graphic elements</div>
			<div class="row  has-padding-lr">
				<div class="col s10 m6 l4 xl3">
				<?php new Image(
    	null,
    	'image',
    	'/content/resources/media/gardaCd/02_Gestaltungselemente/Garda_grafik_element_MW_.svg',
    	'Garda Grafik Element',
    	false
    ); ?>
				</div>
				<div class="col s16 m8 l7 xl6 push-m1">
					<h3 class="is-headline col-turquoise"><span>M</span>ountains & <span>W</span>ater</h3>
					<p class="is-text">Die Landschaft gibt die Formen vor: markante Kanten der Berge, weiche Bewegungen des Wassers. Wir haben diese Gegensätze zu einem grafischen System verbunden. Als einzelne Zeichen, flächige Muster oder großformatige Elemente prägen sie den Auftritt und machen den Charakter von Garda Trentino sichtbar.</p>
				
				</div>
			</div>
	</section>

	<section class="project-section section-5 pt-0 pb-0">
		<?php new Image(
  	null,
  	'image',
  	'/content/resources/media/gardaCd/02_Gestaltungselemente/Garda_gestaltungselemente_desktop.svg',
  	'Garda Gestaltungselemente',
  	false,
  	'/content/resources/media/gardaCd/02_Gestaltungselemente/Garda_gestaltungselemente_Mobile.svg'
  ); ?>
	</section>

	<section class="project-section section-6 has-padding-lr bg-col-white">
	<div class="meta-headline">Typography</div>

		<div class="row">
			<div class="col s16 m9 l9 xl10">
				<h3 class="is-headline col-turquoise">Sporty, Flowy, Rocky</h3>
				<p class="is-text">Die eigens entwickelte Headline-Schrift bringt die Gegensätze der Region auf den Punkt: kantig und rund, kraftvoll und leicht. Dabei greift sie das charakteristische Spiel mit den Buchstabeninnenräumen des bestehenden Garda-Logos auf. So erhält Garda Trentino eine eigenständige typografische Stimme mit sportlicher Dynamik.</p>
				<p class="is-text">— Font creation in cooperation with TypeTogether</p>
				<?php new Button(
    	null,
    	'project-button',
    	'MEHR ZUR TYPOGRAFIE',
    	'/projekte/garda-trentino'
    ); ?>
			</div>

			<div class="col s10 m6 l6 xl5 push-m1 push-l1 align-center">
				<?php new Image(
    	null,
    	'image',
    	'/content/resources/media/gardaCd/03_Typo/grada-typo-teaser.svg',
    	'Garda Typo Teaser',
    	false
    ); ?>
			</div>
		</div>
	</section>

	
	<section class="project-section section-7 has-padding-lr bg-col-white">
	<div class="meta-headline">COLORS</div>

		<div class="row">
			<div class="col s16 m16 l8">
			<h3 class="is-headline col-turquoise">Spray Colors</h3>

				<p class="is-text">Tiefes Petrol, sanfte Wasser- und Grüntöne, ein warmer heller Grund: Die Farbwelt nimmt die Landschaft von Garda Trentino auf. Leuchtendes Gelb setzt gezielte Akzente und lenkt den Blick. So verbinden sich natürliche Ruhe und sportliche Energie.</p>
			</div>

			<div class="col s16 m16 l16">
				<?php new Image(
    	null,
    	'image',
    	'/content/resources/media/gardaCd/04_Farben/Garda-Farben.png',
    	'Garda Farben',
    	false
    ); ?>
			</div>
		</div>
	</section>


	<section class="project-section section-8 has-padding-lr">
	<div class="meta-headline">MOTION DESIGN</div>

	<h3 class="is-headline col-turquoise">DIE MARKE IN BEWEGUNG</h3>
	<div class="sub-headline">EXTENDED</div>
<p class="is-text">Im Motion Design entfaltet das Zusammenspiel der Gegensätze seine Dynamik. Typografie, Berg- und Wellenmotive greifen ineinander und verbinden sich mit der Bildwelt der Region. So wird Mountains & Water auch in Bewegung zum wiedererkennbaren Bestandteil der Marke.</p>
	<div class="row">
		<div class="col s16 m13 l12">
		<?php new Video(
  	'video',
  	'/content/resources/media/gardaCd/05_Logo_Animation/GARDA_Logo-Animation_Desktop.mp4',
  	'16/9',
  	'/content/resources/media/gardaCd/05_Logo_Animation/GARDA_Logo-Animation_Desktop_Still.jpg',
  	'Garda Logo Animation',
  	true,
  	true,
  	true,
  	true,
  	false,
  	'/content/resources/media/gardaCd/05_Logo_Animation/GARDA_Logo-Animation_Mobile.mp4',
  	'1/1',
  	'/content/resources/media/gardaCd/05_Logo_Animation/GARDA_Logo-Animation_Mobile_Still.jpg'
  ); ?>
		</div>
	</div>
	</section>

	<section class="project-section section-9 has-padding-lr pb-0">
	<div class="meta-headline">Layout</div>

		<div class="row">
			<div class="col s16 m12 l9 xl8">
				<h3 class="is-headline col-turquoise">Layout konzept</h3>
				<div class="sub-headline">EIN SYSTEM – VIELE MÖGLICHKEITEN</div>
				<p class="is-text">Prägnante Headlines, großzügige Bildflächen und klar gegliederte Informationen bilden die Basis des Layouts. Berg- und Wellenformen setzen Akzente, verbinden Flächen und schaffen Wiedererkennung. Das System lässt sich flexibel auf unterschiedliche Themen und Formate übertragen – und gibt der Kommunikation über alle Medien hinweg eine gemeinsame Handschrift.</p>
			</div>
		</div>
		<div class="row">
			<div class="col s16">
				<?php new Image(
    	null,
    	'image',
    	'/content/resources/media/gardaCd/06_Layout/01_garda_folder.jpg',
    	'Garda Folder',
    	false
    ); ?>
			</div>
		</div>
	</section>

	<section class="project-section section-10 has-padding-lr">
	<?php new Image(
 	null,
 	'deco-image',
 	'/content/resources/media/gardaCd/06_Layout/01_Garda_Grafikelement.svg',
 	'Garda Grafikelement',
 	false
 ); ?>
	<?php new Image(
 	null,
 	'image',
 	'/content/resources/media/gardaCd/06_Layout/03_garda_folder_sammlung.png',
 	'Garda Folder Sammlung',
 	false
 ); ?>
	</section>

	<section class="project-section section-11 has-padding-lr bg-col-white">
	<div class="meta-headline">Piktogramme</div>

		<div class="row">
			<div class="col s16 m16 l8">
				<h3 class="is-headline col-turquoise">PIKTOGRAMM-KONZEPT</h3>
				<div class="sub-headline">KLEINE ZEICHEN – KLARE IDENTITÄT</div>
				<div class="is-text">Kantige und runde Formen verbinden die Piktogramme mit der Typografie und der Leitidee Mountains & Water. So geben sie Orientierung und machen die Marke bis ins Detail erkennbar.</div>
			</div>
			<div class="col s16 m16 l8">
			<?php new Image(
   	null,
   	'image',
   	'/content/resources/media/gardaCd/07_Piktogramme/01_grada_pikto_aufbau_2.svg',
   	'Garda Piktogramme Aufbau 2',
   	false
   ); ?>
			</div>
		</div>


		<div class="row mt-4">
			<div class="col s7 m7 l7">
			<?php new Image(
   	null,
   	'image',
   	'/content/resources/media/gardaCd/07_Piktogramme/02_grada_pikto_aufbau_1.svg',
   	'Garda Piktogramme Aufbau 1',
   	false
   ); ?>
			</div>
			<div class="col s8 m8 l8 push-s1">
			<?php new Image(
   	null,
   	'image',
   	'/content/resources/media/gardaCd/07_Piktogramme/03_grada_piktogramme.gif',
   	'Garda Piktogramme',
   	false
   ); ?>
		</div>
	</section>

	<section class="project-section section-12 bg-col-white">
	<?php new Image(
 	null,
 	'image',
 	'/content/resources/media/gardaCd/07_Piktogramme/04_Garda_Trennerbild_1.jpg',
 	'Garda Trennerbild',
 	false
 ); ?>
		<div class="row">
		<?php new Image(
  	null,
  	'deco-image',
  	'/content/resources/media/gardaCd/07_Piktogramme/05_Garda_Grafikelement.svg',
  	'Garda Grafikelement',
  	false
  ); ?>
		</div>
	</section>

	<section class="project-section section-13 has-padding-lr pb-0">
	<div class="meta-headline">Social Media</div>
		<div class="row">
			<div class="col s16 m10 l9 xl8">
				<h3 class="is-headline col-turquoise">Social Media</h3>
				<div class="sub-headline">ABWECHSLUNG MIT WIEDERERKENNUNG</div>
				<div class="is-text">Für Social Media haben wir das Gestaltungssystem in flexible Vorlagen übersetzt. Bilder, Headlines und grafische Muster lassen sich für unterschiedliche Inhalte kombinieren – vom Veranstaltungstipp bis zur Toureninformation. So bleibt der Auftritt abwechslungsreich und klar als Garda Trentino erkennbar.</div>
			</div>

			<div class="col s16">
			<?php new Image(
   	null,
   	'deco-image',
   	'/content/resources/media/gardaCd/08_Social_Media/02_garda_instagram_feed_mockup.png',
   	'Garda Instagram Feed Mockup',
   	false
   ); ?>
			</div>
		</div>
	</section>

	<section class="project-section section-14 has-padding-lr pt-0">
		<div class="row">
		<div class="col s16 m10 l9 xl8">
			<h3 class="is-headline col-turquoise">Screendesign</h3>
			<div class="sub-headline col-white sub-2">DIGITAL WEITERGEDACHT</div>
			<div class="is-text">Für die B2B- und B2C-Websites haben wir den Markenauftritt ins Screendesign übertragen. Großzügige Bilder schaffen Atmosphäre, klare Typografie und Farbflächen strukturieren die Inhalte. Die gemeinsame Formensprache verbindet die unterschiedlichen Angebote für Gäste und Partner zu einem durchgängigen digitalen Auftritt.</div>
		</div>

			<div class="col s16">
			<?php new Image(
   	null,
   	'image',
   	'/content/resources/media/gardaCd/09_Website/09_garda_website_mockup.png',
   	'Garda Website Mockup',
   	false
   ); ?>
			</div>
		</div>
</section>

<section class="project-section section-15 pb-0">
<?php new Image(
	null,
	'image',
	'/content/resources/media/gardaCd/09_schriftzug_la-dolce-vita.svg',
	'Schriftzug La Dolce Vita',
	false
); ?>
</section>

<section class="project-section section-16 has-padding-lr">
<?php new Image(
	null,
	'image',
	'/content/resources/media/gardaCd/10_Garda_Fassade_Mockup.jpg',
	'Garda Fassade Mockup',
	false
); ?>
</section>

<section class="project-section section-17 has-padding-lr">
<div class="meta-headline">Folder</div>

	<h3 class="is-headline col-turquoise">Design in use</h3>
	<div class="sub-headline">Print</div>
<div class="is-text">
In Foldern, Karten und Magazinen wird das Gestaltungssystem zum täglichen Werkzeug der Markenkommunikation. Unterschiedliche Themen und Informationsmengen finden darin ebenso Platz wie großzügige Fotografie. Jede Anwendung erhält ihren eigenen Schwerpunkt und bleibt Teil des gemeinsamen Auftritts.
</div>
	<?php new Image(
 	null,
 	'image',
 	'/content/resources/media/gardaCd/11_Design_in_use/01_Print_Anwendungen/01_garda_folder_mockup.png',
 	'Folder Mockup',
 	false
 ); ?>

<div class="row flex-end">
	<div class="col s16 m14 l12 ">
	<?php new Image(
 	null,
 	'gif-image',
 	'/content/resources/media/gardaCd/11_Design_in_use/01_Print_Anwendungen/03_Garda_Klapp_Folder_GIF.gif',
 	'Garda Klapp Folder GIF',
 	false
 ); ?>
	</div>
</div>
</section>

<section class="project-section section-18 has-padding-lr">
<div class="meta-headline">Magazin</div>
<div class="row">
	<div class="col s16 m15">
	<?php new Image(
 	null,
 	'image',
 	'/content/resources/media/gardaCd/11_Design_in_use/01_Print_Anwendungen/05_Garda_Magazine.jpg',
 	'Magazine Mockup',
 	false
 ); ?>
	<?php new Image(
 	null,
 	'deco-image',
 	'/content/resources/media/gardaCd/11_Design_in_use/01_Print_Anwendungen/04_Garda_Grafikelement.svg',
 	'Folder Mockup',
 	false
 ); ?>
	</div>
</div>
</section>

<section class="project-section section-19 has-padding-lr">
<div class="meta-headline">Folder Sammlung</div>
<div class="row">
	<div class="col s16 m15">
	<?php new Image(
 	null,
 	'image',
 	'/content/resources/media/gardaCd/11_Design_in_use/01_Print_Anwendungen/06_Garda_Klapp_Folder_Stapel.gif',
 	'Folder Mockup',
 	false
 ); ?>
	</div>
</div>
</section>


<section class="project-section section-20 bg-col-white pt-0 pb-0">
<?php new Image(
	null,
	'deco-image',
	'/content/resources/media/gardaCd/11_Design_in_use/02_Garda_Wall/04_Garda_Grafikelement.svg',
	'Folder Mockup',
	false
); ?>
	<?php new Image(
 	null,
 	'image',
 	'/content/resources/media/gardaCd/11_Design_in_use/02_Garda_Wall/12_Garda_Wall.jpg',
 	'Garda Wall',
 	false
 ); ?>
</section>


<section class="project-section section-21 bg-col-white bg-col-beige">
<div class="meta-headline">T-Shirts + Caps</div>

<div class="row has-padding-lr">
	<div class="col s16">
	<div class="sub-headline">Merchandise</div>
	</div>
</div>

<div class="row has-padding-lr align-end">
	<div class="col s12">
	<?php new Image(
 	null,
 	'image',
 	'/content/resources/media/gardaCd/11_Design_in_use/03_Merchandise/01_GARDA_TShirt_Mockup_dark_Still.png',
 	'Garda Wall',
 	false
 ); ?>
	</div>
	<div class="col s4">
	<?php new Image(
 	null,
 	'image',
 	'/content/resources/media/gardaCd/11_Design_in_use/03_Merchandise/02_Mockup_Caps.png',
 	'Garda Wall',
 	false
 ); ?>
	</div>
</div>
</section>

<section class="project-section section-22 has-padding-lr">
<div class="meta-headline">Towels, Kyechains, Bottles</div>

<?php new Image(
	null,
	'image',
	'/content/resources/media/gardaCd/11_Design_in_use/03_Merchandise/03_Mockup_Sammlung.png',
	'Garda Wall',
	false
); ?>
<div class="row has-padding-lr">
	<div class="is-text">
	Auf Shirts, Caps und Accessoires werden Berg- und Wellenformen zu eigenständigen Motiven. Mal als kleines Detail, mal als großflächiges Muster bringen sie die Identität der Region auf unterschiedliche Materialien und Produkte. Sportlich, unkompliziert und gemacht für den Alltag.
	</div>
</div>
</section>

<section class="project-section section-23 pb-0">

<?php new Image(
	null,
	'image',
	'/content/resources/media/gardaCd/11_Design_in_use/04_B2B_Anwendungen/01_Fahnen_ortschaften.jpg',
	'Garda Wall',
	false
); ?>

</section>

<section class="project-section section-24 ">

<div class="row has-padding-lr">
<?php new Image(
	null,
	'image',
	'/content/resources/media/gardaCd/11_Design_in_use/04_B2B_Anwendungen/04_Gard_Events.jpg',
	'Garda Wall',
	false
); ?>

	<div class="is-text">
	Vom kompakten Markenzeichen bis zur großflächigen Inszenierung: Das Gestaltungssystem funktioniert in unterschiedlichsten Größen und Umgebungen. Fahnen, Eventauftritte und Fahrzeuge zeigen, wie sich die gemeinsame Idee im Raum entfaltet – und die Marke vor Ort erlebbar wird.
</div>
<?php new Image(
	null,
	'image-2',
	'/content/resources/media/gardaCd/11_Design_in_use/04_B2B_Anwendungen/03_Gard_Auto_1.jpg',
	'Garda Wall',
	false
); ?>
</div>

 <div class="overlay"></div>

<div class=" row buttons has-padding-lr">
<?php new Button(
	null,
	'project-button',
	'GARDA HEADLINE FONT',
	'/projekte/garda-trentino'
); ?>
<?php new Button(
	null,
	'project-button disabledy',
	'ROCK MASTER',
	'/projekte/garda-trentino'
); ?>
</div>
</section>
</div>