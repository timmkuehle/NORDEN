<?php
$seoTitle = 'Pleasure Snowboard Magazine Rebranding & Editorial Design | NORDEN';
$seoDescription = 'Rebranding für Pleasure Snowboard Magazine: Positionierung, Logo und Editorial Design für Europas unabhängiges Snowboard-Magazin mit hochwertigem Coffee-Table-Anspruch.';

if (isset($NORDEN_TEMPLATE_META_ONLY) && $NORDEN_TEMPLATE_META_ONLY) {
	$NORDEN_TEMPLATE_META = [
		'title' => $seoTitle,
		'description' => $seoDescription
	];
	return;
}
?>

<div class="project-wrapper pleasure">
    <section class="project-section section-1">
        <div class="image-wrapper">
            <?php new Image(
            	null,
            	'logo',
            	'/content/resources/media/pleasure/04_pleasureLogos/04_PleasureLogo_01.svg',
            	null,
            	true
            ); ?>
        </div>
    </section>


    <section class="project-section has-padding-lr section-2">
        <div class="row">
            <div class="col s16 m16 l11 xl10">
                <p class="is-large-text desktop-only">Pleasure Snowboard Magazin ist eine feste Größe der europäischen Snowboardkultur. Mit dem Redesign entwickelte NORDEN den Markenauftritt grundlegend weiter – von Positionierung und Logo bis zum Editorial Design. So entstand eine <span class="highlight-circle">visuelle Identität</span>, die das Magazin erwachsener, hochwertiger und kuratierter positioniert: weniger reines Szenemedium, mehr modernes Editorial Format mit Coffee-Table-Anspruch.</p>
                <p class="is-large-text mobile-only">Pleasure Snowboard Magazin ist eine feste Größe der europäischen Snowboardkultur. NORDEN entwickelte den Markenauftritt neu – von Positionierung und Logo bis zum Editorial Design. So entstand eine <span class="highlight-circle">hochwertigere</span>, erwachsenere visuelle Identität mit klarem Coffee-Table-Anspruch.
                </p>
            </div>
        </div>
    </section>

    <section class="project-section  section-3">
        <div class="keywords has-padding-lr">
            <span class="desktop-only">Positionierung</span>
            <span>Logo Redesign</span>
            <span>Konzept</span>
            <span>Editorial Design</span>
            <span>Ausarbeitung der Ausgaben</span>
            <span>Merch</span>
        </div>
        <?php new Image(
        	null,
        	'magazine-cover',
        	'/content/resources/media/pleasure/02_Cover_Mockup.jpg',
        	'Pleasure Magazine Cover',
        	true
        ); ?>
        <?php new Video(
        	'video',
        	'/content/resources/media/pleasure/03_Cover_Animation/NORDEN_intern_Website_pleassur_Coveranimation.mp4',
        	'16/9',
        	'/content/resources/media/pleasure/03_Cover_Animation/Pleasure_Cover_Aniamtion_Still.png',
        	'Pleasure Magazine Cover Animation',
        	true,
        	true,
        	true,
        	true,
        	false,
        	null,
        	null,
        	null,
        	true
        ); ?>
    </section>

    <section class="project-section has-padding-lr section-4">
        <div class="row">
           <div class="col flex-center s16 m14 l12 push-m1 push-l2">
            <?php new Image(
            	null,
            	'logos',
            	'/content/resources/media/pleasure/04_PleasureLogos.svg',
            	null,
            	true
            ); ?>
           
           </div>
           <div class="col flex-center s16 m14 l12 push-m1 push-l2">
           <?php new Image(
           	null,
           	'shirt-merchandise',
           	'/content/resources/media/pleasure/04_Trennerbild_TShirt_Merch.jpg',
           	' T-Shirt Merchandise',
           	true
           ); ?>
           </div>

           <div class="col s16 m10 l7 xl6 flex-start push-m1 push-l2">
            <p class="is-text desktop-only">Snowboarden ist mehr als ein Sport: rebellische Jugendkultur, olympischer Leistungssport, wagemutige Selbstverwirklichung, abenteuerliche Alltagsflucht, Fernweh oder einfach nur Lieblingsfreizeitbeschäftigung in der Natur. All diese Facetten des Lifestyle-Wintersports fängt Pleasure mit atemberaubenden Fotos, authentischer Sprache und internatio-nalen Autoren, Fotografen und Illustratoren ein.</p>
            <p class="is-text mobile-only">Snowboarden ist Kultur, Haltung und Lebensgefühl. Pleasure verdichtet diese Welt in starken Bildern, authentischer Sprache und einem hochwertigen Editorial Design.</p>
    </div>
        </div>

        <div class="background "></div>
    </section>

    <section class="project-section has-padding-lr section-5 bg-col-light-gray">
        <div class="carousel-container">
        <div class="carousel-navigation">
                <button type="button" class="carousel-prev" aria-label="Previous slide"></button>
                <button type="button" class="carousel-next" aria-label="Next slide"></button>
            </div>
            <div class="carousel">
       
                <div class="carousel-track">
                    <div class="carousel-slide">
                        <?php new Image(
                        	null,
                        	'image',
                        	'/content/resources/media/pleasure/05_Artikel_Innenseiten_Slidebox_1/01_Innenseite_1.jpg',
                        	null,
                        	true
                        ); ?> 
                    </div>
                    <div class="carousel-slide">
                        <?php new Image(
                        	null,
                        	'image',
                        	'/content/resources/media/pleasure/05_Artikel_Innenseiten_Slidebox_1/03_Innenseite_2.jpg',
                        	null,
                        	true
                        ); ?>
                    </div>
                    <div class="carousel-slide">
                        <?php new Image(
                        	null,
                        	'image',
                        	'/content/resources/media/pleasure/05_Artikel_Innenseiten_Slidebox_1/04_Innenseite_3.jpg',
                        	null,
                        	true
                        ); ?>
                    </div>
                    <div class="carousel-slide">
                        <?php new Image(
                        	null,
                        	'image',
                        	'/content/resources/media/pleasure/05_Artikel_Innenseiten_Slidebox_1/05_Innenseite_4.jpg',
                        	null,
                        	true
                        ); ?>
                    </div>
                    <div class="carousel-slide">
                        <?php new Image(
                        	null,
                        	'image',
                        	'/content/resources/media/pleasure/05_Artikel_Innenseiten_Slidebox_1/05_Innenseite_5.jpg',
                        	null,
                        	true
                        ); ?>
                    </div>
                </div>
            </div>
           
        </div>
    </section>

    <section class="project-section section-6 bg-col-light-gray">
    <div class="absolute-row">
        <p class="is-text desktop-only">Jede Story folgt einem klaren gestalterischen Konzept und wird zugleich individuell entwickelt. So entstehen Strecken, die Inhalt, Rhythmus und Bildsprache präzise aufeinander abstimmen.</p>
        <p class="is-text mobile-only">Jede Story folgt einem klaren Konzept und wird individuell gestaltet.</p>
    </div>
    <?php new Image(
    	null,
    	'image',
    	'/content/resources/media/pleasure/06_Rooted_in_Snowboarding/06_Artikel_1_Bilder-zusammen.png',
    	'Rooted in Snowboarding Article',
    	true
    ); ?>
    <?php new Image(
    	null,
    	'graphic',
    	'/content/resources/media/pleasure/06_Rooted_in_Snowboarding/06_Pleasure_Grafik1.svg',
    	'Rooted in Snowboarding',
    	true
    ); ?>
        <?php new Image(
        	null,
        	'trenner',
        	'/content/resources/media/pleasure/06_Rooted_in_Snowboarding/06_Trennerbild_1.jpg',
        	'Rooted in Snowboarding',
        	true
        ); ?>
    </section>

    <section class="project-section has-padding-lr section-7 bg-col-light-gray">
        <div class="row">
            <div class="col s14 m6 l5 push-s1 push-m1 space-between">
                <p class="is-text desktop-only">Zwei Schriften bilden die typografische Basis des Magazins: eine Serifenschrift und eine dazu passende Sans Serif. Diese Kombination schafft einen ruhigen, hochwertigen Rahmen und gibt jeder Ausgabe eine erwachsenere editoriale Anmutung.</p>
                <p class="is-text mobile-only">Eine Serifenschrift und eine passende Sans Serif schaffen einen ruhigen, hochwertigen typografischen Rahmen.</p>
                <?php new Image(
                	null,
                	'typografie',
                	'/content/resources/media/pleasure/07_Schrift/01_Bild_Schrift.png',
                	'Schriftarten',
                	true
                ); ?>
            </div>
            <div class="col s16 m7 l7 xl6 push-m2 push-l3 push-xl3">
            <?php new Image(
            	null,
            	'trenner',
            	'/content/resources/media/pleasure/07_Schrift/02_Bild_Schrift.jpg',
            	'Schriftarten',
            	true
            ); ?>
            </div>
        </div>
    </section>
    <section class="project-section section-8">
    <?php new Image(
    	null,
    	'trenner',
    	'/content/resources/media/pleasure/09_Trennerbild_5.jpg',
    	'Schriftarten',
    	true
    ); ?>
    </section>

    <section class="project-section has-padding-lr section-9">
        <div class="row">
            <div class="col s7 m7 l7">
                <?php new Image(
                	null,
                	'beanie',
                	'/content/resources/media/pleasure/10_Merch_Beanie/02_Merch_Beanie_1.jpg',
                	'Beanie Merchandise',
                	true
                ); ?>
                <?php new Image(
                	null,
                	'smiley',
                	'/content/resources/media/pleasure/10_Merch_Beanie/01_Grafik_Smiley_1.svg',
                	'Smiley',
                	true
                ); ?>
            </div>
            <div class="col s7 m7 l7 flex-end">
            <p class="is-text desktop-only">Mit dem Redesign wurde Pleasure nicht nur gestalterisch geschärft, sondern auch als Marke klarer positioniert. Logo, Typografie, Bildwelt und Layout greifen ineinander und verleihen dem Magazin eine eigenständige visuelle Haltung zwischen Snowboardkultur und hochwertigem Editorial Design.</p>
            <p class="is-text mobile-only">Mit dem Redesign wurde Pleasure als Marke geschärft. Logo, Typografie, Bildwelt und Layout verleihen dem Magazin eine eigenständige Haltung zwischen Snowboardkultur und hochwertigem Editorial Design.</p>

                <?php new Image(
                	null,
                	'beanie',
                	'/content/resources/media/pleasure/10_Merch_Beanie/03_Merch_Beanie_1.jpg',
                	'Beanie Merchandise',
                	true
                ); ?>
            </div>
    
        </div>
    </section>

    <section class="project-section has-padding-lr section-10 bg-col-light-pink">
       <div class="row">
       <?php new Image(
       	null,
       	'star',
       	'/content/resources/media/pleasure/11_Artikel_lila/11_Grafik_Stern_1.svg',
       	'Star',
       	true
       ); ?>
        <div class="col s5">
        <?php new Image(
        	null,
        	'article-1',
        	'/content/resources/media/pleasure/11_Artikel_lila/11_Artikel_1.jpg',
        	'Article 1',
        	true
        ); ?>
        </div>
        <div class="col s5">
        <?php new Image(
        	null,
        	'article-2',
        	'/content/resources/media/pleasure/11_Artikel_lila/11_Artikel_2.jpg',
        	'T-Shirt Merchandise',
        	true
        ); ?>
        </div>
        <div class="col s5">
        <?php new Image(
        	null,
        	'article-3',
        	'/content/resources/media/pleasure/11_Artikel_lila/11_Artikel_3.jpg',
        	'Article 3',
        	true
        ); ?>
        </div>
        <?php new Image(
        	null,
        	'zitat',
        	'/content/resources/media/pleasure/11_Artikel_lila/11_Artikel_Zitat_4.svg',
        	'Zitat',
        	true
        ); ?>
       </div>



        <div class="row">
            <div class="col s14 m8 l7 xl5">
                <p class="is-text desktop-only">Auch längere Features folgen einer klaren visuellen Dramaturgie. Bildgrößen, Zitate, Einstiege und Textfluss werden für jede Story individuell gesetzt – immer mit dem Ziel, Inhalt und Atmosphäre gestalterisch präzise zu verdichten.    </p>
                <p class="is-text mobile-only">Auch längere Features folgen einer klaren visuellen Dramaturgie und werden für jede Story individuell gestaltet.</p>
            </div>
            <div class="col s16 m13">
                <?php new Image(
                	null,
                	'magazine',
                	'/content/resources/media/pleasure/11_Artikel_lila/11_Artikel_5.png',
                	'Article 5',
                	true
                ); ?>
            </div>
       </div>
       <?php new Image(
       	null,
       	'star-2',
       	'/content/resources/media/pleasure/11_Artikel_lila/11_Grafik_Stern_1.svg',
       	'Star',
       	true
       ); ?>
    </section>

    <section class="project-section has-padding-lr section-11">
        <div class="row">
            <div class="col s16 m12 l13">
                <?php new Image(
                	null,
                	'article-1',
                	'/content/resources/media/pleasure/12_Artikel_orange/12_Artikel_1.jpg',
                	'Article Orange',
                	true
                ); ?>
            </div>
        </div>

        <div class="row">
        <div class="col s16 m10 l9">
                <?php new Image(
                	null,
                	'zitat',
                	'/content/resources/media/pleasure/12_Artikel_orange/12_Zitat_1.svg',
                	'Zitat',
                	true
                ); ?>
            </div>
            <div class="col s6 m6 l6 xl4">
                <?php new Image(
                	null,
                	'article-1',
                	'/content/resources/media/pleasure/12_Artikel_orange/12_Artikel_2.jpg',
                	'Article Orange',
                	true
                ); ?>
            </div>
        </div>
    </section>
    <section class="project-section section-12">
    <?php new Image(
    	null,
    	'separator',
    	'/content/resources/media/pleasure/12_Artikel_orange/12_Grafik_Linesman.svg',
    	'Separator',
    	true
    ); ?>
    </section>

    <section class="project-section has-padding-lr section-13 bg-col-orange">
        <div class="carousel-container">
            <div class="section-13-layout">
                <div class="section-13-carousel-wrap">
                    <div class="carousel">
                        <div class="carousel-track">
                            <div class="carousel-slide">
                                <?php new Image(
                                	null,
                                	'image',
                                	'/content/resources/media/pleasure/13_Artikel_Slidebox_orange/02_Innenseite.jpg',
                                	null,
                                	true
                                ); ?>
                            </div>
                            <div class="carousel-slide">
                                <?php new Image(
                                	null,
                                	'image',
                                	'/content/resources/media/pleasure/13_Artikel_Slidebox_orange/03_Innenseite.jpg',
                                	null,
                                	true
                                ); ?>
                            </div>
                            <div class="carousel-slide">
                                <?php new Image(
                                	null,
                                	'image',
                                	'/content/resources/media/pleasure/13_Artikel_Slidebox_orange/04_Innenseite.jpg',
                                	null,
                                	true
                                ); ?>
                            </div>
                            <div class="carousel-slide">
                                <?php new Image(
                                	null,
                                	'image',
                                	'/content/resources/media/pleasure/13_Artikel_Slidebox_orange/05_Innenseite.jpg',
                                	null,
                                	true
                                ); ?>
                            </div>
                            <div class="carousel-slide">
                                <?php new Image(
                                	null,
                                	'image',
                                	'/content/resources/media/pleasure/13_Artikel_Slidebox_orange/06_Innenseite.jpg',
                                	null,
                                	true
                                ); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="section-13-sidebar">
                    <div class="section-13-zitat">
                        <?php new Image(
                        	null,
                        	'slidebox-zitat',
                        	'/content/resources/media/pleasure/13_Artikel_Slidebox_orange/01_Zitat_2.svg',
                        	'Zitat',
                        	true
                        ); ?>
                    </div>
                    <div class="carousel-navigation">
                        <button type="button" class="carousel-prev" aria-label="Previous slide"></button>
                        <button type="button" class="carousel-next" aria-label="Next slide"></button>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="project-section section-14">
    <?php new Image(
    	null,
    	'separator',
    	'/content/resources/media/pleasure/14_Schlussartikel/01_Grafik_Smiley_1.svg',
    	'Smiley',
    	true
    ); ?>
    </section>

    <section class="project-section section-15">
    <div class="row flex-end">
        <div class="col s16 m13 l12 xl11">
        <?php new Image(
        	null,
        	'image',
        	'/content/resources/media/pleasure/14_Schlussartikel/02_Artikel.png',
        	'Schlussartikel',
        	true
        ); ?>
        </div>
    </div>
    </section>

    <section class="project-section section-16">
    <?php new Image(
    	null,
    	'smileys',
    	'/content/resources/media/pleasure/14_Schlussartikel/03_Smileys_Grafik.svg',
    	'Smileys',
    	true
    ); ?>
    <?php new Image(
    	null,
    	'trenner',
    	'/content/resources/media/pleasure/14_Schlussartikel/04_Trennerbild_2.jpg',
    	'Snowboarding Artikel',
    	true
    ); ?>
    </section>

    <section class="project-section has-padding-lr section-17">
    <div class="row">
        <div class="col s8 m7 l6 push-m1 push-l2">
        <?php new Image(
        	null,
        	'image',
        	'/content/resources/media/pleasure/15_Merch/01_Merch.jpg',
        	'Logo',
        	true
        ); ?>
        </div>
        <div class="col s8 m7 l6 push-m1 push-l2">
        <?php new Image(
        	null,
        	'image',
        	'/content/resources/media/pleasure/15_Merch/02_Merch.jpg',
        	'Logo',
        	true
        ); ?>
        </div>
        <div class="col s8 m7 l6 push-m1 push-l2">
        <?php new Image(
        	null,
        	'image',
        	'/content/resources/media/pleasure/15_Merch/03_Merch.jpg',
        	'Logo',
        	true
        ); ?>
        </div>
        <div class="col s8 m7 l6 push-m1 push-l2">
        <?php new Image(
        	null,
        	'image',
        	'/content/resources/media/pleasure/15_Merch/04_Merch.jpg',
        	'Logo',
        	true
        ); ?>
        </div>
    </div>
    </section>

    <section class="project-section section-18">
    <?php new Image(
    	null,
    	'image',
    	'/content/resources/media/pleasure/Trennerbild_4.jpg',
    	'Footer',
    	true
    ); ?>
    </section>
</div>