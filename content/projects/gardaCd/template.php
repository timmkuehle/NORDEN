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
			<div class="col s16 m16 l12 xl10">
				<p class="text-is-large">Mitten in den Alpen, aber mit urbanem Mindset: Sölden steht für Sport, Action und Entertainment. Ob Winter oder Sommer – Sölden bringt Sport, Musik und Lifestyle auf einzigartige Weise zusammen. Der neue Markenauftritt übersetzt diesen Spirit in ein klares, progressives Design. Für eine Destination, die mehr ist als ein Ort: eine Haltung.</p>
			</div>
		</div>
	</section>

	<section class="project-section section-3 has-padding-lr">
		<?php new AnimatedBanner(
  	null,
  	'animated-banner',
  	[
  		'Markenstrategie',
  		'Corporate Design',
  		'Branding & Implementierung',
  		'Online & Offline Kommunikationskonzept',
  		'Brandclip',
  		'Motion Design',
  		'Social Media',
  		'Branding & Konzeption von Events'
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
					<div class="sub-headline">Grafiken der Region</div>
					<p class="is-text">Formen inspiriert von der Landschaft in Garda Trentino, leiten sich die Formen von der ikonischen See- und Berglandschaft ab. Sie spiegeln die einzigartige natürliche Kombination wider, die die Region prägt.</p>
				
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
				<div class="sub-headline">New Headline font as a Key Brand Identifier</div>
				<p class="is-text">Die neue Headline-Schrift für Garda Trentino ist ein zentraler Baustein der Markenidentität. Der Kontrast zwischen runden und kantigen Formen verbindet die fließende Leichtigkeit des Sees – lebendig, offen, entspannt – mit der rauen Kraft von Felsen und Bergen, die für Aktivität und Sportlichkeit stehen. In ihrer kondensierten, leicht kursiven Anmutung wirkt sie modern, zeitlos und klar – mit einem dynamischen Twist.</p>
				<p class="is-text">— Font creation in cooperation with TypeTogether</p>

				<?php new Button(
    	null,
    	'project-button',
    	'MEHR ZUR TYPOGRAFIE',
    	'/projekte/pleasure'
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
				<div class="sub-headline">Farben</div>

				<p class="is-text">Die Farbwelt von Garda Trentino leitet sich direkt vom See ab: tiefe Blau- und Petroltöne stehen für seine Ruhe und Tiefe, während Türkis- und Grüntöne die lebendige Oberfläche und das Lichtspiel einfangen. Warme, natürliche Nuancen erinnern an Ufer, Stein und Landschaft. So entsteht ein harmonisches System aus Frische, Ruhe und Dynamik – direkt aus dem Charakter der Umgebung heraus entwickelt.</p>
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
	<div class="meta-headline">LOGO ANIMATION</div>

	<h3 class="is-headline col-turquoise">LOGO ANIMATION</h3>
	<div class="sub-headline">EXTENDED</div>

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
				<div class="sub-headline">XXXXX</div>
				<p class="is-text">Die Garda Logo Animation ist ein zentraler Baustein der Markenidentität. Der Kontrast zwischen runden und kantigen Formen verbindet die fließende Leichtigkeit des Sees – lebendig, offen, entspannt – mit der rauen Kraft von Felsen und Bergen, die für Aktivität und Sportlichkeit stehen. In ihrer kondensierten, leicht kursiven Anmutung wirkt sie modern, zeitlos und klar – mit einem dynamischen Twist.</p>
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
				<h3 class="is-headline col-turquoise">Piktogramm-Konzeption</h3>
				<div class="is-text">Die Piktogramme leiten sich aus der neuen Headline-Typografie von Garda Trentino ab. Kanten und Rundungen prägen die Formensprache und schaffen eine klare Verbindung zur Typografie und dem Logo. Leichte Asymmetrien verleihen dem System eine lebendige, eigenständige Note.</div>
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
				<div class="sub-headline">Social Media</div>
				<div class="is-text">Für Social Media wurde die Markenlogik in einen flexiblen digitalen Auftritt übersetzt. Prägnante Typografie, wiedererkennbare Grafikelemente und ein modulares System sorgen für einen Feed, der eigenständig wirkt und dennoch klar zur Marke gehört.</div>
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
			<div class="sub-headline col-white sub-2">B2B + B2C Webseite</div>
			<div class="is-text">Für Social Media wurde die Markenlogik in einen flexiblen digitalen Auftritt übersetzt. Prägnante Typografie, wiedererkennbare Grafikelemente und ein modulares System sorgen für einen Feed, der eigenständig wirkt und dennoch klar zur Marke gehört.</div>
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
	'project-button',
	'ROCK MASTER',
	'/projekte/garda-trentino'
); ?>
</div>
</section>
</div>