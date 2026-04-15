<?php
$seoTitle = 'Gurgl Destination Branding & Corporate Design | NORDEN';
$seoDescription =
	'Corporate Design für Gurgl im Ötztal: Destination Branding und visueller Markenauftritt für die Premium-Destination „Diamond of the Alps“.';

if (isset($NORDEN_TEMPLATE_META_ONLY) && $NORDEN_TEMPLATE_META_ONLY) {
	$NORDEN_TEMPLATE_META = [
		'title' => $seoTitle,
		'description' => $seoDescription
	];
	return;
}
?>

<div id="intro-bg-image-container" class="bg-image-container">
<section id="logo-section" class="project-section bg-col-anthrazit small-padding">
    <div class="slot start"></div>
    <div class="content">
        <h1>
            <?php new Svg(
            	null,
            	null,
            	'/content/resources/media/gurgl/00_Gurgl_Logo.svg',
            	'GURGL - Diamond of the Alps'
            ); ?>
        </h1>
    </div>
    <div class="slot end"></div>
</section>
<section id="intro-video-section" class="project-section bg-col-anthrazit small-padding no-padding-top" style="align-items: flex-end;">
    <div class="slot start">
        <p class="side-note">Brandclip</p>
    </div>
    <div class="content">
        <?php new Video(
        	null,
        	'/content/resources/media/gurgl/Gurgl_Brandclip_Web.mp4',
        	'16/9',
        	'/content/resources/media/gurgl/Gurgl_Brandclip_Web_Still.jpg',
        	'Gurgl Intro-Video',
        	true,
        	true,
        	true,
        	true,
        	false,
        	'/content/resources/media/gurgl/Gurgl_Brandclip_Mobile.mp4',
        	'1/1',
        	'/content/resources/media/gurgl/Gurgl_Brandclip_Mobile_Still.jpg'
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<?php new Image(
	null,
	'bg-image',
	'/content/resources/media/gurgl/Gurgl_Brandclip_Diamant.svg',
	'Gestaltungselement'
); ?>
</div>
<section id="intro-text-section" class="project-section large-padding-bottom has-background-image">
    <div class="slot start"></div>
    <div class="content">
        <div class="column" style="width: 80%;">
            <p class="text-is-large desktop-only">Gurgl – Diamond of the Alps. Die <span class="highlight-circle">Premium</span>-Destination steht für alpinen Urlaub auf höchstem Niveau. Der Markenauftritt übersetzt diesen Anspruch in eine klare, elegante und eigenständige Identität.</p>
            <p class="text-is-large mobile-only">Gurgl – Diamond of the Alps. Der Markenauftritt übersetzt den <span class="highlight-circle">Premium-</span>Anspruch der Destination in eine klare, elegante Identität.</p>
        </div>
    </div>
    <div class="slot end"></div>
    <?php new Image(
    	null,
    	'background-image',
    	'/content/resources/media/gurgl/Gurgl_Hintergrundelement_hell.svg',
    	'Gestaltungselement',
    	true
    ); ?>
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
		'Branding & Implementierung',
		'Online & Offline Kommunikationskonzept',
		'Brandclip',
		'Animationen',
		'Social Media',
	],
	'col-gray-5',
	'col-blue'
); ?>
</div>
<div class="slot end"></div>
</section>
<section id="claim-section" class="project-section bg-col-gray-5 has-background-image">
    <div class="slot start">
        <p class="side-note">Claim</p>
    </div>
    <div class="content">
        <?php new Video(
        	null,
        	'/content/resources/media/gurgl/Gurgl_Claim.mp4',
        	'16/9',
        	'/content/resources/media/gurgl/Gurgl_Claim_Still.jpg',
        	'Gurgl Intro-Video',
        	true,
        	true,
        	true,
        	true,
        	false
        ); ?>
    </div>
    <div class="slot end"></div>
    <?php new Image(
    	null,
    	'background-image',
    	'/content/resources/media/gurgl/Gurgl_Claim_Diamant.svg',
    	'Gestaltungselement'
    ); ?>
