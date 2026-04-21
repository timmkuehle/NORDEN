<?php
$seoTitle = 'Ötztal Destination Branding & Corporate Design | NORDEN';
$seoDescription =
	'Corporate Design für das Ötztal: visuelle Markenstrategie, Destination Branding und markenübergreifendes Designsystem für eine alpine Destination in Tirol.';

if (isset($NORDEN_TEMPLATE_META_ONLY) && $NORDEN_TEMPLATE_META_ONLY) {
	$NORDEN_TEMPLATE_META = [
		'title' => $seoTitle,
		'description' => $seoDescription
	];
	return;
}
?>

<div class="project-wrapper oetztal-cd">
    <section class="project-section has-padding-lr section-1 bg-col-white">
    <div class="background"></div>
    <div class="section-name">Brandclip</div>
    <h1 class="project-headline">Ötztal</h1>

    <?php new Image(
    	null,
    	'claim',
    	'/content/resources/media/oetztalCd/01_Brandclip/OETZT_Claim.svg',
    	'Ötztal Claim',
    	true
    ); ?>
    
    <div class="video-play-wrapper">
        <?php new Video(
        	'header-video',
        	'/content/resources/media/oetztalCd/01_Brandclip/OETZT_BrandClip_Web.mp4',
        	'16/9',
        	'/content/resources/media/oetztalCd/01_Brandclip/OETZT_BrandClip_Still_Web.jpg',
        	'Ötztal Brandclip',
        	true,
        	true,
        	true,
        	true,
        	false,
        	'/content/resources/media/oetztalCd/01_Brandclip/OETZT_BrandClip_Mobile.mp4',
        	'16/9',
        	'/content/resources/media/oetztalCd/01_Brandclip/OETZT_BrandClip_Still_Mobile.jpg',
        	true
        ); ?>
        <button type="button" class="video-play-button video-play-button--dark" aria-label="Video abspielen">
            <svg class="play-icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M8 5v14l11-7z"/>
            </svg>
        </button>
    </div>
    </section>

    <section class="project-section has-padding-lr section-2 bg-col-white">
        <div class="row">
            <div class="col s16 m16 l13 xl12">
                <p class="text-is-large desktop-only">Für die Marke Ötztal entstand ein Corporate-Design-System, das die Positionierung innerhalb einer klaren Drei-Marken-Strategie sichtbar macht. Claim, Typografie, Bildsprache und Gestaltungsprinzipien geben der Marke einen eigenständigen Auftritt und schaffen zugleich ein stimmiges Zusammenspiel <mspan class="highlight-circle">it Sölden und Gurgl.</mspan></p>
                <p class="text-is-large mobile-only">Für die Marke Ötztal entstand ein Corporate-Design-System mit eigenständigem Auftritt und klarem Zusammenspiel innerhalb der Drei-Marken-Strategie m<span class="highlight-circle">it Sölden und Gurgl.</span></p>
            </div>
        </div>
        <?php new AnimatedBanner(
        	null,
        	'animated-banner',
        	[
        		'Markenstrategie',
        		'Corporate Design',
        		'Branding & Implementierung',
        		'Online & Offline Kommunikationskonzept',
        		'Brandclip',
        		'Animationen',
        		'Social Media',
        		'Merchandise',
        		'Event Brandings'
        	],
        	'col-red',
        	'col-red'
        ); ?>
    </section>


    <section class="project-section has-padding-lr section-3 bg-col-white">
        <div class="row">
            <div class="col s16 m16 l13 xl12">
                <h3 class="project-headline">Gestaltungselement</h3>
            </div>

            <div class="col s16 m12 l10 push-m1">
            <div class="meta-headline desktop-only">Höhenlinien</div>
                <p class="is-text desktop-only">Die topografischen Linien greifen die Formensprache der Bergwelt auf und verleihen dem Auftritt einen klaren Outdoor-Charakter. Als abstrahierte Höhenlinien schaffen sie Struktur, Tiefe und eine sichtbare Verbindung zur alpinen Herkunft der Marke.</p>
                <p class="is-text mobile-only">Die topografischen Linien greifen die Bergwelt auf und verleihen dem Auftritt einen klaren Outdoor-Charakter. Sie schaffen eine sichtbare Verbindung zur alpinen Herkunft der Marke.</p>
            </div>
        </div>

        
    </section>

    <section class="project-section has-padding-lr section-32">
        <div class="section-name">Graphic elements</div>

        <div class="section-32-layout">
            <div class="section-32-video video-wrapper">
                <div class="video-play-wrapper">
                    <?php new Video(
                    	'video',
                    	'/content/resources/media/oetztalCd/02_Gestaltungselement/OETZ_Hoehenlinien_Animation.mp4',
                    	'1/1',
                    	'/content/resources/media/oetztalCd/02_Gestaltungselement/OETZ_Hoehenlinien_Animation_Still.jpg',
                    	'Strichgrafiken',
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
                    <button type="button" class="video-play-button" aria-label="Video abspielen">
                        <svg class="play-icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="section-32-icons">
				<div class="desktop-only">
					<?php new Svg(
						'linien-items',
						null,
						'/content/resources/media/oetztalCd/02_Gestaltungselement/OETZT_Hoehenlinien_desktop.svg',
						'Höhenlinien'
					); ?>
				</div>
				<div class="mobile-only">
					<?php new Svg(
						'linien-items-mobile',
						null,
						'/content/resources/media/oetztalCd/02_Gestaltungselement/OETZT_Hoehenlinien_mobile.svg',
						'Höhenlinien'
					); ?>
				</div>
            </div>
        </div>

    </section>

    <section class="project-section has-padding-lr section-4 bg-col-dark-red">
    <div class="section-name">Typography</div>

        <div class="row">
            <div class="col s16 m16 l13 xl12">
                <h3 class="project-headline col-light-pink">Typography</h3>
            </div>
        </div>

        <div class="row">
            <div class="col s16 m7 push-m1 l7 push-xl1">
              <div class="text-wrapper">
              <div class="meta-headline col-light-red desktop-only">We talk "Ötztal"</div>
                <p class="is-text col-white desktop-only">Die eigens entwickelte Corporate Font verleiht der Marke eine unverwechselbare Stimme. Modifizierte Zeichen, Ligaturen und typografische Eigenheiten greifen den Charakter der Ötztaler Sprache auf und übersetzen ihn in ein klares, prägnantes Schriftbild.</p>
                <p class="is-text col-white mobile-only">ie eigens entwickelte Corporate Font greift den Charakter der Ötztaler Sprache auf und übersetzt ihn in ein klares, prägnantes Schriftbild..</p>
                <p class="col-white">— Font creation in cooperation with TypeTogether</p>
              </div>
                <?php new \Button(
                	'typo-button',
                	null,
                	'Mehr zur Typografie',
                	'/projekte/oetztal/font'
                ); ?>
            </div>
            <div class="col s16 m7 push-m1 l8 xl6 push-xl2">
            <?php new Image(
            	null,
            	'linien-3',
            	'/content/resources/media/oetztalCd/03_Logoanimation/03_oetzt_Schrift_Bild.jpg',
            	'Strichgrafiken',
            	true
            ); ?>
            </div>
        </div>
    </section>

    <section class="project-section has-padding-lr section-5 bg-col-dark-red">
    <div class="row">
            <div class="col s16 m16 l13 xl12">
                <h3 class="project-headline col-light-pink">CORPORATE Colors</h3>
            </div>

            <div class="col s11 m9 l7 xl5 push-m1">
                <p class="is-text desktop-only">Die Farbwelt verbindet Tiefe, Wärme und Signalwirkung. Ein dunkler Rotton bildet die markante Basis der Marke, helle Neutraltöne schaffen Ruhe und Klarheit. Prägnante Akzentfarben setzen Orientierungspunkte und geben dem System Flexibilität über unterschiedliche Anwendungen hinweg.                </p>
                <p class="is-text mobile-only">Die Farbwelt verbindet Tiefe, Wärme und Signalwirkung. Dunkles Rot, helle Neutraltöne und prägnante Akzentfarben geben dem System Klarheit und Flexibilität</p>
            </div>
        </div>

        <div class="section-name">Colors</div>
    </section>

    <section class="project-section has-padding-lr section-6">
        <?php new Svg(
            null,
            null,
            '/content/resources/media/oetztalCd/farben-oetz.svg',
            'Ötztal Corporate Colors'
        ); ?>
    </section>

    <section class="project-section has-padding-lr section-7">
    <div class="section-name">Logo Animation</div>

        <div class="row">
            <div class="col s16 m16 l13 xl12">
                <h3 class="project-headline">Motion Design</h3>
            </div>
            <div class="col s16 m14 l10 push-m1 video-wrapper">
                <div class="video-play-wrapper">
                    <?php new Video(
                    	null,
                    	'/content/resources/media/oetztalCd/03_Logoanimation/OETZT_Logo_Animation.mp4',
                    	'16/9',
                    	'/content/resources/media/oetztalCd/03_Logoanimation/OETZT_Logo_Animation_Still.jpg',
                    	'Ötztal Typo Animation Konzept',
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
                    <button type="button" class="video-play-button" aria-label="Video abspielen">
                        <svg class="play-icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="col s16 m12 l10 push-m1">
                <div class="meta-headline desktop-only">Logo Animation</div>
                <p class="is-text desktop-only">Das Motion-Design-Konzept übersetzt den Claim „Ötztal. Bewegt dich.“ visuell und typografisch in Bewegtbild. So entsteht ein prägnanter Markenmoment mit hoher Wiedererkennbarkeit.</p>
                <p class="is-text mobile-only">Der Claim „Ötztal. Bewegt dich.“ wird visuell und typografisch in Bewegtbild übersetzt.</p>
            </div>
            
        </div>
    </section>

    <section class="project-section section-8">
        <?php new Image(
        	null,
        	'höhenlinien',
        	'/content/resources/media/oetztalCd/00_Background-Grafiken/oetzt_bg-grafiken_-01.svg',
        	'Höhenlinien',
        	true
        ); ?>
        <?php new Image(
        	null,
        	'claim',
        	'/content/resources/media/oetztalCd/01_Brandclip/OETZT_Claim.svg',
        	'Ötztal Claim',
        	true
        ); ?>
        <?php new Image(
        	null,
        	'trenner',
        	'/content/resources/media/oetztalCd/05_Trennerbild_01.jpg',
        	'Ötztal',
        	true
        ); ?>
    </section>

    <section class="project-section section-9 bg-col-dark-red">
    <div class="section-name">Print</div>

        <div class="row has-padding-lr">
            <div class="col s16 m16 l13 xl12">
                <h3 class="project-headline col-light-pink">Layout & Raster</h3>
            </div>

            <div class="col s16 m13 l8 xl6 push-m1">
                <p class="is-text col-white desktop-only">
                Ein proportionales Rastersystem sorgt für Konsistenz über alle Formate hinweg. Es schafft Ordnung im Aufbau, hält den Auftritt flexibel und bildet die Grundlage für eine medienübergreifende Markenführung.                </p>
                <p class="is-text col-white mobile-only">Ein proportionales Rastersystem sorgt für Konsistenz, Flexibilität und einen klaren Auftritt über alle Formate hinweg.</p>
            </div>
        </div>

        <div class="layout-images-row has-padding-l">
            <div class="images-stack">
                <?php new Image(
                	null,
                	'trenner',
                	'/content/resources/media/oetztalCd/06_OETZT_Layoutprinzip/OETZT_Layout_Raster-01.jpg',
                	'Layout Raster 01',
                	true
                ); ?>
                <?php new Image(
                	null,
                	'trenner',
                	'/content/resources/media/oetztalCd/06_OETZT_Layoutprinzip/OETZT_Layout_Raster-02.jpg',
                	'Layout Raster 02',
                	true
                ); ?>
            </div>
            <div class="cover-mockup-wrapper">
                <?php new Image(
                	null,
                	'cover-mockup',
                	'/content/resources/media/oetztalCd/06_OETZT_Layoutprinzip/OETZT_Folder_Cover_Mockup.jpg',
                	'Cover Mockup',
                	true
                ); ?>
            </div>
        </div>
    </section>

    <section class="project-section section-10 bg-col-dark-red">
        <div class="section-name">Ortsfolder</div>

        <div class="row has-padding-lr">
            <div class="col s16 m14 push-m1">
				<div class="carousel-container oetztalcd-ortsfolder-carousel">
					<div class="carousel" aria-label="Ortsfolder carousel">
						<div class="carousel-track">
							<?php
							$ortsfolder_images = [
								'/content/resources/media/oetztalCd/OETZT_Ortsfolder/Oetzt_Folder_1.jpg',
								'/content/resources/media/oetztalCd/OETZT_Ortsfolder/Oetzt_Folder_2.jpg',
								'/content/resources/media/oetztalCd/OETZT_Ortsfolder/Oetzt_Folder_3.jpg',
								'/content/resources/media/oetztalCd/OETZT_Ortsfolder/Oetzt_Folder_4.jpg',
								'/content/resources/media/oetztalCd/OETZT_Ortsfolder/Oetzt_Folder_22.jpg',
								'/content/resources/media/oetztalCd/OETZT_Ortsfolder/Oetzt_Folder_33.jpg',
								'/content/resources/media/oetztalCd/OETZT_Ortsfolder/Oetzt_Folder_44.jpg'
							];
							foreach ($ortsfolder_images as $idx => $src) {
								?>
								<div class="carousel-slide">
									<?php new Image(
										null,
										'carousel-image',
										$src,
										'Ortsfolder Slide ' . ($idx + 1),
										true
									); ?>
								</div>
								<?php
							}
							?>
						</div>
					</div>
					<div class="carousel-navigation" aria-label="Carousel navigation">
						<button type="button" class="carousel-prev" aria-label="Previous slide"></button>
						<button type="button" class="carousel-next" aria-label="Next slide"></button>
					</div>
				</div>
            </div>
        </div>
    </section>

    <section class="project-section has-padding-lr section-11 bg-col-dark-red">
    <div class="section-name">Icons</div>

        <div class="row">
            <div class="col s16 m16 l13 xl12">
                <h3 class="project-headline col-light-pink">Icons</h3>
            </div>

            <div class="col s16 m13 l8 xl6 push-m1">
                <p class="is-text col-white desktop-only">Die Piktogrammfamilie übersetzt die Vielfalt des Ötztals in ein einheitliches visuelles Leitsystem. So entstehen verständliche, flexibel einsetzbare Zeichen, die Information, Orientierung und Markenzugehörigkeit verbinden.            </div>
                <p class="is-text col-white mobile-only">Die Piktogramme übersetzen die Vielfalt des Ötztals in ein klares visuelles Leitsystem und verbinden Orientierung mit Markenzugehörigkeit.</p>
            </div>
        <div class="icons-layout">
            <div class="radfahren-stack">
                <?php new Image(
                	null,
                	'radfahren-1',
                	'/content/resources/media/oetztalCd/09_OETZT_Icons/Radfahren_1.svg',
                	'Icon 1',
                	true
                ); ?>
                <?php new Image(
                	null,
                	'radfahren-2',
                	'/content/resources/media/oetztalCd/09_OETZT_Icons/Radfahren_2.svg',
                	'Icon 2',
                	true
                ); ?>
            </div>
            <div class="icons-overview">
                <?php new Image(
                	null,
                	'icon-2',
                	'/content/resources/media/oetztalCd/09_OETZT_Icons/Piktogramme_uerbesicht.svg',
                	'Icon 2',
                	true
                ); ?>
            </div>
        </div>
    </section>

    <section class="project-section has-padding-lr section-12 bg-col-dark-red">
        <div class="section-name">Social Media</div>
        <div class="row">
            <div class="col s16 m16 l13 xl12">
                <h3 class="project-headline col-light-pink">Ötztal goes Digital</h3>
            </div>
        </div>
        <div class="row">
            <div class="col s16 m14 push-m1">
                <h4 class="meta-headline">Postings + Stories<h4>
                <?php new Image(
                	null,
                	'swipe',
                	'/content/resources/media/oetztalCd/11_OETZT_SocialMedia/01_OETZT_SM_Swipe.png',
                	'Swipe',
                	true
                ); ?>
            </div>
            <div class="col s16 m14 push-m1">
                <?php new Image(
                	null,
                	'postings',
                	'/content/resources/media/oetztalCd/11_OETZT_SocialMedia/02_OETZT_SM_Postings_Web.png',
                	'Postings',
                	true
                ); ?>
            </div>
            <div class="col s7 m5 push-m1">
                <h4 class="meta-headline">Social Media Feed<h4>
                <?php new Image(
                	null,
                	'feed',
                	'/content/resources/media/oetztalCd/11_OETZT_SocialMedia/03_OETZT_SM_Feed.png',
                	'Feed',
                	true
                ); ?>
            </div>
        </div>

        <?php new Image(
        	null,
        	'background',
        	'/content/resources/media/oetztalCd/00_Background-Grafiken/oetzt_bg-grafiken_-03.svg',
        	'Höhenlinien',
        	true
        ); ?>
    </section>

    <section class="project-section has-padding-lr section-13">

    <?php new Image(
    	null,
    	'background',
    	'/content/resources/media/oetztalCd/00_Background-Grafiken/oetzt_bg-grafiken_-04.svg',
    	'Höhenlinien',
    	true
    ); ?>

        <div class="section-name">Screendesign</div>
        <div class="row">
            <div class="col s16 m14 l14 push-m1 video-wrapper">
                <div class="video-play-wrapper">
                    <?php new Video(
                    	null,
                    	'/content/resources/media/oetztalCd/12_OETZT_Screendesign/OETZT_Website_Screendesign.mp4',
                    	'16/9',
                    	'/content/resources/media/oetztalCd/12_OETZT_Screendesign/OETZT_Website_Screendesign_Still.jpg',
                    	'Screendesign',
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
                    <button type="button" class="video-play-button video-play-button--dark" aria-label="Video abspielen">
                        <svg class="play-icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="project-section section-14">
        <?php new Image(
        	null,
        	'trenner',
        	'/content/resources/media/oetztalCd/13_Trennerbild_02.jpg',
        	'Trennerbild',
        	true
        ); ?>
    </section>

    <section class="project-section has-padding-lr section-15">
        <div class="section-name">Print</div>

        <?php new Image(
        	null,
        	'background',
        	'/content/resources/media/oetztalCd/00_Background-Grafiken/oetzt_bg-grafiken_-04.svg',
        	'Höhenlinien',
        	true
        ); ?>
            
        <div class="row">
            <div class="col s16">
                <h3 class="project-headline col-dark-red">Print is not dead</h3>
            </div>
        </div>
        <div class="row">
            <div class="col s16">
                <h4 class="meta-headline col-light-pink">Ötztal Intern</h3>
            </div>
            <div class="col s16">
                <?php new Image(
                	null,
                	'desktop-image',
                	'/content/resources/media/oetztalCd/14_OETZT_Print/OETZT_Intern/OETZT_Intern_Web.png',
                	'Desktop Image',
                	true
                ); ?>
                <?php new Image(
                	null,
                	'mobile-image',
                	'/content/resources/media/oetztalCd/14_OETZT_Print/OETZT_Intern/OETZT_Intern_Mobile.png',
                	'Mobile Image',
                	true
                ); ?>
            </div>
        </div>

        <div class="row">
            <div class="col s16">
                <h4 class="meta-headline col-light-pink">Ötztal Magazin</h3>
            </div>
            <div class="col s8">
                <?php new Image(
                	null,
                	'magazine-cover',
                	'/content/resources/media/oetztalCd/14_OETZT_Print/OETZT_Mag/OETZT_Mag_Cover.png',
                	'Magazine Cover',
                	true
                ); ?>
            </div>
            <div class="col s8">
                <?php new Image(
                	null,
                	'magazine-pages',
                	'/content/resources/media/oetztalCd/14_OETZT_Print/OETZT_Mag/OETZT_Mag_Pages.png',
                	'Magazine Pages',
                	true
                ); ?>

            <?php new \Button(
            	null,
            	'button-desktop',
            	'Zum Ötztal Magazin',
            	'/projekte/oetztal/magazin',
            	'primary'
            ); ?>
            
            </div>
           <div class="col s16">
           <?php new \Button(
           	null,
           	'button-mobile',
           	'Zum Ötztal Magazin',
           	'/projekte/oetztal/magazin',
           	'primary'
           ); ?>
           </div>
        </div>
    </section>

    <section class="project-section has-padding-lr section-16 bg-col-dark-red">
        <div class="section-name">bikewear</div>
        <div class="row">
            <div class="col s16">
                <h3 class="project-headline col-light-pink">This is how ötztal looks like</h3>
            </div>
        </div>
        <div class="row flex-end">
            <div class="col s10 m12 l9">
                <?php new Image(
                	null,
                	'bikewear-image',
                	'/content/resources/media/oetztalCd/15_Merchandise/01_OETZT_Bikewear.jpg',
                	'Ötztal Bikewear',
                	true
                ); ?>
            </div>
        </div>
        <div class="row">
            <div class="col s10 m12 l9">
                <?php new Image(
                	null,
                	'bottle-image',
                	'/content/resources/media/oetztalCd/15_Merchandise/04_OETZT_Bottle.jpg',
                	'Ötztal Bottle',
                	true
                ); ?>
            </div>
        </div>
        <div class="row flex-end">
            <div class="col s10 m12 l9">
                <?php new Image(
                	null,
                	'band-image',
                	'/content/resources/media/oetztalCd/15_Merchandise/03_OETZT_Band.jpg',
                	'Ötztal Band',
                	true
                ); ?>
            </div>
        </div>
        <div class="row">
            <div class="col s10 m12 l9">
                <?php new Image(
                	null,
                	'car-image',
                	'/content/resources/media/oetztalCd/15_Merchandise/05_OETZT_Car_Branding.jpg',
                	'Ötztal Car Branding',
                	true
                ); ?>
            </div>
        </div>
        <div class="row flex-end">
            <div class="col s10 m12 l9">
                <?php new Image(
                	null,
                	'bikewear-image',
                	'/content/resources/media/oetztalCd/15_Merchandise/02_OETZT_Bag_Branding.jpg',
                	'Ötztal Bag',
                	true
                ); ?>
            </div>
        </div>
    </section>

    <section class="project-section section-17">
    <div class="image-wrapper">
        <?php new Image(
        	null,
        	'trenner',
        	'/content/resources/media/oetztalCd/16_OETZT_Events/01_OETZT_Trailrunn_Poster_Mockup_1.jpg',
        	'Ötztal Trailrunning',
        	true
        ); ?>
         <?php new Image(
         	null,
         	'headline',
         	'/content/resources/media/oetztalCd/16_OETZT_Events/oetzt_trailrunning-events_headline.svg',
         	'Ötztal Trailrunning Headline',
         	true
         ); ?>

    <div class="section-name">Events</div>

    </div>
        <div class="row image-text-row">
            <div class="col s16 m9 l8 xl6 push-m6 push-xl9">
            <div class="meta-headline col-light-red">Trailrunning</div>
                <p class="is-text desktop-only">
Am Beispiel der Trailrunning Events wird das visuelle Prinzip für Veranstaltungen innerhalb der Marke Ötztal sichtbar. Typografie, Raster und Bildsprache bilden ein flexibles Eventsystem, in dem die veränderte Laufweite der Schrift den Claim „Ötztal. Bewegt dich.“ typografisch interpretiert.                </p>
                <p class="is-text mobile-only">
                Am Beispiel der Trailrunning Events wird das visuelle Prinzip für Veranstaltungen innerhalb der Marke Ötztal sichtbar. Die veränderte Laufweite der Schrift interpretiert den Claim „Ötztal. Bewegt dich.“ typografisch.            </div>
        </div>
        <div class="row image-text-row">
            <div class="col s16 m10">
            <?php new Image(
            	null,
            	'swipe',
            	'/content/resources/media/oetztalCd/16_OETZT_Events/02_OETZT_Events_Swipe.png',
            	'Ötztal Trailrunning Swipe',
            	true
            ); ?>
            </div>
            <div class="col s16 m14 push-m1 video-wrapper">
                <div class="video-play-wrapper">
                    <?php new Video(
                    	'video',
                    	'/content/resources/media/oetztalCd/16_OETZT_Events/03_Trailrunning_Trailer/OETZ_Trailrunning_Trailer_16zu9_RZ.mp4',
                    	'16/9',
                    	'/content/resources/media/oetztalCd/16_OETZT_Events/03_Trailrunning_Trailer/OETZ_Trailrunning_Trailer_Web.png',
                    	'Ötztal Trailrunning Trailer',
                    	true,
                    	true,
                    	true,
                    	true,
                    	false,
                    	'/content/resources/media/oetztalCd/16_OETZT_Events/03_Trailrunning_Trailer/OETZ_Trailrunning_Trailer_1zu1_RZ.mp4',
                    	'1/1',
                    	'/content/resources/media/oetztalCd/16_OETZT_Events/03_Trailrunning_Trailer/OETZ_Trailrunning_Trailer_Mobile.png',
                    	true
                    ); ?>
                    <button type="button" class="video-play-button" aria-label="Video abspielen">
                        <svg class="play-icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="project-section section-18 bg-col-dark-red">
        <?php new Image(
        	null,
        	'shirts',
        	'/content/resources/media/oetztalCd/16_OETZT_Events/04_OETZ_Trailrunning_Events_Teilnehmershirts_1.png',
        	'Trailrunning Events Teilnehmershirts',
        	true
        ); ?>
         <?php new Image(
         	null,
         	'höhenlinien',
         	'/content/resources/media/oetztalCd/00_Background-Grafiken/oetzt_bg-grafiken_-05.svg',
         	'Höhenlinien',
         	true
         ); ?>
        <div class="row has-padding-lr">
            <div class="col s16 m8 push-m8">
                <div class="buttons">
                    <?php new Button(
                    	null,
                    	'project-button',
                    	'Ötztal Corporate Font',
                    	'/projekte/oetztal/font'
                    ); ?>
                    <?php new Button(
                    	null,
                    	'project-button',
                    	'Ötztal Kids',
                    	'/projekte/oetztal-kids'
                    ); ?>
                </div>
            </div>
        </div>

    </section>
    <section class="project-section section-19">
    <?php new Image(
    	null,
    	'trenner',
    	'/content/resources/media/oetztalCd/17_Trennerbild_03.jpg',
    	'Trailrunning Events Teilnehmershirts',
    	true
    ); ?>
    </section>
</div>
