<?php
$seoTitle = 'Seefeld Destination Branding & Corporate Design | NORDEN';
$seoDescription =
	'Corporate Design für Seefeld: Destination Branding und visueller Markenauftritt für die Region Seefeld – Tirols Hochplateau.';

if (isset($NORDEN_TEMPLATE_META_ONLY) && $NORDEN_TEMPLATE_META_ONLY) {
	$NORDEN_TEMPLATE_META = [
		'title' => $seoTitle,
		'description' => $seoDescription
	];
	return;
}
?>

<section id="logo-section" class="project-section no-padding-bottom" style="align-items: flex-end;">
    <div class="slot start">
        <p class="side-note">Logo</p>
    </div>
    <div class="content" style="flex-direction: column;">
        <?php new Svg(
        	'seefeld-logo',
        	null,
        	'/content/resources/media/seefeld/SFLD_Logo2022_4c_rz.svg',
        	'Seefeld Logo'
        ); ?>
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/seefeld/01_SFLD_Header.jpg',
        	'Seefeld Header',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section id="intro-text-section" class="project-section">
    <div class="slot start"></div>
    <div class="content">
        <div class="column" style="width: 100%;">
        <p class="desktop-only text-is-large">Seefeld liegt auf einem Hochplateau zwischen Wetterstein und Karwendel. Mit der Neupositionierung wurde diese geografische Besonderheit zum prägenden Merkmal der Marke – und in ein neues Logo sowie ein ganzheitliches Corporate Design übersetzt.</p>
        <p class="mobile-only text-is-large">Mit der Neupositionierung wurde das Hochplateau zum prägenden Merkmal der Marke Seefeld – übersetzt in Logo und Corporate Design.</p>
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
        'Markenstrategie',
		'Corporate Design',
		'Piktogrammfamilie',
		'Logo Redesign',
		'Social Media Toolbox',
	],
	'col-blue',
	'col-gold'
); ?>
</div>
<div class="slot end"></div>
</section>
<section id="logo-redesign-section" class="project-section" style="align-items: center;">
    <div class="slot start">
        <p class="side-note">Logoredesign</p>
    </div>
    <div class="content">
        <?php new Video(
        	null,
        	'/content/resources/media/seefeld/SFLD_Logoentwicklung_Animation.MP4',
        	'16/9',
        	'/content/resources/media/seefeld/SFLD_Logoentwicklung_Animation_Still.jpg',
        	'Seefeld Header',
        	true,
        	true,
        	true,
        	true,
        	false
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section bg-col-light-blue no-padding-bottom">
    <div class="slot start"></div>
    <div class="content">
        <div class="column" style="width: 30%;">
            <h2>Logo</h2>
            <p class="desktop-only">Im Zuge des Rebrandings wurde auch das Logo neu gedacht. Es ist klarer, zeitgemäßer und behält zugleich seinen eigenständigen Charakter. In Blau oder Weiß eingesetzt, transportiert es Frische, alpine Leichtigkeit und die enge Verbindung zur Region.</p>
            <p class="mobile-only">Das überarbeitete Logo ist klarer, moderner und bleibt zugleich eigenständig im Charakter.</p>
        </div>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section bg-col-light-blue" style="align-items: flex-end;">
    <div class="slot start">
        <p class="side-note">Ortsbezeichnungen</p>
    </div>
    <div class="content" style="align-items: flex-start;">
        <div class="column" style="width: 27%;">
            <?php new Video(
            	null,
            	'/content/resources/media/seefeld/SFLD_Video_Fahnen.mp4',
            	'9/16',
            	'/content/resources/media/seefeld/SFLD_Video_Fahnen_Still.jpg',
            	'Video Fahnen',
            	true,
            	true,
            	true,
            	true,
            	false
            ); ?>
        </div>
        <div class="column" style="width: 73%;">
            <?php new Image(
            	null,
            	null,
            	'/content/resources/media/seefeld/SFLD_Ortsbezeichnungen_Desktop.svg',
            	'Markenlogo und Ortsbezeichnungen',
            	true,
            	'content/resources/media/seefeld/SFLD_Ortsbezeichnungen_Mobile.svg'
            ); ?>
        </div>
        <div class="column mobile-only">
            <?php new Image(
            	null,
            	'mobile-only',
            	'/content/resources/media/seefeld/SFLD_Ortsbezeichnungen_Mobile_2.svg',
            	'Markenlogo und Ortsbezeichnungen - 2',
            	true
            ); ?>
        </div>
    </div>
    <div class="slot end"></div>
</section>
<section id="font-section" class="project-section">
    <div class="slot start">
        <p class="side-note">Hausschrift</p>
    </div>
    <div class="content">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/seefeld/SFLD_Hausschriften_Desktop.svg',
        	'Markenlogo und Ortsbezeichnungen',
        	true,
        	'/content/resources/media/seefeld/SFLD_Hausschriften_Mobile.svg'
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section">
    <div class="slot start">
        <p class="side-note">Farben</p>
    </div>
    <div class="content" style="align-items: flex-end; gap: 3vw;">
        <div class="column" style="width: 30%;">
        <p class="desktop-only">Die Farbwelt leitet sich aus der Natur rund um Seefeld ab. Kühle Blautöne treffen auf warme Ockerabstufungen und schaffen ein System, das Wiedererkennbarkeit, Flexibilität und regionale Verankerung verbindet.</p>
        <p class="mobile-only">Kühle Blautöne und warme Ockerabstufungen leiten sich direkt aus der Landschaft rund um Seefeld ab.</p>
        </div>
        <div class="column" style="width: 70%;">
            <?php new Image(
            	null,
            	null,
            	'/content/resources/media/seefeld/SFLD_Farbgebung.png',
            	'Markenlogo und Ortsbezeichnungen',
            	true,
            	'/content/resources/media/seefeld/SFLD_Farbgebung_Mobile.png'
            ); ?>
        </div>
    </div>
    <div class="slot end"></div>
</section>
<section id="hochplateau-section" class="project-section full-width-new">
    <div class="slot start"></div>
    <div class="content no-inline-padding-mobile">
        <?php new Svg(
        	null,
        	null,
        	'/content/resources/media/seefeld/SFLD_Hochplateau_Headline.svg',
        	'Hochplateau',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section bg-col-light-blue" style="align-items: flex-start;">
    <div class="slot start">
        <p class="side-note">Gestaltungsprinzip</p>
    </div>
    <div class="content" style="align-items: flex-start;">
        <div class="column" style="width: 30%;">
            <p>Das Gestaltungsprinzip der Verschiebung von Farbfläche und Bildelementen lässt ein “grafisches Hochplateau” entstehen, und greift so die geografische Besonderheit der Region Seefeld subtil auf.</p>
        </div>
        <div class="column" style="width: 70%;">
            <?php new Image(
            	null,
            	null,
            	'/content/resources/media/seefeld/SFLD_Gestaltungsprinzip.svg',
            	'Gestaltungsprinzip',
            	true
            ); ?>
        </div>
    </div>
    <div class="slot end"></div>
</section>
<section id="digital-section" class="project-section no-padding-bottom" style="align-items: flex-start;">
    <div class="slot start">
        <p class="side-note">Digital</p>
    </div>
    <div class="content" style="align-items: flex-start;">
        <?php new Image(
        	'seefeld-website',
        	null,
        	'/content/resources/media/seefeld/SFLD_Website.png',
        	'Seefeld Website',
        	true
        ); ?>
        <div id="digital-text">
            <h2>Web and Social Media</h2>
        </div>
        <?php new Image(
        	'seefeld-social-media',
        	null,
        	'/content/resources/media/seefeld/SFLD_SocialMedia.png',
        	'Seefeld Social Media',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section no-padding-bottom full-width-new trenner-section" style="position: relative;">
    <div class="content no-inline-padding-mobile">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/seefeld/09_SFLD_Trennerbild.jpg',
        	'Trennerbild',
        	true
        ); ?>
    </div>

    <div class="banner bg-col-gray-blue" aria-label="Tirols Hochplateau">
        <div class="banner-track" aria-hidden="true">
            <span class="banner-item">Tirols Hochplateau</span>
            <span class="banner-item">Tirols Hochplateau</span>
            <span class="banner-item">Tirols Hochplateau</span>
        </div>
        <div class="banner-track" aria-hidden="true">
            <span class="banner-item">Tirols Hochplateau</span>
            <span class="banner-item">Tirols Hochplateau</span>
            <span class="banner-item">Tirols Hochplateau</span>
        </div>
    </div>
</section>
<section class="project-section no-padding-top full-width-new">
    <div class="slot start"></div>
    <div class="content no-inline-padding-mobile">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/seefeld/10_SFLD_Hochplateau Trenner_Banner.gif',
        	'Seefeld Banner',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section id="flyer-section" class="project-section" style="align-items: center;">
    <div class="slot start">
        <p class="side-note">Print</p>
    </div>
    <div class="content">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/seefeld/SFLD_Print_Mockup.jpg',
        	'Seefeld Flyer',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section full-width-new" style="align-items: center;">
    <div class="slot start"></div>
    <div class="content no-inline-padding-mobile">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/seefeld/02_SFLD_Mockup_Broschuere_Magazin.png',
        	'Seefeld Print Mockups',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section">
    <div class="slot start"></div>
    <div class="content">
        <div class="column">
            <h2>Icons</h2>
            <p class="desktop-only">Die Piktogrammfamilie greift Formensprache und Farben des Corporate Designs auf. So entsteht ein konsistentes System, das Orientierung schafft und die visuelle Identität der Marke bis ins Detail weiterführt.</p>
            <p class="mobile-only">Die Piktogramme führen Formensprache und Farbwelt in einem konsistenten System weiter.</p>
        </div>
    </div>
    <div class="slot end"></div>
</section>
<section id="icons-section" class="project-section has-background-image small-padding large-padding-bottom" style="align-items: center;">
    <div class="slot start">
        <p class="side-note">Piktogramme</p>
    </div>
    <div class="content">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/seefeld/SFLD_icons_Website.svg',
        	'Seefeld Flyer',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
    <?php new Image(
    	null,
    	'background-image',
    	'/content/resources/media/seefeld/SFLD_icons_Website_Rodeln.svg',
    	'Seefeld Flyer',
    	true
    ); ?>
</section>
<section id="papers-section" class="project-section bg-col-light-blue">
    <div class="slot start"></div>
    <div class="content">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/seefeld/SFLD_Geschaeftsausstattung.png',
        	'Seefeld Geschäftsaustattung',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section id="branding-section-1" class="project-section" style="align-items: center;">
    <div class="slot start">
        <p class="side-note">Branding</p>
    </div>
    <div class="content">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/seefeld/13_SFLD_Branding_NordicCombinedTriple2023.jpg',
        	'Branding Nordische Kombination',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section id="branding-section-2" class="project-section no-padding-top" style="align-items: center;">
    <div class="slot start"></div>
    <div class="content" style="align-items: flex-start;">
        <div class="column">
            <?php new Image(
            	null,
            	null,
            	'/content/resources/media/seefeld/13_SFLD_Branding_Running.jpg',
            	'Branding Running',
            	true
            ); ?>
            <h2>Logo <br> in use</h2>
        </div>
        <div class="column">
            <?php new Image(
            	null,
            	null,
            	'/content/resources/media/seefeld/13_SFLD_Branding_WM_Halle.jpg',
            	'Branding WM-Halle',
            	true
            ); ?>
        </div>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section full-width-new">
    <div class="slot start"></div>
    <div class="content no-inline-padding-mobile">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/seefeld/14_SFLD_Merchandising_gesamt.jpg',
        	'Seefeld Flyer',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>