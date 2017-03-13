<?
	if ($this->Articlevars->getObjectType($article) == 'Portfolio') {
		echo $this->element('Articles/view_Portfolio');
	} else {
		$this->ArticleVars->init($article, $url, $title, $teaser, $src, '150x');
		echo $this->element('title', array('title' => $title));
?>
<div class="block">
	<?=$this->ArticleVars->body($article)?>
</div>
<?
	}
?>