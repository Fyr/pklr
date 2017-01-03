<h3># Резюме (CV)</h3>
<p class="sub">Мое резюме для потенциальных работодателей</p>
<p>
    <ul class="stars">
        <li>Скачать <a href="">рус.версию резюме</a></li>
        <li>Скачать <a href="">англ.версию CV</a></li>
    </ul>
</p>
<?
    $aHead = array('', 'Опыт, лет', 'Уровень', 'Год');
    $aSkills = array(
        'Programming Languages' => array(
            array('PHP', 10, 'Expert', 2016),
            array('JavaScript', 10, 'Expert', 2016),
            array('EcmaScript 6', 0.5, 'Novice', 2016),
            array('VB.NET',	0.5, 'Novice', 2006),
            array('Visual Basic', 1, 'Novice', 2006),
            array('C#',	0.5, 'Novice', 2006),
            array('Clipper', 5, 'Expert', 2004),
            array('FoxPro',	2, 'Expert', 1999),
        ),
        'Frameworks and Libraries (back-end)' => array(
            array('Zend', 3, 'Medium', 2013),
            array('Symfony 1.x', 2, 'Advanced', 2014),
            array('Symfony 2.x', 1, 'Advanced', 2016),
            array('cakePHP 1.x', 3, 'Expert', 2015),
            array('cakePHP 2.x', 3, 'Expert', 2016),
            array('SimpleHtmlDom', 1, 'Expert', 2015),
            array('CURL', 5, 'Expert', 2015),
            array('GD 2', 5, 'Expert', 2015),
            array('Smarty', 2, 'Expert', 2013),
            array('PrinceXML', 1, 'Expert', 2012),
            array('Node.js', 0.5, 'Novice', 2015)
        ),
        'Frameworks and Libraries (front-end)' => array(
            array('jQuery',	8, 'Expert', 2016),
            array('jQueryUI', 5, 'Expert', 2015),
            array('Twitter Bootstrap CSS / JS plugins', 2, 'Advanced', 2016),
            array('prototype', 1, 'Medium',	2013),
            array('YUI Library', 1, 'Medium', 2016),
            array('GoogleMaps',	0.5, 'Advanced', 2015),
            array('Leaflet (Maps API)',	0.5, 'Expert', 2015),
            array('HiCharts', 0.5, 'Expert', 2015),
            array('CKEditor', 5, 'Medium', 2015),
            array('Tmpl', 3, 'Expert', 2016),
            array('Fabric.js', 0.5, 'Medium', 2016),
            array('FullCalendar', 1, 'Expert', 2013),
            array('AngularJS', 0.5, 'Medium', 2015),
            array('React.js', 0.5, 'Medium', 2015),
        ),
        'Databases and Storages' => array(
            array('MySQL Server', 10, 'Expert', 2016),
            array('Microsoft SQL Server', 1, 'Medium', 2006),
            array('SQLite',	2, 'Advanced', 2012),
            array('dBase 4', 5, 'Expert', 2004),
            array('Redis', 0.5, 'Novice', 2015),
        ),
        'Programming Technologies' => array(
            array('ASP.NET', 0.5, 'Novice', 2006),
            array('REST/SOAP/XML Web Services',	2, 'Advanced', 2015),
            array('AJAX', 10, 'Expert', 2016),
            array('JSON', 4, 'Expert', 2016),
            array('XSLT/XPath',	2, 'Advanced', 2007),
        ),
        'Source Control Systems' => array(
            array('Git', 5, 'Expert', 2016),
            array('SVN', 5, 'Advanced', 2014),
            array('Mercurial', 2, 'Expert', 2014),
            array('Microsoft VSS', 1, 'Medium', 2006),
            array('RCS', 4, 'Expert', 2004),
        ),
        'Automated Testing' => array(
            array('Selenium', 0.5, 'Novice', 2015),
            array('PHPUnit', 1, 'Advanced', 2015),
            array('QUnit', 1, 'Expert', 2016),
        ),
        'Operating Systems' => array(
            array('MS Windows', 15, 'Advanced', 2016),
            array('Linux', 2, 'Medium', 2016),
            array('MS DOS', 10, 'Expert', 2004),
        ),
        'Application Servers and Middleware' => array(
            array('Apache HTTP Server',	10, 'Advanced', 2016),
            array('IIS', 2, 'Medium', 2009),
        ),
        'Project Management Tools' => array(
            array('Atlassian JIRA', 4, 'Advanced', 2016),
            array('Unfuddle', 1, 'Advanced', 2011),
            array('Redmine', 4, 'Expert', 2014),
            array('Mantis', 2, 'Medium', 2013),
        ),
        'Integrated Development Environment' => array(
            array('Microsoft Visual Studio', 1, 'Medium', 2006),
            array('Zend Studio', 8, 'Expert', 2015),
            array('JetBrains PhpStorm',	1, 'Advanced', 2016),
        ),
        'Standards and Methodologies' => array(
            array('Agile (Scrum)', 3, 'Expert', 2014),
            array('Test Driven Development', 2, 'Advanced', 2016),
            array('Feature Driven Development',	1, 'Medium', 2013),
        ),
        'Modeling Methodologies' => array(
            array('UML', 0.5, 'Novice', 2009),
            array('IDEF1X / IDEF0',	0.5, 'Novice', 2004),
        ),
    );
