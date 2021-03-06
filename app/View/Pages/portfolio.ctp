<?=$this->element('title', array('title' => 'Портфолио', 'subtitle' => 'Примеры моих проектов'))?>
<div class="gallery-block">
<?
    foreach($aPortfolio as $article) {
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
            <a href="<?=$url?>#gallery" rel="prettyPhoto" title="Images" class="zoom"></a>
            <a href="<?=$url?>" title="Link" class="link"></a>
        </div>
    </div>
<?
    }
?>
</div>