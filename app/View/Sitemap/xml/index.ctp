<? 
	echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<?
    $aUrls = array(
        array('controller' => 'pages', 'action' => 'home'),
        array('controller' => 'pages', 'action' => 'skills'),
        //array('controller' => 'pages', 'action' => 'portfolio'),
        //array('controller' => 'articles', 'action' => 'index'),
    );
    foreach($aUrls as $url) {
        $url = $this->Html->url($url, true);
        echo $this->element('sitemap_url', compact('url'));
    }
?>
</urlset>