?>
<h3># Навыки</h3>
<p class="sub">Какими навыками и технологиями я владею</p>
<p>Ниже расположен список навыков и технологий которыми я владею. Для удобства они сгруппированы в матрицу по разделам, а также указан самый ближайший год, в котором данная технология использовалась последний раз.
</p>
<?
    foreach($aSkills as $header => $skills) {
        skillsMatrix($aHead, $header, $skills);
    }
?>
<p></p>
<h3># Образование</h3>
<p class="sub">Какое я имею образование</p>
<ul class="stars">
    <li><span>1993-1998</span> Брестский политехнический университет</li>
</ul>
<p>
    Я закончил электронно-механический факультет (ЭМФ) по специальности &quot;ЭВМ, системы, комплексы и сети&quot;. Имею диплом инженера-системотехника.
</p>

<h3># Опыт работы</h3>
<p class="sub">На каких проектах я работал и какой опыт работы имею</p>
<?
    $aItems = array(
        array('05/2016 – 09/2016', 'ScienceSoft', 'Senior PHP-developer', 'BlueJayWireless', 'https://www.bluejaywireless.com', array(
            'Описание проекта' => 'Высоконагруженная система для подключения пользователей к мобильной и WiFi-связи по индивидуальным, корпоративным и социальным программам. Тестно интегрирована со сторонними американскими системами получения и проверки данных пользователей',
            'Задачи' => 'Разработка системы процессинга, разработка панели администратора и аналитики, скрипты для обновления пользовательских данных, интеграция со сторонними сервисами получения и проверки пользовательских данных',
            'Технологии' => 'PHP 5.4 (Symfony v.2.8) / MySQL 5.7 / HTML 5 / CSS 3 (Twitter Bootstrap v.3) / JavaScript (AJAX, JSON, jQuery and Bootstrap plugins) / docker'
        )),
        array('01/2016 – 05/2016', 'KakaduDev', 'Senior PHP-developer', 'YourDay Karaoke', 'http://www.karaokeyourday.com/', array(
            'Описание проекта' => 'Cервис для караоке-систем',
            'Задачи' => 'Разработка архитектуры и модулей для приложения, разработка CMS и тех.поддержка проекта, интеграция с Robokassa',
            'Технологии' => 'PHP 5.3 (cakePHP v.2.4) / MySQL 5.5 / HTML 5 / CSS 3 (Twitter Bootstrap v.3) / JavaScript (AJAX, JSON, jQuery and Bootstrap plugins)'
        )),
        array('07/2015 – 12/2015', 'SoftMax', 'Senior front-end developer', 'GPS Monitor', '', array(
            'Описание проекта' => 'Система телемониторинга обьектов. Система включает в себя модули управления обьектами и пользователями, отображения обьектов и геозон на карте, аналитики  и отчетности по маршрутам и данным сенсоров, управление проектом и командой разработчиков',
            'Задачи' => 'Разработка архитектуры, UI и модулей приложения и админ-панели, интеграция с back-end API',
            'Технологии' => 'HTML 5 / CSS 3 / JavaScript (AJAX, JSON, jQuery, GoogleMaps, Leaflet, HighCharts, Tmpl'
        )),
        array('06/2015 – 07/2015', 'BelitSoft', 'Front-end developer', 'Concept Sause', '', array(
            'Описание проекта' => 'Среда для 3D презентаций для магазинов',
            'Задачи' => 'Разработка админ-панели',
            'Технологии' => 'HTML 5 / CSS 3 (Stylus) / JavaScript (AJAX, JSON, AngularJS, Node.js, Dust.js, WebGL, SocketJS, Grunt) / TypeScript'
        )),
        array('05/2015 – 06/2015', 'BelitSoft', 'CamCity', 'Senior PHP-developer', 'CamCity', '', array(
            'Описание проекта' => 'Админ-панель управления для проекта CamCity, а также система аналитики и отчетности',
            'Задачи' => 'Разработка админ-панели, рефакторинг старой системы',
            'Технологии' => 'Symfony 2 / MySQL 5.5 / HTML 5 / JavaScript (jQuery, HiCharts)'
        )),
        array('03/2015 – 05/2015', 'Agromotors', 'Lead PHP-developer', 'GiperZap', 'http://giperzap.by/', array(
            'Описание проекта' => 'Гипермаркет запчастей с каталогами, поиском по запчастям и проценкой',
            'Задачи' => 'Разработка архитекторы, админ-панели, фронт-энда, интеграция со сторонними сервисами и каталогами запчастей',
            'Технологии' => 'PHP 5.3 (cakePHP 2.4, Curl, GD2, SimpleHtmlDom, Zzap API, TechDoc API) / MySQL 5.5 / HTML 5 / CSS 3 (Twitter Bootstrap) / JavaScript (AJAX, JSON, jQuery, jQueryUI, Meiomask, Tmpl, CKEditor, jQuery FileUploader)'
        )),
        array('10/2014 – 03/2015', 'Kontruktor', 'Lead PHP-developer', 'Kontruktor', 'http://konstruktor.com/', array(
            'Описание проекта' => 'Креативная среда для деловых людей с набором модулей для ведения бизнеса и управления бизнес-проектами',
            'Задачи' => 'Разработка архитекторы, админ-панели, фронт-энда и модулей (таймлайн и события, онлайн-чат, статьи, проекты, группы, онлайн-хранилище, устройства), управление проектом и командой разработчиков, деплоймент и выпуск релизов',
            'Технологии' => 'PHP 5.3 (cakePHP 2.4, Curl, GD2, SimpleHtmlDom, Zzap API, TechDoc API) / MySQL 5.5 / HTML 5 / CSS 3 (Twitter Bootstrap) / JavaScript (AJAX, JSON, jQuery, jQueryUI, Meiomask, Tmpl, CKEditor, jQuery FileUploader)'
        )),
        array('09/2013 – 08/2014', 'JustClick', 'Lead PHP-developer', 'JustClick', 'http://justclick.ru/', array(
            'Описание проекта' => 'Сервис для ведения инфо-биснеса с предоставлением пользователям модулей чата, автовебинаров, email и sms рассылок, аналитики, трэкинга посещений, ссылок и т.д.',
            'Задачи' => 'Доработка модулей и алгоритмов функционирования приложения, обсуждение с заказчиком, управление командой на проекте, разработка архитектуры проекта, построение и стандартизация тех.процессов, ведение тех.документации, собеседование с кандидатами и прием на работу в команду',
            'Технологии' => 'PHP 5.3 (Zend, 1.8, Symfony 1.4), MySQL 5, HTML 5, CSS 3, jQuery, jQueryUI, AJAX, JSON'
        )),
        array('02/2013 – 09/2013', 'Busyness Intellect Systems', 'Lead PHP-developer', 'TRIS', '', array(
            'Описание проекта' => 'Среда для создания электронных уроков',
            'Задачи' => 'Разработка интерактивной среды для создания и оболочки для просмотра электронных курсов, инетграция с МercuryEditor и разработка JS-виджетов под него',
            'Технологии' => 'PHP 5 (WP, cakePHP 2.2), MySQL, HTML 5, CSS 3, JavaScript (jQuery, jQueryUI, AJAX, JSON, MercuryEditor API + widgets)'
        )),
        array('02/2013 – 09/2013', 'Busyness Intellect Systems', 'Senior PHP-developer', 'Holdshot', '', array(
            'Описание проекта' => 'Сервис для управления полетами самолетов – диспетчеризация, управление ресурсами, иструктаж, осмотры и т.д.',
            'Задачи' => 'Разработка back-end, front-end и др. модулей системы',
            'Технологии' => 'cakePHP 2.2, MySQL, jQuery, jQueryUI, AJAX, JSON'
        )),
        array('02/2012 – 02/2013', 'ProductCreator', 'Senior PHP-developer', 'PCP', 'http://productcreatorpro.com/', array(
            'Описание проекта' => 'Сервис для публикации PDF',
            'Задачи' => 'Разработка back-end, шаблонов для PDF, системы публикации PDF, системы аффилиалов',
            'Технологии' => 'Zend, MySQL, jQuery, AJAX, JSON, PrinceXML, TCPDF'
        )),
        array('05/2011 – 11/2011', 'TullaCo', 'Lead PHP-developer', 'Ecomom', 'http://ecomom.com/', array(
            'Описание проекта' => 'Интернет-гиперамаркет с игровым приложением',
            'Задачи' => 'Разработка игрового приложения, админ-панели и интеграция с Magento, упрвление командой на проекте',
            'Технологии' => 'Magento, Zend, MySQL, jQuery, AJAX, JSON'
        )),
        array('01/2011 – 05/2011', 'Antalika', 'Middle PHP-developer', 'CompabilityTest', 'http://apps.facebook.com/compatibilitytest/', array(
            'Описание проекта' => 'Приложение под Facebook для проверки совместимости пар',
            'Задачи' => 'Разработка приложения, интеграция с Facebook, реализация и анализ тестов',
            'Технологии' => 'Zend, MySQL, jQuery, AJAX, JSON, Facebook API'
        )),
        array('01/2011 – 05/2011', 'Antalika', 'Middle PHP-developer', 'WituGame', 'http://www.odnoklassniki.ru/apps/witugame', array(
            'Описание проекта' => 'Рекламное приложение для Witu-mobile под Odnoklassniki',
            'Задачи' => 'Разработка приложения, интеграция с Odnoklassniki, админ-панели и аналитики',
            'Технологии' => 'Zend, MySQL, jQuery, AJAX, JSON, Odnoklassniki API'
        )),
        array('01/2011 – 05/2011', 'Middle PHP-developer', 'Klondike', 'http://www.odnoklassniki.ru/apps/witugame', array(
            'Описание проекта' => 'Скандинавские аукционы под VKontakte',
            'Задачи' => 'Разработка приложения, интеграция с VKontakte, админ-панели и аналитики',
            'Технологии' => 'Zend, MySQL, jQuery, AJAX, JSON, VKontakte API'
        )),
        array('08/2010 – 06/2010', 'Antalika', 'Middle PHP-developer', 'OnlineCasino', 'http://betrevolution.com/', array(
            'Описание проекта' => 'Online-казино - покер, рулетка, слот-игры, блэк-джек',
            'Задачи' => 'Разработка игровой логики и обсчета выигрышей, денежные транзакции внутри системы, интеграция с биллинг-сервисом, написание игровых тестов, рефакторинг системы, интеграция с Java-applet',
            'Технологии' => 'Zend, MySQL'
        )),
        array('06/2010 – 01/2010', 'Morphia', 'Middle PHP-developer', 'FlipDrive', 'http://flipdrive.com', array(
            'Описание проекта' => 'Online-хранилище для закачки, хранения, бэкапов и шаринга фото, видео и др.медиа-ресурсов. Имеет свой календарь, органайзер, список контактов и др.модули, которые доступны для авторизованных пользователей',
            'Задачи' => 'Разработка back-end модулей системы, front-end для авторизованных пользователей',
            'Технологии' => 'PHP 5 (Symfony 1.3), MySQL 5, Sqlite, JavaScript (jQuery, AJAX, FullCalendar), PowerUploader'
        )),
        array('10/2009 – 01/2010', 'Web2Inno', 'Middle PHP-developer', 'VDD', 'http://vdd.by', array(
            'Описание проекта' => 'Сайт-каталог на строительную тематику',
            'Задачи' => 'Разработка back-end и front-end системы',
            'Технологии' => 'PHP 5 (cakePHP 1.3), MySQL 5, JavaScript (jQuery, AJAX, CKEditor)'
        )),
        array('05/2009 – 10/2009', 'Web2Inno', 'Middle PHP-developer', 'FeedbackHQ', 'http://feedbackhq.com', array(
            'Описание проекта' => 'Проект для сбора, голосования и публикации отзывов, идей и т.д.',
            'Задачи' => 'Разработка back-end и front-end системы, feedback-виджет и модуль его настройки, интеграция с Amazon Payments AWS',
            'Технологии' => 'PHP 5 (cakePHP 1.3), MySQL 5 , JavaScript (AJAX, jQuery, prototype), AmazonPayments API'
        )),
        array('10/2008 – 05/2009', 'PixPulse', 'PHP-developer', 'BSchool', 'http://thebschool.com/', array(
            'Описание проекта' => 'Cоц.сеть аналогичная Одноклассники',
            'Задачи' => 'Разработка модулей системы, интеграция с ядром системы, тех.поддержка проекта',
            'Технологии' => 'PHP 5 (Zend, smarty), MySQL, JavaScript (AJAX, jQuery, prototype)'
        )),
        array('06/2008 – 10/2008', 'NETRC LLC', 'PHP-developer', 'Gruex', 'http://gruex.ctx.com', array(
            'Описание проекта' => 'Поисковый портал на автомобильную тематику',
            'Задачи' => 'Разработка модулей системы, интеграция с Drupal',
            'Технологии' => 'PHP 5 (Drupal), MySQL, JavaScript (AJAX, jQuery)'
        )),
        array('01/2007 – 06/2008', 'NETRC LLC', 'PHP-developer', 'HFS', 'http://hyperfileshare.com/', array(
            'Описание проекта' => 'Файлообменник с возможностью многопоточного закачивания/скачивания',
            'Задачи' => 'Разработка админ-панели и аналитики, доработка и тех.поддержка проекта',
            'Технологии' => 'PHP 5 (Zend), XML/XSLT, MySQL, JavaScript (AJAX, jQuery)'
        )),
        array('09/2006 – 01/2007', 'IpoHelp', 'PHP-developer', 'IpoHelp', 'http://ipohelp.ru', array(
            'Описание проекта' => 'Информационно-аналитический ресурс на ипотечную тематику',
            'Задачи' => 'Разработка админ-панели и системы публикации, разработка баннеров и информеров, доработка и тех.поддержка проекта, доработка XML сервиса для партнеров сайта',
            'Технологии' => 'PHP 5 (GD 2), XML/XSLT, MySQL, JavaScript (AJAX, jQuery)'
        )),
        array('09/2006 – 01/2007', 'EPAM', 'Support Engineer', 'RenCap', 'http://www.rencap.com/', array(
            'Описание проекта' => 'Информационно-аналитический финансовый портал. Предоставляет пользователям различную финансовую аналитику, новости, подписки, а также информацию по акциям, котировкам, индексам и т.д.',
            'Задачи' => 'Доработка и тех.поддержка проекта, разработка модуля Navigator',
            'Технологии' => 'ASP/VBScript, XML/XSLT, HTML 4, CSS, JavaScript'
        )),
    );
