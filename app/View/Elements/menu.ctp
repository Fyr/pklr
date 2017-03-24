<?
    $aMenu = array(
        array('label' => 'обо мне', 'url' => (isset($isHome) && $isHome) ? 'javascript::void(0)' : array('controller' => 'pages', 'action' => 'home')),
        array('label' => 'резюме (cv)', 'url' => array('controller' => 'pages', 'action' => 'skills')),
        array('label' => 'портфолио', 'url' => array('controller' => 'portfolio', 'action' => 'index')),
        array('label' => 'блог', 'url' => array('controller' => 'articles', 'action' => 'index'))
    );
?>
<ul id="menu" class="right">
<?
    foreach($aMenu as $item) {
        $options = ($this->request->controller == $item['url']['controller']) ? array('class' => 'selected') :  array();
        echo $this->Html->tag('li',
            $this->Html->link($item['label'], $item['url'], $options)
        );
    }
?>
</ul>