<?php
App::uses('AppModel', 'Model');
App::uses('Article', 'Article.Model');
// App::uses('Seo', 'Seo.Model');
class Portfolio extends Article {
	protected $objectType = 'Portfolio';
	/*
	var $hasOne = array(
		'Seo' => array(
			'className' => 'Seo.Seo',
			'foreignKey' => 'object_id',
			'conditions' => array('Seo.object_type' => 'Portfolio'),
			'dependent' => true
		)
	);
	*/
}
