<?php

Router::addRoute('/', 'PageController');

Router::addRoute('/projekte', 'PageController');

Router::addRoute('/agentur', 'PageController');

Router::addRoute('/jobs', 'PageController');

Router::addRoute('/kontakt', 'PageController');

Router::addRoute('/projekte/soelden', 'ProjectController');

Router::addRoute('/projekte/soelden/typografie', 'ProjectController');

Router::addRoute(
	'/projekte/soelden/electric-mountain-festival',
	'ProjectController'
);

Router::addRoute('/projekte/aranea', 'ProjectController');

Router::addRoute(
	'/projekte/soelden/oetztaler-radmarathon',
	'ProjectController'
);

Router::addRoute('/projekte/gurgl', 'ProjectController');

Router::addRoute('/projekte/alpbachtal', 'ProjectController');

Router::addRoute('/projekte/seefeld', 'ProjectController');

Router::addRoute('/projekte/holtmeyer', 'ProjectController');

Router::addRoute('/projekte/soelden/test-fest', 'ProjectController');

Router::addRoute('/projekte/oetztal/font', 'ProjectController');

Router::addRoute('/impressum', 'PageController');

Router::addRoute('/datenschutz', 'PageController');
