<?=$this->element('title', array('title' => 'Кратко', 'subtitle' => 'В нескольких словах обо мне'))?>
<p>Если вам нужен <span class="b"><b>опытный full-stack разработчик</b></span>, то добро пожаловать на мой личный сайт!</p>
<p>Мои основные направления - это PHP и JavaScript, и все что с ними связано.</p>
<p>Как web-developer, я<p>
<ul class="stars">
    <li>ответственный и коммуникативный</li>
    <li>опыт web-разработки более чем 10 лет</li>
    <li>знаю несколько PHP, JS и CSS фреймворков (Zend, Symfony, cakePHP, jQuery, React, Angular, Bootstrap и др.)</li>
    <li>есть опыт управления проектами (team leader, PM, coordinator)</li>
    <li>свободно говорю по английски (fluent English)</li>
</ul>
<p>Разрабатывал как back-end, так и front-end приложения. В основном работал на крупных и высоко-нагруженных серьезных проектах. Большой опыт сотрудничества с минскими компаниями, а также с Россией, Европой, Америкой.</p>
<p>Есть рекомендации моих как белорусских, так и европейских работодателей.</p>

<?=$this->element('title', array('title' => 'О работе', 'subtitle' => 'Что нужно знать при работе со мной'))?>
<p>Я предпочитаю работать full-time <a href="#remote_vs_freelance">удаленно</a> (почему - читайте <a href="#remote_vs_office">тут</a>), однако иногда работаю в <a href="#remote_vs_freelance">офисах</a>. У меня есть свидетельство ИП, поэтому я могу принимать платежи:</p>
<ul class="stars">
    <li>легально</li>
    <li>с минимальным для вас налогообложением</li>
    <li>не только в бел.руб, но и в любой валюте - USD, EUR, RUR</li>
</ul>
<p>Я достаточно ответственно подхожу к работе и не даю обещаний, которые не могу выполнить. Однако если я что-то обещаю, я могу работать круглосуточно, чтобы их сдержать.</p>
<p>Это мой профессиональный кодекс чести!</p>

<?=$this->element('title', array('title' => 'Личное', 'subtitle' => 'Личная информация обо мне'))?>
<p>Отслужил в Пограничных войсках Республики Беларусь. </p>
<p>После армии проработал несколько лет программистом в торговой и банковской сфере. Затем переключился на более интересные и перспективные технологии - web.</p>

<?=$this->element('title', array('title' => 'Любимый веб', 'subtitle' => 'Почему я люблю свою работу'))?>
<ul class="stars">
    <li>Я люблю жизнь, ищу в ней красоту и люблю этим делиться с другими. Web-сфера как раз и связана с красивым визуальным представлением информации, а результаты моего труда могут увидеть миллионы людей - пользователей интернета.</li>
    <li>Я считаю, что за интернет-технологиями - будущее. Посудите сами, электронная коммерция переползает в online, девайсов с поддержкой интернета становится все больше, в нашу повседневную жизнь входят электронные средства коммуникации - Google, skype, viber (точнее уже вошли), а приложение про покемонов - это просто какое-то сумашествие!</li>
    <li>Интернет-проекты - это очень интересно. Тут постоянно что-то новое, да и попрограммить есть чего.</li>
    <li>Веб-разработчик - одна из самых хорошо оплачиваемых профессий в нашем социуме. Приятно быть социально востребованым! :)</li>
</ul>

<?=$this->element('title', array('title' => 'Я - живой!', 'subtitle' => 'У меня тоже есть свои увлечения'))?>
<p>Я не зациклен только на работе, хотя она мне очень нравится. В свободное от работы время у меня масса увлечений:</p>
<ul class="stars">
    <li>разработка игр на HTML5/CSS3/JS</li>
    <li>эзотерика и психология</li>
    <li>здоровый образ жизни и оздоровительные практики</li>
    <li>музыка и игра на электрогитаре</li>
</ul>

