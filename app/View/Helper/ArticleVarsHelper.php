<?php
App::uses('AppHelper', 'View/Helper');
App::uses('SiteRouter', 'Lib/Routing');
class ArticleVarsHelper extends AppHelper {
	public $helpers = array('Media');

	public function getObjectType($article) {
		return parent::getObjectType($article);
	}

	public function init($article, &$url, &$title, &$teaser = '', &$src = '', $size = 'noresize', &$featured = false, &$id = '') {
		$objectType = $this->getObjectType($article);
		$id = $article[$objectType]['id'];
		
		$url = Router::url(array('controller' => 'articles', 'action' => 'view', $article[$objectType]['slug']));
		
		$title = $article[$objectType]['title'];
		$teaser = nl2br($article[$objectType]['teaser']);
		$src = (isset($article['Media']) && $article['Media'] && isset($article['Media']['id']) && $article['Media']['id']) 
			? $this->Media->imageUrl($article, $size) : '';
		$featured = $article[$objectType]['featured'];
	}

	public function body($article) {
		return $article[$this->getObjectType($article)]['body'];
	}
}
