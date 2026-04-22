<?php
$seoTitle = 'Florian Manz Branding, Logodesign & Corporate Design | NORDEN';
$seoDescription = 'Für den Dokumentarfotografen Florian Manz entwickelte NORDEN ein modulares Branding mit Logodesign, Typografie und Geschäftsausstattung – reduziert, klar und dokumentarisch prägnant.';

if (isset($NORDEN_TEMPLATE_META_ONLY) && $NORDEN_TEMPLATE_META_ONLY) {
	$NORDEN_TEMPLATE_META = [
		'title' => $seoTitle,
		'description' => $seoDescription,
	];
	return;
}
?>

<div class="project-wrapper manz">
    <section class="project-section has-padding-lr section-1 bg-col-beige">
        <?php new Image(
        	null,
        	'image',
        	'/content/resources/media/manz/01_FlorianManz_Logo_2024_RZ-03.svg',
        	null,
        	true
        ); ?>
    </section>

    <section class="project-section has-padding-lr section-2 bg-col-white">
        <div class="row">
            <div class="col s16 m16 l15">
                <p class="project-subtext desktop-only">Für den Dokumentarfotografen Florian Manz entwickelten wir ein prägnantes, modulares Logodesign inklusive Geschäftsausstattung. Die Gestaltung spiegelt seine dokumentarische Arbeitsweise wider: 
                    <span class="is-bold">reduziert, klar und typografisch stark.</span></p>
                <p class="project-subtext mobile-only">Für den Fotografen Florian Manz entwickelten wir ein modulares Erscheinungsbild, das seine dokumentarische Arbeitsweise in eine <span class="bold">reduzierte, klare und typografisch prägnante Identität</span> übersetzt.</p>
            </div>
        </div>
    </section>

    <section class="project-section has-padding-lr section-3 bg-col-white no-padding-top">
		<?php new AnimatedBanner(
			null,
			'animated-banner',
			[
				'Konzept',
				'Logodesign',
				'Schriftgestaltung',
				'Geschäftsausstattung',
				'Farb- und Typografie-Definition'
			],
			'', // no label
			'manz-project-row-track',
			'', // hide default "Unsere Leistungen" label
			'' // no separators
		); ?>
    </section>

    <section class="project-section section-4 bg-col-white">
        <div class="row">
            <div class="col s16 m14 l12">
                <div class="section-header">
                    <h3>Farbsystem</h3>
                    <p class="desktop-only">Die Farbwelt unterstützt die dokumentarische Haltung des Auftritts. Schwarz schafft Tiefe, Klarheit und Kontrast. Beige bringt Ruhe und Zurückhaltung in die Bildsprache, während Weiß als offener, neutraler Raum den Inhalten die nötige Präsenz gibt.</p>
                    <p class="mobile-only">Schwarz, Beige und Weiß schaffen eine ruhige, klare Farbwelt, die den Inhalten bewusst den Vorrang lässt.</p>
                </div>
            </div>
        </div>
        <div class="grid">
            <div class="grid-item has-border bg-col-black">
            </div>
            <div class="grid-item has-border bg-col-beige">
            </div>
            <div class="grid-item has-border bg-col-white">
            </div>
        </div>
    </section>

    <section class="project-section has-padding-lr section-5 bg-col-beige">
        <div class="row">
            <div class="col s16 m8 l6 xl4">
                <h4 class="section-headline">Logo</h4>
                <p class="desktop-only">Das Logo übersetzt Florian Manz’ dokumentarische Haltung in eine eigenständige Wortmarke. Klare Strukturen treffen auf weiche Übergänge und schaffen einen Auftritt, der Nähe, Präzision und visuelle Schärfe verbindet.</p>
                <p class="mobile-only">Das Logo verbindet klare Strukturen mit organischen Rundungen und übersetzt so die Spannung dokumentarischer Arbeit in eine eigenständige Wortmarke.</p>
            </div>
            <div class="col s16 m7 l6 xl5">
                <?php new Image(
                	null,
                	null,
                	'/content/resources/media/manz/03_FlorianManz_Logo_2024_RZ-02.svg',
                	'Florian Manz Logo Idee',
                	true
                ); ?>
            </div>
        </div>
    </section>

    <section class="project-section has-padding-lr section-6 bg-col-black">
        <div class="row">
            <div class="col s16 m8 l9">
                <h4 class="section-headline">Logo-System</h4>
                <p class="col-white desktop-only">Das Logosystem ist modular aufgebaut und vielseitig einsetzbar. Es funktioniert als Blocklogo, als Wortmarke oder in einzelnen Modulen und lässt sich flexibel in Print- und Digitalmedien anwenden, ohne an Wiedererkennbarkeit zu verlieren. So entsteht ein professioneller, zurückhaltender Rahmen, der Bildsprache und Inhalt bewusst den Vorrang lässt.</p>
                <p class="col-white mobile-only">Das modulare Logosystem funktioniert flexibel über Print und Digital und bleibt in jeder Anwendung klar wiedererkennbar.</p>
            </div>
            <div class="col s16">
                <?php new Image(
                	null,
                	'logo-system',
                	'/content/resources/media/manz/04_FlorianManz_Logo_2024_RZ-05.svg',
                	'Florian Manz Logo System',
                	true
                ); ?>
            </div>
        </div>
    </section>


    <section class="project-section has-padding-lr section-7">
        <div class="placeholder bg-col-black"></div>

               <div class="row">
                <div class="col s16">
                    <?php new Image(
                    	null,
                    	'briefpapier',
                    	'/content/resources/media/manz/05_Briefpapier2.jpg',
                    	'Briefpapier',
                    	true
                    ); ?>
                </div>

                <div class="col s8">
                    <?php new Image(
                    	null,
                    	'visitenkarten',
                    	'/content/resources/media/manz/06_Visitenkarten1.jpg',
                    	'Visitenkarten',
                    	true
                    ); ?>
           
                </div>

                <div class="col s8 two-images">
                    <?php new Image(
                    	null,
                    	'briefumschlag',
                    	'/content/resources/media/manz/07_Briefumschlag.jpg',
                    	'Briefumschlag',
                    	true
                    ); ?>
                    <?php new Image(
                    	null,
                    	'visitenkarten-2',
                    	'/content/resources/media/manz/08_Visitenkarten2.jpg',
                    	'Visitenkarten - 2',
                    	true
                    ); ?>
                </div>
            </div>
    </section>

    <section class="project-section has-padding-lr section-8">
        <div class="row">
            <div class="col s7 m6 l5">
                <?php new Image(
                    null,
                    'typografie',
                    '/content/resources/media/manz/09_FlorianManz_Logo_2024_RZ-01.svg',
                    'Florian Manz Typografie',
                    true
                ); ?>
            </div>
            <div class="col s8 m8 l6 push-s1 push-m2 push-l3">
                <h4 class="section-headline">Typografie</h4>
                <p class="is-text desktop-only">Die Wahl der Typografie ist auf die Popins gefallen. Sie zeichnet sich durch runde Formen, gleichmäßige Strichstärken und eine moderne, sachliche Anmutung aus – perfekt für zeitgemäßes, minimalistisches Design.</p>
                <p class="is-text mobile-only">Eine ruhige, sachliche Sans Serif bildet die typografische Basis des Auftritts und unterstreicht dessen dokumentarische Klarheit.</p>
            </div>
        
        </div>
    </section>
</div>