<a name="remote_vs_freelance"></a>
<?=$this->element('title', array('title' => 'Удаленка vs Фриланс', 'subtitle' => 'Почему удаленная работа это не фриланс'))?>
<p>Очень многие потенциальные работодатели или HR-специалисты, услышав про удаленную работу, сразу говорят что им фриланс не подходит.</p>
<p>Однако <span class="b">удаленная работа - это НЕ фриланс</span>:</p>
<?
$aDiffs = array(
    array(
        'Я постоянно на связи - мобильный телефон, skype, email',
        'Фрилансер может исчезнуть или не выйти на связь в нужное время или работать по ночам, когда вы не можете с ним общаться'
    ),
    array(
        'Я работаю по стабильному рабочему графику, такому же как и в офисе',
        'Фрилансеры зачастую работают по своему графику - ночью или на выходных'
    ),
    array(
        'Я предпочитаю долгосрочные проекты и стабильную работу. Я несу ответственность за результаты своего труда',
        'Фрилансеры предпочитают побыстрее завершить проект, получить деньги и ... исчезнуть, чтобы не пришлось их возвращать'
    ),
    array(
        'У меня открыт ИП и вы можете перевести мне деньги на р/с легально. Благодаря этому вы можете уменьшить вашу сумму налогов через вычеты',
        'Фрилансерам часто приходится платить нелегально через электронные платежные системы, банковскими переводами или наличными'
    )
);
?>
<table class="table">
    <?
    foreach($aDiffs as $items) {
        ?>
        <tr>
            <td><?=$items[0]?></td>
            <td><?=$items[1]?></td>
        </tr>
        <?
    }
    ?>
</table>