</section>
<section id="design-element-section" class="project-section bg-col-gray-5" style="align-items: center;">
    <div class="slot start">
        <p class="side-note">Gestaltungselement</p>
    </div>
    <div class="content" style="align-items: stretch;">
        <div class="column" style="display: flex; flex-direction: column; justify-content: space-between;">
            <div class="text">
                <h2 class="col-white">Gestaltungselement</h2>
                <p class="col-white desktop-only">Der Diamant verdichtet Claim und Markenwerte zu einem prägnanten Gestaltungselement. In variablen Ausschnitten und Verläufen bleibt er subtil präsent und macht die Marke über alle Anwendungen hinweg wiedererkennbar.</p>
                <p class="col-white mobile-only">Der Diamant verdichtet Claim und Markenwerte zu einem prägnanten Gestaltungselement. So bleibt die Marke über alle Anwendungen hinweg subtil präsent und wiedererkennbar.</p>
            </div>
            <?php new Image(
            	null,
            	null,
            	'/content/resources/media/gurgl/GURGL_Gestaltungselement_Ausschnitt.png',
            	'Gestaltungselement',
            	true
            ); ?>
        </div>
        <div class="column">
            <?php new Image(
            	null,
            	null,
            	'/content/resources/media/gurgl/GURGL_Gestaltungselement_1.png',
            	'Gestaltungselement',
            	true
            ); ?>
        </div>
    </div>
    <div class="slot end"></div>