?>
<ul class="stars exp">
<?
    foreach($aItems as $items) {
        expItem($items[0], $items[1], $items[2], $items[3], $items[4], $items[5]);
    }
?>
</ul>

<?
function skillsMatrix($aHead, $headTitle, $aSkills) {
    $aHead[0] = '<span>'.$headTitle.'</span>';
    ?>
    <table class="table skills">
        <thead>
        <tr>
            <?
            foreach($aHead as $title) {
                ?>
                <th><?=$title?></th>
                <?
            }
            ?>
        </tr>
        </thead>
        <tbody>
        <?
        foreach($aSkills as $row) {
            ?>
            <tr>
                <?
                foreach($row as $td) {
                    ?>
                    <td><?=$td?></td>
                    <?
                }
                ?>
            </tr>
            <?
        }
        ?>

        </tbody>
    </table>
    <?
}

function expItem($period, $company, $position, $project, $url, $aItems) {
?>
    <li>
        <span><b><?=$period?></b></span> <b><?=$position?></b><br/>
        <span>Компания:</span> <?=$company?><br/>
        <span>Проект:</span> <?=($url) ? '<a href="'.$url.'" target="_blank">'.$project.'</a>' : $project ?><br/>
<?
    foreach($aItems as $title => $descr) {
?>
        <span><?=$title?>:</span> <?=$descr?><br/>
<?
    }
?>
    </li>
<?
}