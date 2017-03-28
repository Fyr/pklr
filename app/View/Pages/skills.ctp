<?=$this->element('title', array('title' => 'Резюме (CV)', 'subtitle' => 'Мое резюме для потенциальных работодателей'))?>
<p>
<ul class="stars">
    <li>Скачать <a href="/sergei-philippov-fullstack-developer-cv-rus.zip">рус.версию резюме</a></li>
    <li>Скачать <a href="/sergey-philipov-fullstack-developer-cv-en.docx">англ.версию CV</a></li>
    <li>Скачать <a href="/code_examples.zip">примеры кода</a></li>
</ul>
</p>

<?=$this->element('title', array('title' => 'Навыки', 'subtitle' => 'Какими навыками и технологиями я владею'))?>
<p>Ниже расположен список навыков и технологий которыми я владею. Для удобства они сгруппированы в матрицу по разделам, а также указан самый ближайший год, в котором данная технология использовалась последний раз.
</p>
<p>Градация навыков сделана по 4 уровням: Novice, Medium, Advanced, Expert</p>
<?
foreach($aSkillsCat as $cat_id => $header) {
    echo $this->element('skills_table', array('header' => $header, 'skills' => $aSkills[$cat_id]));
}
?>
<p></p>

<?=$this->element('title', array('title' => 'Образование', 'subtitle' => 'Где я учился и какое образование'))?>
<ul class="stars">
    <li><span>1993-1998</span> Брестский политехнический университет</li>
</ul>
<p>
    Я закончил электронно-механический факультет (ЭМФ) по специальности &quot;ЭВМ, системы, комплексы и сети&quot;. Имею диплом инженера-системотехника.
</p>
<a name="exp"></a>
<?=$this->element('title', array('title' => 'Опыт работы', 'subtitle' => 'На каких проектах я работал и какой опыт работы имею'))?>
<ul class="stars exp">
<?
    foreach($aWorkExp as $exp) {
        $exp = $exp['WorkExp'];
        echo $this->element('exp_item', array(
            'period' => $exp['period'],
            'position' => $exp['position'],
            'company' => $exp['company'],
            'project' => $exp['project'],
            'url' => $exp['url'],
            'aItems' => array(
                'Описание' => $exp['descr'],
                'Задачи' => $exp['tasks'],
                'Технологии' => $exp['tech_stack']
            )
        ));
    }
?>
</ul>