</section>
<section id="logo-animation-section" class="project-section bg-col-gray-5 has-background-image">
    <div class="slot start">
        <p class="side-note">Logo Animation</p>
    </div>
    <div class="content">
        <?php new Video(
        	null,
        	'/content/resources/media/gurgl/Gurgl_Logoanimation_Web.mp4',
        	'16/9',
        	'/content/resources/media/gurgl/Gurgl_Logoanimation_Still_Web.jpg',
        	'Gurgl Intro-Video',
        	true,
        	true,
        	true,
        	true,
        	false,
        	'/content/resources/media/gurgl/Gurgl_Logoanimation_Mobile.mp4',
        	'1/1',
        	'/content/resources/media/gurgl/Gurgl_Logoanimation_Still_Mobile.jpg'
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section id="mood-image-section">
    <div class="content">
        <?php new Image(
        	null,
        	'background-image desktop-only',
        	'/content/resources/media/gurgl/04_Trennerbild.jpg',
        	'Trennerbild',
        	true
        ); ?> 
    </div>
</section>
<section id="font-development-section" class="project-section">
    <div class="slot start"></div>
    <div class="content">
        <div class="column">
            <h2>Adelle Sans Gurgl Headline</h2>
            <h3 class="col-white">Customized Headline Font:</h3>
            <p class="col-white desktop-only">Neben dem Diamanten wurde eine eigens entwickelte Headline-Schrift zum weiteren Key Brand Identifier. Sie leitet sich aus der Hausschrift ab und übersetzt Präzision, Eleganz und alpine Schärfe in ein eigenständiges typografisches Zeichen.</p>
            <p class="col-white mobile-only">Die eigens entwickelte Headline-Schrift ergänzt den Diamanten als Key Brand Identifier und verleiht der Marke Präzision, Eleganz und Eigenständigkeit.</p>
            <p class="col-white">— Font creation in cooperation with <span class="col-blue">TypeTogether</span></p>
            <?php new Button(
            	null,
            	null,
            	'Mehr zur Typografie',
            	'/gurgl-corporate-font'
            ); ?>
        </div>
        <div class="column">
            <?php new Image(
            	null,
            	null,
            	'/content/resources/media/gurgl/GURGL_Typo_Detail.svg'
            ); ?>
        </div>
    </div>
    <div class="slot end"></div>
</section>

<section id="claim-headline-section" class="project-section has-background-image bg-col-gray-5">
    <div class="slot start"></div>
    <div class="content">
        <?php new Svg(
        	null,
        	null,
        	'/content/resources/media/gurgl/GURGL_Claim_headline.svg',
        	'Gurgl. Diamond of the Alps'
        ); ?>
    </div>
    <div class="slot end"></div>
    <?php new Image(
    	null,
    	'background-image',
    	'/content/resources/media/gurgl/Gurgl_Hintergrundelement_hell.svg',
    	'Gestaltungselement'
    ); ?>
</section>
<section id="colors-section" class="project-section has-background-image" style="align-items: center;">
    <div class="slot start">
        <p class="side-note">Colors</p>
    </div>
    <div class="content" style="align-items: flex-start;">
        <div class="column">
            <h2 class="col-white">Corporate Colors</h2>
            <h3 class="col-gray-1">Primary Colors:</h3>
            <p class="col-white desktop-only">Ein feiner Grauton bildet die elegante Basis des Corporate Designs. Abstufungen sorgen für Flexibilität, der markante Blauton setzt gezielte Akzente und schafft hohen, modernen Kontrast.</p>
            <p class="col-white mobile-only">Ein feiner Grauton bildet die elegante Basis, ein markanter Blauton setzt moderne Akzente.</p>
            <!-- <h3 class="col-gray-1">Secondary Colors:</h3>
            <p class="col-white">Ausghend von der Primärfarbe wurden weitere Abstufungen 
            definiert, um maximale Flexibilität in allen Anwendungen zu gewährleisten.</p>
            <h3 class="col-gray-1">Tertiary Colors:</h3>
            <p class="col-white">Der knallige Blauton wird bei Hervorhebungen, sowie Call-To-Action Anwendugen  eingesetzt und garantiert  größstmöglichen Kontrast und Aufmerksamkeit.</p> -->
        </div>
        <div class="column">
            <?php new Svg(
            	null,
            	null,
            	'/content/resources/media/gurgl/GURGL_Farben.svg',
            	'GURGL Farben'
            ); ?>
        </div>
    </div>
    <div class="slot end"></div>
    <?php new Image(
    	null,
    	'background-image',
    	'/content/resources/media/gurgl/Gurgl_Brandclip_Diamant.svg',
    	'Gestaltungselement'
    ); ?>
</section>
<section id="animation-section" class="project-section large-padding-bottom" style="align-items: flex-end;">
    <div class="slot start">
        <p class="side-note">Sommerkampagne</p>
    </div>
    <div class="content" style="flex-direction: column; align-items: flex-start">
        <h2 class="col-white">Overlay Animationen</h2>
        <?php new Video(
        	null,
        	'/content/resources/media/gurgl/Gurgl_Sommerkampagne_Web.mp4',
        	'16/9',
        	'/content/resources/media/gurgl/Gurgl_Sommerkampagne_Web_Still.jpg',
        	'Gurgl Intro-Video',
        	true,
        	true,
        	true,
        	true,
        	false,
        	'/content/resources/media/gurgl/Gurgl_Sommerkampagne_Mobile.mp4',
        	'1/1',
        	'/content/resources/media/gurgl/Gurgl_Sommerkampagne_Mobile_Still.jpg'
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section id="some-section" class="project-section has-background-image" style="align-items: center;">
    <div class="slot start">
        <p class="side-note">Digital</p>
    </div>
    <div class="content" style="align-items: flex-start;">
        <div class="column" style="width: 65%">
            <h2 class="col-white">Social Media Toolbox</h2>
            <p class="col-white desktop-only">Für einen konsistenten digitalen Auftritt wurde ein flexibles Rastersystem entwickelt. Es schafft Ordnung, Wiedererkennbarkeit und lässt sich auf unterschiedliche Formate übertragen.</p>
            <p class="col-white mobile-only">Ein flexibles Rastersystem sorgt für einen konsistenten digitalen Auftritt über alle Formate hinweg.</p>
            <?php new Image(
            	null,
            	null,
            	'/content/resources/media/gurgl/GURGL_Digital_Story.png',
            	'GURGL Social Media Story',
            	true
            ); ?>
        </div>
        <div class="column">
            <?php new Image(
            	null,
            	null,
            	'/content/resources/media/gurgl/GURGL_Digital_Feed.png',
            	'GURGL Social Media Feed',
            	true
            ); ?>
        </div>
    </div>
    <div class="slot end"></div>
    <?php new Image(
    	null,
    	'background-image',
    	'/content/resources/media/gurgl/Gurgl_Claim_Diamant.svg',
    	'Gestaltungselement'
    ); ?>
</section>
<section id="website-section" class="project-section">
    <div class="slot start"></div>
    <div class="content">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/gurgl/GURGL_Digital_Website.png',
        	'Gurgl Website',
        	false
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section id="magazine-section" class="project-section overhang-right has-background-image bg-col-gray-5 large-padding-bottom" style="align-items: flex-end;">
    <div class="slot start">
        <p class="side-note">Print</p>
    </div>
    <div class="content">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/gurgl/GURGL_Print_Winterfolder.png',
        	'Gurgl Website',
        	false
        ); ?>
    </div>
    <div class="slot end"></div>
    <?php new Image(
    	null,
    	'background-image',
    	'/content/resources/media/gurgl/Gurgl_Hintergrundelement_hell.svg',
    	'Gestaltungselement',
    	true
    ); ?>
</section>
<section id="standup-section" class="project-section overhang-right bg-col-gray-5">
    <div class="slot start"></div>
    <div class="content">
        <div class="column">
            <h2 class="col-white">
                <?php new Svg(
                	null,
                	null,
                	'/content/resources/media/gurgl/GURGL_AlpineAuszeit_Headline.svg',
                	'Alpine Artzeit'
                ); ?>
            </h2>
            <p class="col-white desktop-only">Die Alpine Artzeit verbindet alpine Kulisse mit zeitgenössischer Kunst. Der Auftritt übersetzt dieses Spannungsfeld in eine Gestaltung, die Ruhe, Anspruch und kulturelle Eigenständigkeit vermittelt.</p>
                <p class="col-white mobile-only">Die Alpine Artzeit verbindet alpine Kulisse mit zeitgenössischer Kunst – in einer Gestaltung, die Ruhe, Anspruch und Eigenständigkeit vermittelt</p>
        </div>
        <div class="column">
            <?php new Image(
            	null,
            	null,
            	'/content/resources/media/gurgl/GURGL_Print_AlpineArtzeit_Aufsteller_1.jpg',
            	'Gurgl Aufsteller Alpine Auszeit',
            	false
            ); ?>
        </div>
    </div>
    <div class="slot end"></div>
</section>
<section id="folder-section" class="project-section small-padding large-padding-bottom bg-col-gray-5 has-background-image">
    <div class="slot start"></div>
    <div class="content narrow">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/gurgl/GURGL_Print_AlpineArtzeit_Folder_1.png',
        	'Gurgl Aufsteller Alpine Auszeit',
        	false
        ); ?>
    </div>
    <div class="slot end"></div>
    <?php new Image(
    	null,
    	'background-image',
    	'/content/resources/media/gurgl/Gurgl_Hintergrundelement_hell.svg',
    	'Gestaltungselement',
    	true
    ); ?>
