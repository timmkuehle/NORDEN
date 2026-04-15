<?php
$seoTitle = 'Alpbachtal Destination Branding & Corporate Design | NORDEN';
$seoDescription =
	'Corporate Design für Alpbachtal in Tirol: Destination Branding und visueller Markenauftritt für eine Ferienregion mit 10 Orten, Tradition und Moderne.';

if (isset($NORDEN_TEMPLATE_META_ONLY) && $NORDEN_TEMPLATE_META_ONLY) {
	$NORDEN_TEMPLATE_META = [
		'title' => $seoTitle,
		'description' => $seoDescription
	];
	return;
}
?>

<section id="intro-video-section" class="project-section full-width-new no-padding-top">
    <div class="slot start"></div>
    <div class="content">
        <?php new Video(
        	'emf-header-video',
        	'/content/resources/media/alpbachtal/ALPB_WebsiteHeader_16zu9.mp4',
        	'16/9',
        	'/content/resources/media/alpbachtal/ALPACH_Logoaniamtion_16zu9_Still.jpg',
        	'Alpbachtal Intro Video',
        	true,
        	true,
        	true,
        	true,
        	false,
        	'/content/resources/media/alpbachtal/ALPB_WebsiteHeader_1zu1.mp4',
        	'1/1',
        	'/content/resources/media/alpbachtal/ALPACH_Logoaniamtion_1zu1_Still.jpg'
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section id="intro-text-section" class="project-section">
    <div class="slot start"></div>
    <div class="content" style="align-items: flex-end;">
        <div class="column" style="width: 60%">
            <h1>Alpbachtal — Corporate Design</h1>
            <p class="text-large mobile-only">Das Corporate Design für Alpbachtal übersetzt die Eigenständigkeit der Region in einen zeitgemäßen Markenauftritt.</p>
            <p class="text-large desktop-only">Tradition und Moderne, Fels und Hügellandschaft: Das neue Corporate Design für Alpbachtal übersetzt die Eigenständigkeit der Region in einen zeitgemäßen Markenauftritt.</p>
        </div>
    </div>
    
    <div class="slot end"></div>
</section>
<section class="project-section">
<div class="slot start"></div>
<div class="content">
<?php new AnimatedBanner(
	null,
	'animated-banner',
	[
		'Corporate Design',
		'Branding & Implementierung',
		'Online & Offline Kommunikationskonzept',
		'Motion Design',
		'Social Media',
		'Identity Workshops'
	],
	'col-beige',
	'col-beige'
); ?>
</div>
<div class="slot end"></div>
</section>
<section class="services">

</section>
<section id="logo-text-section" class="project-section no-padding-bottom" style="align-items: flex-end;">
    <div class="slot start">
        <p class="side-note">Entstehungsprozess</p>
    </div>
    <div class="content">
        <div class="column">
            <h2 class="desktop-only">Entstehungsprozess und Logo-Entwicklung</h2>
            <h2 class="mobile-only">Logo-Entwicklung</h2>
            <p class="text-large desktop-only">Historische Schriftzüge der Region dienten als gestalterischer Ausgangspunkt. So entstand ein Erscheinungsbild, das regional verankert ist und zugleich zeitgemäß wirkt.</p>
            <p class="text-large mobile-only">Historische Schriftzüge der Region gaben den gestalterischen Ausgangspunkt für das neue Erscheinungsbild.</p>
        </div>
        <div class="column">
            <?php new Image(
            	null,
            	null,
            	'/content/resources/media/alpbachtal/ALPBA_Schilder_Typo.jpg',
            	'Logo-Entwicklung Schilder',
            	true
            ); ?>
        </div>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section no-padding-top no-padding-bottom full-width-new" style="position: relative; transform: translateY(6vw); z-index: -1" aria-hidden="true">
    <div class="slot start"></div>
    <div class="content no-inline-padding-mobile" style="transform: rotate(180deg);">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/alpbachtal/ALPBA_Gestaltungselement_Overlay_beige4.svg',
        	'Gestaltungselement',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section bg-col-light-beige no-padding-top" style="align-items: center;">
    <div class="slot start">
        <p class="side-note">Logo Design</p>
    </div>
    <div class="content">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/alpbachtal/ALPBA_LogoHerleitung_desktop.svg',
        	'Logo-Entwicklung',
        	true,
        	'/content/resources/media/alpbachtal/ALPBA_LogoHerleitung_mobile.svg'
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section no-padding-top large-padding-bottom bg-col-light-beige">
    <div class="slot start"></div>
    <div class="content" style="align-items: flex-start;">
        <div class="column">
            <p class="desktop-only">Alp, Bach, Tal: Schon der Name trägt die Vielschichtigkeit der Region in sich. Daraus entstand ein Corporate Design, das Klarheit schafft und über alle Anwendungen hinweg funktioniert.</p>
            <p class="mobile-only">Alp, Bach, Tal: Der Name selbst wurde zur Grundlage für ein Corporate Design mit Klarheit und Wiedererkennung. Die getrennte Schreibweise stärkt die einzelnen Bestandteile, aus der Punze des „a“ entsteht die prägnante Bildmarke.</p>
        </div>
        <div class="column desktop-only">
            <p>Die getrennte Schreibweise macht die Bestandteile des Namens sichtbar und schafft eine prägnante Wortmarke. Aus der Punze des „a“ entsteht eine Bildmarke mit klarer Wiedererkennbarkeit.</p>
        </div>
    </div>
    <div class="slot end"></div>
</section>
<section id="places-section" class="project-section small-padding bg-col-light-beige">
    <div class="slot start">
        <p class="side-note">Ortsbezeichnungen</p>
    </div>
    <div class="content" style="align-items: flex-start;">
        <div class="column" style="display: flex; flex-direction: column; height: 100%; justify-content: space-between;">
            <?php new Image(
            	null,
            	null,
            	'/content/resources/media/alpbachtal/ALPBA_Logo_Kramsach.svg',
            	'Alpbachtal Kramsach',
            	true
            ); ?>
            <p style="margin-top: 2rem;">Selbst wenn die vielen Ortschaften der Region für sich stehen, die Kombination aus Ortsname und Markenlogo signalisiert stets die Zusammengehörigkeit der Region.</p>
        </div>
        <div class="column desktop-only">
            <?php new Image(
            	'places-logos',
            	null,
            	'/content/resources/media/alpbachtal/ALPBA_Logo_Ortsbezeichnungen.svg',
            	'Alpbachtal Ortslogos',
            	true
            ); ?>
        </div>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section no-padding-top no-padding-bottom full-width-new" style="align-items: flex-start; position: relative; z-index: 50; height: 0;" aria-hidden="true">
    <div class="slot start"></div>
    <div class="content no-inline-padding-mobile">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/alpbachtal/ALPBA_Gestaltungselement_Overlay_beige4.svg',
        	'Gestaltungselement',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section no-padding-top full-width-new">
    <div class="slot start"></div>
    <div class="content no-inline-padding-mobile">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/alpbachtal/shutterstock_1679802922_extended.jpg',
        	'Trennerbild',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section no-padding-bottom">
    <div class="slot start"></div>
    <div class="content" style="align-items: flex-start;">
        <h2>Farbwelt</h2>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section small-padding" style="align-items: flex-end;">
    <div class="slot start">
        <p class="side-note">Farben</p>
    </div>
    <div class="content">
        <div class="column">
            <?php new Image(
            	null,
            	null,
            	'/content/resources/media/alpbachtal/ALPBA_Farbwelt_Beige.png',
            	'Alpbachtal Beige',
            	true
            ); ?>
        </div>
        <div class="column" style="align-self: flex-start;">
            <p class="desktop-only">Die Farben greifen Landschaft und Materialität der Region auf. Ein warmer Holzton bildet die Basis, ergänzt durch bildbezogene Akzentfarben.</p>
            <p class="mobile-only">Die Farben greifen Landschaft und Materialität der Region auf – mit warmem Holzton und bildbezogenen Akzenten.</p>
        </div>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section small-padding" style="align-items: flex-end;">
    <div class="slot start"></div>
    <div class="content">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/alpbachtal/ALPBA_Gesamt_Farbwelt_Web.png',
        	'Alpbachtal Farben',
        	true,
        	'/content/resources/media/alpbachtal/ALPBA_Gesamt_Farbwelt_Mobile.png'
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section no-padding-top no-padding-bottom full-width-new" style="position: relative; transform: translateY(6vw); z-index: -1" aria-hidden="true">
    <div class="slot start"></div>
    <div class="content no-inline-padding-mobile" style="transform: rotate(180deg);">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/alpbachtal/ALPBA_Gestaltungselement_Overlay_beige3.svg',
        	'Gestaltungselement',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section bg-col-mid-beige" style="align-items: flex-end;">
    <div class="slot start"></div>
    <div class="content">
        <div class="column">
            <h2>Typografie</h2>
        </div>
        <div class="column">
            <p class="desktop-only">Die Typografie verbindet Tradition mit Moderne: 
            eine charaktervolle Serifenschrift trifft auf eine klare, zeitgemäße Ergänzung.</p>
        <p class="mobile-only">Eine charaktervolle Serifenschrift trifft auf eine klare, zeitgemäße Ergänzung.</p>
        </div>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section bg-col-mid-beige" style="align-items: center;">
    <div class="slot start">
        <p class="side-note">Typografie</p>
    </div>
    <div class="content">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/alpbachtal/ALPBA_Hausschrift_Desktop.svg',
        	'Alpbachtal Hausschrift',
        	true,
        	'/content/resources/media/alpbachtal/ALPBA_Hausschrift_Mobile1.svg'
        ); ?>
        <?php new Image(
        	null,
        	'mobile-only',
        	'/content/resources/media/alpbachtal/ALPBA_Hausschrift_Mobile2.svg',
        	'Alpbachtal Hausschrift 2',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section no-padding-top no-padding-bottom full-width-new bg-col-light-beige" style="align-items: flex-start; position: relative; z-index: 50;" aria-hidden="true">
    <div class="slot start"></div>
    <div class="content no-inline-padding-mobile">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/alpbachtal/ALPBA_Gestaltungselement_Overlay_beige3.svg',
        	'Gestaltungselement',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section no-padding-top small-padding full-width-new">
    <div class="slot start"></div>
    <div class="content no-inline-padding-mobile">
        <?php new Video(
        	'emf-header-video',
        	'/content/resources/media/alpbachtal/ALPBA_Gestaltungsprinzip_Anima.mp4',
        	'16/9',
        	'/content/resources/media/alpbachtal/ALPBA_Gestaltungsprinzip_Anima_Still.jpg',
        	'Alpbachtal Gestaltungselement',
        	true,
        	true,
        	true,
        	true,
        	false
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section id="design-principle-section" class="project-section" style="align-items: flex-start;">
    <div class="slot start">
        <p class="side-note">Gestaltungsprinzip</p>
    </div>
    <div class="content">
        <p class="desktop-only">Aus der Bildmarke entsteht ein flexibles Gestaltungsprinzip. Durch Skalierung und Überlagerung bildet sie die Grundlage für Flächen, Bildausschnitte und typografische Anwendungen.</p>
        <p class="mobile-only">us der Bildmarke entsteht ein flexibles System für Flächen, Bilder und Typografie.</p>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section no-padding-top no-padding-bottom">
    <div class="slot start"></div>
    <div class="content">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/alpbachtal/ALPBA_Gestaltungsprinzip.jpg',
        	'Gestaltungsprinzip',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section small-padding">
    <div class="slot start"></div>
    <div class="content">
        <div class="column">
        <p class="desktop-only">Subtraktives Prinzip: Die Bildmarke wird in 
        weiß zweifach über das Bild gelegt. Diese Gestaltungsform „stanzt” somit das Bild aus.</p>
        <p class="mobile-only">Subtraktives Prinzip: Die Bildmarke rahmt Motive und schafft prägnante Bildausschnitte.</p>
        </div>
        <div class="column">
        <p class="desktop-only">Additives Prinzip: Die Bildmarke wird zweifach mit einem Bildmotiv gefüllt und auf einem weißen Hintergrund platziert.</p>
        <p class="mobile-only">Additives Prinzip: Die Bildmarke wird zum bildtragenden Element für flexible Anwendungen.</p>
        </div>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section">
    <div class="slot start">
        <p class="side-note">Animationen</p>
    </div>
    <div class="content">
        <?php new Video(
        	'emf-header-video',
        	'/content/resources/media/alpbachtal/ALPACH_Logoaniamtion_16zu9.mp4',
        	'16/9',
        	'/content/resources/media/alpbachtal/ALPACH_Logoaniamtion_16zu9.jpg',
        	'Alpbachtal Animationen',
        	true,
        	true,
        	true,
        	true,
        	false,
        	'/content/resources/media/alpbachtal/ALPACH_Logoaniamtion_1zu1.mp4',
        	'1/1',
        	'/content/resources/media/alpbachtal/ALPACH_Logoaniamtion_1zu1.jpg'
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section small-padding no-padding-bottom">
    <div class="slot start">
        <p class="side-note">Website und Social Media</p>
    </div>
    <div class="content narrow">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/alpbachtal/ALPBA_Website_Social Media.png',
        	'Alpbachtal Website',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section no-padding-top no-padding-bottom full-width-new bg-col-light-beige" style="align-items: flex-start; position: relative; z-index: 50; height: 0;" aria-hidden="true">
    <div class="slot start"></div>
    <div class="content no-inline-padding-mobile">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/alpbachtal/ALPBA_Gestaltungselement_Overlay_weiss.svg',
        	'Gestaltungselement',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section full-width-new bg-col-deep-beige">
    <div class="slot start"></div>
    <div class="content">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/alpbachtal/ALPBA_Hand_HoldingiPhone.jpg',
        	'Alpbachtal Social Media',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section bg-col-deep-beige ">
    <div class="slot start">
        <p class="side-note">Print</p>
    </div>
    <div class="content narrow">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/alpbachtal/ALPBA_Alpbachtal_Intern.jpg',
        	'Alpbachtal Intern',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section full-width-new bg-col-deep-beige">
    <div class="slot start"></div>
    <div class="content">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/alpbachtal/ALPBA_MagazinAd-Mockup_colorcorrected.jpg',
        	'Alpbachtal Magazin',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section bg-col-deep-beige">
    <div class="slot start">
        <p class="side-note">Geschäftsausstattung</p>
    </div>
    <div class="content narrow">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/alpbachtal/ALPBA_Geschaeftsausstattung.png',
        	'Alpbachtal Intern',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>

<section id="poster-section" class="project-section bg-col-deep-beige">
    <div class="slot start">
        <p class="side-note">Retro Poster Designs</p>
    </div>
    <div class="content">
        <div class="image-slideshow">
			<div class="controls-container">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="button prev">
					<path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/>
				</svg>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="button next">
					<path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.2 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"/>
				</svg>
			</div>
			<div class="images-container">
                <?php new Image(
                	null,
                	null,
                	'/content/resources/media/alpbachtal/ALPBA_Plakat_1.jpg',
                	'Alpbachtal Plakat 1',
                	true
                ); ?>
                <?php new Image(
                	null,
                	null,
                	'/content/resources/media/alpbachtal/ALPBA_Plakat_2.jpg',
                	'Alpbachtal Plakat 2',
                	true
                ); ?>
                <?php new Image(
                	null,
                	null,
                	'/content/resources/media/alpbachtal/ALPBA_Plakat_3.jpg',
                	'Alpbachtal Plakat 3',
                	true
                ); ?>
                <?php new Image(
                	null,
                	null,
                	'/content/resources/media/alpbachtal/ALPBA_Plakat_4.jpg',
                	'Alpbachtal Plakat 4',
                	true
                ); ?>
                <?php new Image(
                	null,
                	null,
                	'/content/resources/media/alpbachtal/ALPBA_Plakat_5.jpg',
                	'Alpbachtal Plakat 5',
                	true
                ); ?>
                <?php new Image(
                	null,
                	null,
                	'/content/resources/media/alpbachtal/ALPBA_Plakat_6.jpg',
                	'Alpbachtal Plakat 6',
                	true
                ); ?>
			</div>
		</div>
    </div>
    <div class="slot end"></div>
</section>

<section class="project-section">
    <div class="slot start">
        <p class="side-note">Merch</p>
    </div>
    <div class="content narrow">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/alpbachtal/ALPBA_Gesamt_Merchandise.jpg',
        	'Alpbachtal Merch',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section id="outro-section" class="project-section full-width-new no-padding-bottom">
    <div class="slot start"></div>
    <div class="content no-inline-padding-mobile">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/alpbachtal/ALPBA_Maedchen_rz.jpg',
        	'Alpbachtal Outro',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>