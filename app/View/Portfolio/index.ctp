<?=$this->element('title', array('title' => 'Портфолио', 'subtitle' => 'Примеры моих проектов'))?>
<div class="gallery-block">
<?
    foreach($aArticles as $article) {
        $this->ArticleVars->init($article, $url, $title, $teaser, $src, 'thumb216x105');
?>
    <div class="gallery left">
        <div class="img">
            <img src="<?=$src?>" alt="<?=$title?>"/>
        </div>
        <div class="des">
            <?=$title?>
        </div>
        <div class="block-zoom">
            <a href="<?=$url?>#gallery" title="Галерея" class="zoom"></a>
            <a href="<?=$url?>" title="Описание" class="link"></a>
        </div>
    </div>
<?
    }
?>
</div>