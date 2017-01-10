<?php
App::uses('AdminController', 'Controller');
class AdminContentController extends AdminController {
    public $name = 'AdminContent';
    public $components = array('Article.PCArticle');
    public $uses = array('Article.Article', 'CategoryArticle', 'SubcategoryArticle', 'CarType');
    public $helpers = array('ObjectType');
    
    public function index($objectType, $objectID = '') {
        $this->paginate = array(
            'Page' => array(
            	'fields' => array('title', 'slug')
            ),
        	'Portfolio' => array(
        		'fields' => array('created', 'title', 'url', 'published')
        	),
        	'SiteArticle' => array(
        		'fields' => array('created', 'title', 'slug', 'featured', 'published')
        	)
        );
        
        $aRowset = $this->PCArticle->setModel($objectType)->index();
        $this->set('objectType', $objectType);
        $this->set('objectID', $objectID);
        $this->set('aRowset', $aRowset);
    }
    
	public function edit($id = 0, $objectType = '', $objectID = '') {
		$this->loadModel('Media.Media');
		
		if (!$id) {
			// если не задан ID, то objectType+ObjectID должны передаваться
			$this->request->data('Article.object_type', $objectType);
			// $this->request->data('Article.object_id', $objectID);
			$this->request->data('Seo.object_type', $objectType);
		}
		
		if ($objectType == 'SubcategoryArticle') {
			$this->request->data('Article.cat_id', $objectID);
		}
		
		// Здесь работаем с моделью Article, т.к. если задавать только $id, 
		// непонятно какую модель загружать, чтобы определить $objectType
		/*
		$this->Article->bindModel(array(
			'hasOne' => array(
				'Seo' => array(
					'className' => 'Seo.Seo',
					'foreignKey' => 'object_id',
					'conditions' => array('Seo.object_type' => $objectType),
					'dependent' => true
				)
			)
		), false);
		*/
		
		$this->PCArticle->edit(&$id, &$lSaved);
		$objectType = $this->request->data('Article.object_type');
		// $objectID = $this->request->data('Article.object_id');
		
		if ($lSaved) {
			$indexRoute = array('action' => 'index', $objectType, $objectID);
			$editRoute = array('action' => 'edit', $id, $objectType, $objectID);
			return $this->redirect(($this->request->data('apply')) ? $indexRoute : $editRoute);
		}
		
		if (!$id) {
			$this->request->data('Article.status', array('published'));
			$this->request->data('Article.sorting', '0');
		}
		
		// $this->currMenu = ($objectType == 'Product' || $objectType == 'CategoryProduct') ? 'Catalog' : 'Content';
	}
}
