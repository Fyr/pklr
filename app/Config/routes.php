<?php
Router::parseExtensions('json', 'xml');
/*
Router::connectNamed(
    array('page' => '[\d]+'),
    array('default' => false, 'greedy' => false)
);
*/
Router::connect('/', array('controller' => 'pages', 'action' => 'home'));
Router::connect('/cv', array('controller' => 'pages', 'action' => 'skills'));
Router::connect('/pages/view/:slug.html',
	array(
		'controller' => 'pages', 
		'action' => 'view',
	),
	array(
		'pass' => array('slug')
	)
);
/*
Router::connect('/articles/:slug.html', 
	array(
		'controller' => 'Articles', 
		'action' => 'view',
		'objectType' => 'SiteArticle'
	),
	array(
		'pass' => array('slug')
	)
);
Router::connect('/articles/page/:page', array(
	'controller' => 'Articles', 
	'action' => 'index',
	'objectType' => 'SiteArticle'
));
Router::connect('/articles/', array(
	'controller' => 'Articles', 
	'action' => 'index',
	'objectType' => 'SiteArticle'
)
);
Router::connect('/articles', array(
	'controller' => 'Articles', 
	'action' => 'index',
	'objectType' => 'SiteArticle'
)
);
*/
/*
Router::connect('/news/:slug.html', 
	array(
		'controller' => 'Articles', 
		'action' => 'view',
		'objectType' => 'News'
	),
	array(
		'pass' => array('slug')
	)
);
Router::connect('/news/page/:page', array(
	'controller' => 'Articles', 
	'action' => 'index',
	'objectType' => 'News'
));
Router::connect('/news/', array(
	'controller' => 'Articles', 
	'action' => 'index',
	'objectType' => 'News'
));
Router::connect('/news', array(
	'controller' => 'Articles', 
	'action' => 'index',
	'objectType' => 'News'
));
*/

Router::connect('/articles', array(
		'controller' => 'Articles', 
		'action' => 'index',
		'objectType' => 'SiteArticle',
	),
	array('named' => array('page' => 1))
);
Router::connect('/articles/:slug', 
	array(
		'controller' => 'Articles', 
		'action' => 'view',
		'objectType' => 'SiteArticle'
	),
	array('pass' => array('slug'))
);
Router::connect('/articles/page/:page', array(
	'controller' => 'Articles', 
	'action' => 'index',
	'objectType' => 'SiteArticle'
),
	array('named' => array('page' => '[\d]*'))
);

CakePlugin::routes();

require CAKE.'Config'.DS.'routes.php';
