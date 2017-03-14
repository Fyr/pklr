<?
    $this->Html->css(array('jquery.fancybox'), array('inline' => false));
    $this->Html->script(array('vendor/jquery/jquery.fancybox.pack'), array('inline' => false));
    $this->ArticleVars->init($article, $url, $title, $teaser, $src, '150x');
    echo $this->element('title', array('title' => 'Проект `'.$title.'`', 'subtitle' => 'Описание проекта, стэк технологий, скриншоты и т.д.'));
?>
<div class="block">
<?
    if ($url = Hash::get($article, 'Portfolio.options.url')) {
?>
        <p><span class="b">URL:</span> <a href="<?=$url?>" target="_blank"><?=str_replace(array('http://', 'https://'), '', $url)?></a></p>
<?
    }
    if ($skills = Hash::get($article, 'Portfolio.options.skills')) {
?>
        <p><span class="b"><?=__('Tech.stack')?>:</span> <b><?=$skills?></b></p>
<?
    }
    echo $this->ArticleVars->body($article);
?>
</div>
<div class="gallery-block">
<?
    foreach($aMedia as $i => $media) {
        $title = 'Скриншот '.($i + 1);
?>
        <div class="gallery left">
            <div class="img">
                <a class="fancybox" href="<?=$this->Media->imageUrl($media, 'noresize')?>" rel="photo" title="<?=$title?>">
                    <img src="<?=$this->Media->imageUrl($media, 'thumb216x105')?>" alt="<?=$title?>"/>
                </a>
            </div>
            <div class="des"><?=$title?></div>
        </div>
<?
    }
?>
</div>

<script type="text/javascript">
$(document).ready(function(){
    $('.fancybox').fancybox({
        padding: 5
    });
    var url = window.location.href;
    if (url.indexOf('#gallery') > 0) {
        setTimeout(function(){
            $('a.fancybox:first').click();
        }, 100);
    }
});
</script>
