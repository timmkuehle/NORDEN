<?php
$seoTitle = 'Florian Manz Branding, Logodesign & Corporate Design | NORDEN';
$seoDescription =
	'Für den Dokumentarfotografen Florian Manz entwickelte NORDEN ein modulares Branding mit Logodesign, Typografie und Geschäftsausstattung – reduziert, klar und dokumentarisch prägnant.';

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
    	'/content/resources/media/kaiserweis/kids-box/01_Header_KUUSK_KäseBoxen_Kidsbox.svg',
    	'Kaiserweis Kids Hero',
    	true
    ); ?>
    </section>

    <section class="project-section has-padding-lr section-2 bg-col-white">
       <div class="row">
       <div class="col s16 m12 l11">
					<p class="text-is-large">Die Region Kaiserwinkl und das Kufsteinerland sind bekannt für ihr regionale Vielfalt und die handwerkliche Herstellung von Genussmitteln geprägt durch die alpine, bäuerliche Struktur ist so die <span class="bold">Kaiserweis Käseregion</span> mit dem bekannten Heumilchkäse entstanden.</p>
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
            <h4 class="small-title">Unsere Käse Boxen</h3>
			<p class="is-text is-indented">Wir durften die Käsregion Kaiserweis bei einem spannenden Packaging Projekt unterstützen. Und dabei zwei sehr unterschiedlich Kastl entwickeln. Zum einen, eine farbenfrohe für Kinder, mit Fokus auf Spiel und Spaß. Auf der anderen Seite eine traditionelle Holzkiste für Erwachsene. Regionalität spielt dabei eine große Rolle.</p>
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
</div>