<a name="remote_vs_office"></a>
<?=$this->element('title', array('title' => 'Удаленка vs Офис', 'subtitle' => '7 мифов про работу в офисе и почему не стоит боятся работать удаленно'))?>
<p>Для самых торопливых и недоверчивых - сразу <a href="https://hh.ru/article/306506" target="_blank">статья на тему удаленки</a> из весьма авторитетного источника. Лично мое мнение - немного ниже :)</p>
<p>На самом деле работодатели вполне могут сотрудничать удаленно. Ведь в наше время для этого есть все необходимые средства - начиная от видео-связи по скайпу, заканчивая ежедневными коммитами в репозиторий. Однако существуют некоторые предубеждения об удаленке (не исключая и плохой опыт), и работодатели просто боятся работать удаленно. И вот почему:</p>
<?
    $aMyths = array(
        'Невозможно контролировать разработчика удаленно, а в офисе его контролировать легко' => array(
            'Многие думают, что только в офисе можно полноценно контролировать сотрудника. Ведь у него есть рабочее место и менеджер, который может визуально видеть чем он занимается.',
            'Во-первых, есть масса способов для контроля работы - системы управления проектами, репозитории кода, тайм-репорты, скриншот-мейкеры и т.д.. Все эти способы работают даже независимо от того, где находится сотрудник. А зачастую их используют и при работе в офисе. Разницы - никакой. Менеджер все равно не стоит за плечом у каждого разработчика целый день.<br>
                А во-вторых, самый лучший контроль - это выполненная вовремя и без багов работа!'
        ),
        'Разработчик работает более эффективно в офисе, нежели удаленно' => array(
            'Офис стимулирует и организует таких творческих людей, как программисты. И если уж он приходит туда, он обязательно будет работать. А удаленщик наоборот будет неизвестно чем заниматься.',
            'Вообще не факт! Во-первых, все очень сильно зависит от самоорганизации самого разработчика. Ведь работать можно тоже по-разному - независимо от того, сидит ли он в офисе или нет. Многие НЕ работают и в офисах, и на удаленке. Но! Если человек работает на удаленке уже долгое время, у него автоматически вырабатывается самоорганизация, иначе он ничего не заработает.<br/>
                Во-вторых, именно в офисе очень много уходит времени на НЕ-целевую активность - попить кофе, потрепаться с коллегами, посмотреть корпоративную почту. На удаленке же я не трачу время на треп с коллегами, а кофе пью прямо за компом, при этом работая. <br>
                Между прочим, я спрашивал очень многих людей, почему они работают в офисах, а не удаленно. И вот в основном 2 причины (из немногих кстати!), которые мне называли: наличие хорошего коллектива и живое общение с людьми. <br/>
                Только вдумайтесь в этот факт!!! Многие люди ходят на работу, чтобы... пообщаться в своем социуме! Не заработать, не добиться чего-то, а просто поболтать! <br>
                В отличие от таких людей, я четко понимаю, что садясь за работу, я не ищу живое общение - мне оно даже не светит. Но при этом, мне не нужно самоутверждаться в коллективе и занимать какую-то свою социальную нишу. <br/>
                Я работаю, чтобы показать результат своей работы и как следствие этого - заработать денег. Если мне нужно живое общение, я выхожу на улицу или приглашаю домой подругу :) В любом случае я стараюсь как можно быстрее результативно(!) закончить работу.<br>
                В-третьих, я прекрасно осознаю, что если я на удаленке буду работать неэффективно, меня тут же уволят, и не важно чем я при этом занимался! Поэтому я нацелен на то, чтобы показать результат своей работы. А разработчик в офисе всегда может сказать, что он ведь был на работе и неважно, был ли при этом результат. <br/>
                И кстати, на моей практике были случаи, когда разработчики нихрена не делали, но при этом оправдывались  отсутствием документации, указаний от менеджера или просто плохой организацией работы на проекте.'
        ),
        'Офисный сотрудник &quot;привязан&quot; к компании, а удаленщик может запросто &quot;кинуть&quot;' => array(
            'Раз сотрудник работает в компании, он уже оффициально &quot;привязан&quot; к компании и не может просто так уйти. Удаленщика же &quot;привязать&quot; сложно.',
            'Ну во-первых, тут вообще никто от такого не застрахован - ни при работе в офисе, ни при удаленке. <br/>
                Я часто наблюдал, как многие сеньоры &quot;прыгают&quot; по IT-компаниям только из-за того, что другая компания может предложить больше зарплату либо более интересные условия работы. Благо вакансий пойти работать в офис очень много. <br/>
                Удаленной же работы, как правило, гораздо меньше, а тем более хороших проектов, поэтому и &quot;прыжков&quot; меньше.<br/>
                Во-вторых, если работодатели хотят гарантий, можно заключить контракт как с сотрудником в офис, так и с удаленщиком. Законодательно - никакой разницы.<br/>
                В-третьих, гораздо больше &quot;любви и привязанности&quot; возникает к той компании, которая предлагает интересные проекты и достойную зарплату. Заметьте! Это не зависимо от того работаешь ли в офисе или удаленно.<br/>
                Как правило, удаленщики или фрилансеры начинают пропадать не потому, что они законодательно не связаны, а потому что они либо не могут справиться со своей работой, либо просто не хотят. Тут важно понять по каким именно причинам. И зачастую причины довольно обьективные.<br/>
                Лично на моей практике был случай, когда тестер, который работал как раз в офисе, просто исчез на неделю! И это при том, что проект был очень ответственный и релиз был каждую неделю. Конечно его уволили, конечно он потом обьявился, чтоб получить хоть какие-то деньги и забрать свою трудовую. <br />
                Чуть позже, уже после увольнения, он мне признался, что достали задержки по з\п при наличии давления со стороны руководства. Он просто нашел другую кампанию. Но факт остается фактом!'
        ),
        'С работником в офисе меньше законодательных проблем, чем с удаленным' => array(
            'Если сотрудник работает в офисе, то с ним проще решать вопросы, касающиеся оффициальных документов. С удаленщиком аналогичные вопросы решать сложно.',
            'Опять же - никакой разницы, будь то трудовой договор или НЕ-трудовой (т.е. контракт напр.).<br/>
                Однако, очень многие удаленщики имеют ИП (особенно те, кто давно работает), и в этом случае IT-компания может серьезно сэкономить на оплате их труда засчет уменьшенного налогообложения. Ведь ИП платит налоги самостоятельно. И даже если они включаются в сумму оплаты его труда, это не 30%, 25%, и даже не 9% как в случае офисного сотрудника. <br/>
                На данный момент согласно законодательству РБ это 5% при упрощенной системе налогообложения. На платежах более $1000 разница в 4% на налогообложение это уже довольно ощутимая сумма!<br>
                Второй момент. Как ИП, разработчик уже де-факто берет часть законодательных проблем на себя, и если он давно работает, он уже знает как их решать - будь то оформление контрактов или платежи.'
        ),
        'В офисе есть стабильный интернет, а на удаленке разработчик может оказаться offline' => array(
            'Как правило интернет-соединением для офиса занимаются &quot;специально-обученные люди&quot;. На удаленке же разработчик сам следит за состоянием инет-коннекта, и в силу этого он не всегда online.',
            'Вот не поверите, за последние 5 лет, у меня не было НИ ОДНОГО СЛУЧАЯ, когда я был недоступен из-за отсутствия интернет-соединения по своим личным причинам. Главное платить за него во время, что я всегда и делаю - это часть моего рабочего места. Если уж и вырубался интернет, он вырубался по всему району или даже стране - наш БелТелеКом еще та организация. <br>
                Устроился на работу в IT-компанию в офис - 3 раза не было интернета! Первый раз - прокладка кабелей (был ремонт в здании), второй раз - какие-то работы в системе вентиляции (везде вырубили электричество), третий раз - просто исчез интернет во всем здании! Уж не знаю по каким причинам.'
        ),
        'С удаленщиком не всегда можно пообщаться по проекту, а в офисе можно всегда решить все вопросы на месте' => array(
            'Если сотрудник сидит в офисе, он на своем рабочем месте и всегда можно пообщаться и решить какие-то вопросы по проекту. С удаленщиком есть проблемы общения, т.к. невозможно лично побеседовать.',
            '1. Можно всегда пообщаться по скайпу, мессенджеру или мобильной связи голосом для решения оперативных вопросов. Удаленщик это НЕ фрилансер, его не нужно искать - он всегда на связи согласно вашему графику работы.<br/>
                2. На самом деле для разработчиков вообще нет необходимости быть постоянно на связи, если это не служба поддержки. Все важные митинги по проекту, обсуждения с кастомерами и скайп-конференции планируются, и все о таких мероприятиях знают заранее.<br/>
                3. А надо ли это общение? Если работодатель (тим-лид) четко ставит задачу и грамотно выбирает сроки ее реализации (по email или в любом приложении по управлению проектами напр. JIRA), то самое лучшее общение между работодателем и разработчиком - это закрытый тикет и рабочий код в репозитории.<br/>
                Лично за мою долгую практику удаленной работы мне никто не смог назвать хотя бы одну адекватную причину нахождения в офисе.'
        ),
        'Крупные проекты не делают на удаленке, это не серьезно' => array(
            'Крупный и серьезный проект требует серьезного подхода и команды. Никто на удаленке такие проекты не делает.',
            'Вы серьезно, что это не серьезно? :)<br />
                Во-первых, на удаленке работает куча очень грамотных специалистов. Я постоянно получаю предложения по работе и прохожу собеседования.<br/>
                Во-вторых, у меня довольно много успешного опыта разработки проектов на удаленке - в команде и без. На некоторых проектах даже я был удаленным тим-лидом.<br/>
                Мир движется в сторону удаленной работы, это экономия самого ценного ресурса - времени. То, что возникают аутсорсинговые IT-компании, уже это доказывает в полной мере.<br/>
                Появляются курсы, которые можно проходить удаленно (напр. английский). Уже много серьезного коммерческого консультирования по скайпу.<br/>
                Даже внутри компании, зачастую руководство взаимодействует со своими подчиненными удаленно. Ведь деловые люди очень часто в разьездах. И их никак нельзя назвать несерьезными'
        )
    );
// Иногда мне кажется, что требование &quot;только в офис&quot; возникает из-за того
?>
<ul class="stars exp">
<?
    $i = 1;
    foreach($aMyths as $header => $items) {
?>
        <li>
            <span><b>Миф N <?=$i++?>. <?=$header?></b></span><br/>
            <span><i><?=$items[0]?></i></span><br/>
            <?=$items[1]?>
        </li>
<?
    }
?>
</ul>
<p><span class="b"><b>Вывод</b></span>: от рисков не застрахован никто - ни в офисе, ни на удаленке, а все риски, связанные с удаленной работой упираются не в сложности коммуникаций, а в выбор толковых и ответственных специалистов.</p>
<p>И подход к удаленной работе по сути заключается в стиле руководства - либо <b>нацеленность на результат</b> работы, либо на <b>контроль подчиненных.</b></p>
<p>При усилении контроля, безответственные подчиненные в офисе будут делать ИБД (Имитация Бурной Деятельности), на удаленке в этом нет смысла - все равно в конечном счете важен результат работы. Излишний контроль может даже создавать рабочий дискомфорт.</p>
<p>При нацеленности на результат, офис или удаленка - уже не важно. Важен конечный результат и создание условий для его эффективного достижения.</p>