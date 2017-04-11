<?
    $aMenu = array(
        array('label' => 'обо мне', 'url' => (isset($isHome) && $isHome) ? 'javascript::void(0)' : array('controller' => 'pages', 'action' => 'home')),
        array('label' => 'для HR (cv)', 'url' => array('controller' => 'pages', 'action' => 'skills')),
        array('label' => 'портфолио', 'url' => array('controller' => 'portfolio', 'action' => 'index')),
        array('label' => 'блог', 'url' => array('controller' => 'articles', 'action' => 'index'))
    );
?>
<ul id="menu" class="right">
<?
    foreach($aMenu as $item) {
        if (isset($isHome) && $isHome) {
            $options = ($item['url'] == 'javascript::void(0)') ? array('class' => 'selected') : array();
        } else {
            $options = ($this->request->controller == $item['url']['controller'] && $item['url']['action'] != 'home') ? array('class' => 'selected') : array();
        }
        echo $this->Html->tag('li',
            $this->Html->link($item['label'], $item['url'], $options)
        );
    }
?>
</ul>