<?php
App::uses('AppModel', 'Model');
App::uses('Article', 'Article.Model');
// App::uses('Seo', 'Seo.Model');
class Portfolio extends Article {
	public $objectType = 'Portfolio';

	public $hasOne = array(
		'Media' => array(
			'className' => 'Media.Media',
			'foreignKey' => 'object_id',
			'conditions' => array('Media.object_type' => 'Portfolio', 'Media.main' => 1),
			'dependent' => true
		)
	);
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
