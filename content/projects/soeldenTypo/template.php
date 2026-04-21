<?php
$seoTitle = 'Sölden Font Design & Brand Typography | NORDEN';
$seoDescription =
	'Fontdesign für Sölden: Eine exklusive Headline-Schrift als Key Brand Identifier für mehr Wiedererkennung und typografische Eigenständigkeit.';

if (isset($NORDEN_TEMPLATE_META_ONLY) && $NORDEN_TEMPLATE_META_ONLY) {
	$NORDEN_TEMPLATE_META = [
		'title' => $seoTitle,
		'description' => $seoDescription
	];
	return;
}
?>

<section id="st-intro-section" class="project-section bg-col-cool-gray">
    <div class="slot start"></div>
    <div class="content">
        <?php new Svg(
        	'st-headline-font',
        	null,
        	'/content/resources/media/soeldenTypo/01_SOEL_Typo_ASSoelden.svg',
        	'Adelle Sans Sölden Headline'
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section id="st-intro-text-section" class="project-section bg-col-cool-gray intro-section">
    <div class="slot start"></div>
    <div class="content">
        <div class="column">
            <p class="text-large">Variable Headline Font</p>
        </div>
        <div class="column" style="align-items: flex-end;">
            <p class="text-large" style="text-align: right;">Sölden</p>
        </div>
    </div>
    <div class="slot end"></div>
</section>

<section class="project-section" id="st-services-section">
<div class="slot start"></div>
    <div class="content">

    <?php new AnimatedBanner(
    	null,
    	'animated-banner',
    	['Fontdesign', 'Corporate Design', 'Konzeptionierung'],
    	'col-orange',
    	'col-orange'
    ); ?>
</div>
<div class="slot end"></div>
</section>

<section id="st-live-dynamic-section" class="project-section">
    <div class="slot start"></div>
    <div class="content">
        <div class="soelden-text-section  desktop-only">
            <h2>Live Dynamic</h2>
            <p class="text-is-large">Markant, variabel und unverwechselbar: Der eigens für Sölden entwickelte He<span class="highlight-circle">adline-Font macht die </span>setzt die Marke auf den ersten Blick erkennbar.</span></p>
        </div>
    </div>
    <div class="slot end"></div>
</section>
<section id="st-move-section" class="project-section">
    <div class="slot start"></div>
    <div class="content">
        <div class="column" style="width: 57%;">
            <div class="soelden-text-section" >
                <h2>WE LIKE TO MOVE IT</h2>
                <h3>AS SOELDEN HEADLINE FONT:</h3>
                <p class="desktop-only">Die Headline-Schrift ist ein zentrales Wiedererkennungsmerkmal der Marke Sölden. Variable Buchstabenbreiten verleihen ihr Dynamik, Eigenständigkeit und einen sportlich-progressiven Charakter. Als Key Brand Identifier prägt sie den Auftritt über alle Anwendungen hinweg.</p>
                <p class="mobile-only">Der eigens für Sölden entwickelte Headline-Font macht die Marke typografisch unverwechselbar. Variable Buchstabenbreiten verleihen der Schrift Dynamik, Eigenständigkeit und hohen Wiedererkennungswert.</p>
                <p>— Font creation in cooperation with <span class="col-orange">TypeTogether</span></p>
            </div>
        </div>
        <div class="column" style="width: 43%;">
            <?php new Svg(
            	'st-headline-font',
            	null,
            	'/content/resources/media/soeldenTypo/09_SOEL_Typo_Attributes.svg',
            	'Adelle Sans Sölden Headline'
            ); ?>
        </div>
    </div>
    <div class="slot end"></div>
</section>
<section id="st-typo-letter-r-section" class="project-section bg-col-anthrazit">
    <div class="slot start"></div>
    <div class="content">
        <?php new Image(
        	'st-typo-letter-r',
        	null,
        	'/content/resources/media/soeldenTypo/02_SOEL_Letter_R.gif',
        	'Sölden Tpo Animation R'
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section id="st-typo-animation-section" class="project-section small-padding bg-col-anthrazit">
    <div class="slot start">
        <p class="side-note">VARIABLE LETTERS</p>
    </div>
    <div class="content"></div>
    <div class="slot end"></div>
</section>
<section id="st-variable-typo-section" class="project-section full-width-new small-padding no-padding-bottom bg-col-anthrazit">
    <div class="slot start"></div>
    <div class="content">
        <?php new Svg(
        	'soelden-kkk',
        	null,
        	'/content/resources/media/soeldenTypo/03_SOEL_Typo_KKK.svg'
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section id="st-alphabet-section" class="project-section">
    <div class="slot start"></div>
    <div class="content">
        <?php new Svg(
        	'soelden-alphabet',
        	null,
        	'/content/resources/media/soeldenTypo/04_HeadlineFont.svg'
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section id="st-alpha-letters-section-1" class="project-section small-padding bg-col-cool-gray">
    <div class="slot start">
        <p class="side-note">ALPHABETICAL LETTERS</p>
    </div>
    <div class="content"></div>
    <div class="slot end"></div>
</section>
<section id="st-alpha-letters-section-2" class="project-section no-padding-top bg-col-cool-gray">
    <div class="slot start"></div>
    <div class="content">
        <?php new Svg(
        	'soelden-alphabet',
        	null,
        	'/content/resources/media/soeldenTypo/05_SOEL_Typo_S_Buchstaben.svg'
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section id="st-typo-animation-section" class="project-section bg-col-cool-gray">
    <div class="slot start"></div>
    <div class="content">
        <?php new Video(
        	'st-typo-animation',
        	'/content/resources/media/soeldenTypo/SOEL_TypoAnimation_Web.mp4',
        	'16/9',
        	'/content/resources/media/soeldenTypo/SOEL_TypoAnimation_Web.png',
        	'Sölden Typo Animation',
        	true,
        	true,
        	true,
        	true,
        	false,
        	'/content/resources/media/soeldenTypo/SOEL_TypoAnimation_Mobile.mp4',
        	'1/1',
        	'/content/resources/media/soeldenTypo/SOEL_TypoAnimation_Mobile.png'
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section id="st-typo-animation-section" class="project-section bg-col-cool-gray no-padding-bottom">
    <div class="slot start"></div>
    <div class="content">
        <?php new Svg(
        	'st-heartbeat-web',
        	'desktop-only',
        	'/content/resources/media/soeldenTypo/SOEL_Claim_Linien_Web.svg',
        	'Heartbeat of the Alps'
        ); ?>
        <?php new Svg(
        	'st-heartbeat-web',
        	'mobile-only',
        	'/content/resources/media/soeldenTypo/SOEL_Claim_Linien_Mobile.svg',
        	'Heartbeat of the Alps'
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section id="st-and-sign-section" class="project-section bg-col-anthrazit">
    <div class="slot start"></div>
    <div class="content">
        <?php new Svg(
        	'st-and-sign',
        	null,
        	'/content/resources/media/soeldenTypo/08_SOEL_Typo_UndZeichen.svg',
        	'Sölden Tpografie Outro'
        ); ?>
    </div>
    <div class="slot end"></div>
</section>
<section id="st-project-links-section" class="project-section bg-col-anthrazit">
	<div class="slot side-note-start empty"></div>
	<div class="content">
		<div class="soelden-text-block no-max-width">
			<h3 class="subline">Projects – Fonts in Use</h3>
			<div class="buttons">
                <?php new Button(
                	null,
                	'project-button',
                	'Sölden Corporate Design',
                	'/projekte/soelden'
                ); ?>
                <?php new Button(
                	null,
                	'project-button',
                	'Electric Mountain Festival',
                	'/projekte/soelden/electric-mountain-festival'
                ); ?>
                <?php new Button(
                	null,
                	'project-button',
                	'Test Fest',
                	'/projekte/soelden/test-fest'
                ); ?>
                <?php new Button(
                	null,
                	'project-button',
                	'Ötztaler Radmarathon',
                	'/projekte/soelden/oetztaler-radmarathon'
                ); ?>
			</div>
		</div>
	</div>
	<div class="slot side-note-end"></div>
</section>