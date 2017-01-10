<?
    $aMenu = array(
        array('label' => 'обо мне', 'url' => array('controller' => 'pages', 'action' => 'home')),
        array('label' => 'резюме (cv)', 'url' => array('controller' => 'pages', 'action' => 'skills')),
        array('label' => 'портфолио', 'url' => array('controller' => 'pages', 'action' => 'portfolio')),
        array('label' => 'блог', 'url' => array('controller' => 'pages', 'action' => 'articles'))
    );
?>
<ul id="menu" class="right">
<?
    foreach($aMenu as $item) {
        $options = ($this->request->action == $item['url']['action']) ? array('class' => 'selected') :  array();
        echo $this->Html->tag('li',
            $this->Html->link($item['label'], $item['url'], $options)
        );
    }
?>
</ul>