</section>
<section id="worldcup-text-section" class="project-section">
    <div class="slot start"></div>
    <div class="content narrow" style="align-items: flex-end;">
        <div class="column">
            <h2>
                <?php new Svg(
                	null,
                	null,
                	'/content/resources/media/gurgl/GURGL_Skiweltcup_Headline.svg',
                	'Ski Weltcup'
                ); ?>
            </h2>
        </div>
        <div class="column">
            <p class="col-white desktop-only">Für den Skiweltcup in Gurgl entstand ein plattformübergreifender Auftritt, der sportliche Präzision und internationale Sichtbarkeit verbindet. So wird das Event klar als Teil der Markenwelt von Gurgl erkennbar.</p>
            <p class="col-white mobile-only">Für den Skiweltcup in Gurgl entstand ein plattformübergreifender Auftritt mit sportlicher Präzision und klarer Markenzugehörigkeit</p>
        </div>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section">
    <div class="slot start"></div>
    <div class="content narrow" style="display: flex; flex-direction: row; align-items: flex-start;">
        <div class="column" style="width: 36%;">
            <?php new Video(
            	null,
            	'/content/resources/media/gurgl/Skiweltcup_Animiert.mp4',
            	'9/16',
            	'/content/resources/media/gurgl/Skiweltcup_Animiert_Still.png',
            	'Ski-Weltcup-Animation',
            	true,
            	true,
            	true,
            	true,
            	false
            ); ?>
        </div>
        <div class="column">
            <?php new Image(
            	null,
            	null,
            	'/content/resources/media/gurgl/GURGL_Skiweltcup_2023_DINA3_hoch_neue_Sponsoren_screen2_1.jpg',
            	'Ski-Weltcup Poster',
            	true
            ); ?>
        </div>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section small-padding">
    <div class="slot start"></div>
    <div class="content narrow">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/gurgl/GURGL_SWC_Citylight_1.jpg',
        	'Ski-Weltcup Citylight',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section class="project-section">
    <div class="slot start"></div>
    <div class="content narrow">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/gurgl/GURGL__SWC2023_Eventuebersicht_Mockup_1.jpg',
        	'Ski-Weltcup Event-Übersicht',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section id="alpine-auszeit-section" class="project-section has-background-image large-padding-top bg-col-gray-5">
    <div class="slot start"></div>
    <div class="content" style="align-items: flex-start;">
        <?php new Svg(
        	null,
        	null,
        	'/content/resources/media/gurgl/GURGL_AlpineAuszeit_Title.svg',
        	'Alpine Auszeit'
        ); ?>
    </div>
    <div class="slot end"></div>
    <?php new Image(
    	null,
    	'background-image',
    	'/content/resources/media/gurgl/Gurgl_Hintergrundelement_hell.svg',
    	'Gestaltungselement',
    	true
    ); ?>
</section>
<section id="aa-image-section" class="project-section bg-col-gray-5">
    <div class="slot start"></div>
    <div class="content narrow">
        <div class="column" style="width: 40%;">
            <p class="col-white desktop-only">Die Alpine Auszeit steht für Rückzug, Ruhe und Erholung in hochalpiner Umgebung. Der Auftritt macht diesen Anspruch sichtbar – reduziert, klar und mit einem Fokus auf exklusive Entschleunigung.</p>
            <p class="col-white mobile-only">Die Alpine Auszeit steht für Ruhe und Erholung in hochalpiner Umgebung. Der Auftritt ist reduziert, klar und auf exklusive Entschleunigung ausgerichtet.</p>
        </div>
        <div class="column">
            <?php new Image(
            	null,
            	null,
            	'/content/resources/media/gurgl/GURGL_AlpineAuszeit_PanoramaCloseup.png',
            	'Panorama / Close Up',
            	true
            ); ?>
        </div>
    </div>
    <div class="slot end"></div>
</section>
<section id="aa-folder-section" class="project-section bg-col-gray-5 small-padding no-padding-bottom">
    <div class="slot start"></div>
    <div class="content narrow">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/gurgl/GURGL_AlpineAuszeit_Folder_Desktop.png',
        	'Alpine Auszeit - Folder',
        	true,
        	'/content/resources/media/gurgl/GURGL_AlpineAuszeit_Folder_Mobile.png'
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section id="aa-outro-section" class="project-section bg-col-gray-5 no-padding-top no-padding-bottom full-width-new">
    <div class="slot start"></div>
    <div class="content no-inline-padding-mobile">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/gurgl/GURGL_AlpineAuszeit_HoechsterGenuss.png',
        	'Höchster Genuss',
        	true
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section id="aa-outro-section" class="project-section bg-col-gray-5 full-width-new">
    <div class="slot start"></div>
    <div class="content no-inline-padding-mobile">
        <?php new Image(
        	null,
        	null,
        	'/content/resources/media/gurgl/GURGL_Merchandise_Desktop.png',
        	'GURGL Merch',
        	true,
        	'/content/resources/media/gurgl/GURGL_Merchandise_Mobile.png'
        ); ?>
    </div>
    <div class="slot end"></div>
</section>