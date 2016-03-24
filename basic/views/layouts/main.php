<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\Pages;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=1024">
    <link rel="icon" href="/favicon.png" type="image/png">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>
<div class="divContent">

    <div class="contact_panel">
        <div class="col-md-8">
        <table class='header_contact'>

                        <tbody>
                            
                            <tr>
                            
                                <td><span class="glyphicon glyphicon-map-marker"></span> Н.Новгород - 8 (831) 220-24-24 | 8 (831) 220-24-67 | 8 (831) 220-24-68 | 8 (831) 220-24-69</td>
                            </tr>
                         
                            
                        
                        </tbody>
        </table>
        </div>
        <div class="col-md-4">
        <table class='header_contact'>
                        <tbody>
                            
                            
                            <tr>
                                <td><span class="glyphicon glyphicon-map-marker"></span> Москва - 8 (495) 741-20-17</td>
                                <td> </td>
                            </tr>
                            
                           
                        </tbody>
        </table>
        </div>
    </div>
    <table class="tblContent" cellpadding="0" cellspacing="0">
        <tr>

            <td class="tdLeftNavigation noPrint">
                <div class="divBASFLogo">
                    <ul class='header_submenu'>
                    <li><?= Html::a('Главная','/')?></li>
                    <li><?= Html::a('О нас',['site/view','guid' => 'about'])?></li>
                    <li><?= Html::a('Партнеры',['site/view','guid' => 'partnery'])?></li>
                    <li><?= Html::a('Новости',['site/view','guid' => 'news']);?></li>
                    <li><?= Html::a('Контакты',['site/view','guid' => 'contacts'])?></li>
                    <li><?= Html::a('Обратная связь',['site/view','guid' => 'callback'])?></li>
                    </ul>
                </div>

            </td>
            <td>
                <table cellpadding="0" cellspacing="0">
                    <colgroup>

                        <col width="526" />
                        <col width="50" />
                        <col width="194" />
                    </colgroup>
                    <tr class="trHeaderNavL1 noPrint">
                        <td>
                            <div class="divHeaderNavL1">
                                
                            </div>
                        </td>
                        <td>
                            <div class="divLanguage">

                            </div>
                        </td>
                        <td class="tdHeaderNavL1Search">
                            <div class="divSearch">

                                <input name="ctl00$SearchBox$SearchTextBox" type="text" id="ctl00_SearchBox_SearchTextBox" tabindex="100" class="txtSearch" onKeyPress="return(clickButton('ctl00_SearchBox_SearchButton', event));" />&#160;&nbsp;<a id="ctl00_SearchBox_SearchButton" tabindex="101" class="hypSearch" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SearchBox$SearchButton&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">Поиск</a>

                            </div>
                        </td>
                    </tr>

                    <tr class="noPrint">
                        <td colspan="3">

                            <div class="header_block">
                                <a href='/'><img src="/images/logo-3.png"></a>
                    
                            </div>

                        </td>
                    </tr>
                    <tr class="trHeaderNavL2 noPrint">
                        <td colspan="3">
                            <div class="divHeaderNavL2">
                                <?= Html::a('Системы утепления', ['site/view' ,'guid' => 'sistemy-uteplenia']);?>|
                                    <?= Html::a('Продукция', ['site/view' ,'guid' => 'produkcia']);?>|
                                        <?= Html::a('Реставрация', ['site/view' ,'guid' => 'restavracia']);?>|
                                            <?= Html::a('Тех. документация', ['site/view' ,'guid' => 'tehniceskaa-dokumentacia']);?>|
                                                <?= Html::a('Тех. поддержка', ['site/view' ,'guid' => 'tehniceskaa-podderzka']);?>|
                                                    <?= Html::a('Текстуры и цвета', ['site/view' ,'guid' => 'tekstury-i-cveta']);?>|
                                                        <?= Html::a('Фотогалерея', ['site/view' ,'guid' => 'fotogalerea']);?>

                            </div>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

   
<table class="tblContent" cellpadding="0" cellspacing="0">
        <tr>

            <td class="tdLeftNavigation noPrint">

                <div class="divLeftNavigation">

                    <div class="divLeftNavL">
                    <?= isset($this->params['SideMenu']) ? $this->params['SideMenu'] : "";?>

                    </div>

                </div>
            </td>
            <td>
                <table cellpadding="0" cellspacing="0">
                    <tr>
                        <td colspan="3">
                            <div class="divContentRectangleWide">
                                <div class="divBreadcrump">

                                </div>
                                <div class="divMainContent">
                         <div class="col-md-12">
                        <?= Breadcrumbs::widget([
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]) ?>
                        </div>
                               <?= $content?>


                                </div>
                            </div>
                            <div class="col-md-12" style='text-align:right;'>
    <script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>
<div class="pluso" data-background="#ebebeb" data-options="medium,round,line,horizontal,nocounter,theme=06" data-services="vkontakte,odnoklassniki,facebook,twitter,pinterest"></div>
</div>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
  </table>

<footer>
    <div class="footer" id="footer">
        
                
                <div class="col-md-2">
                    <a href="#">
                        <img src="/images/doc1.gif"  alt="">
                        <br>
                        <span>Альбом технических решений</span>
                    </a>

                </div>
                 <div class="col-md-2">
                    <a href="#" >
                        <img src="/images/sr1_thumb.jpg"  alt="">
                        <br>
                        <span>Сертификат соответствия</span>
                    </a>

                </div>
                <div class="col-md-2">
                    <a href="#" >
                        <img src="/images/doc3.gif" alt="">
                        <br>
                        <span>Гигиеническое заключение</span>
                    </a>

                </div>
                <div class="col-md-2">
                    <a href="#" >
                        <img src="/images/sr_fire_01_thumb.jpg" alt="">
                        <br>
                        <span>Сертификат пажарной безопасности</span>
                    </a>

                </div>

                <div class="col-md-2">
                    <a href="#" >
                        <img src="/images/gosstroy.png"  style='height:90px' alt="">
                        <br>
                        <span>Техническое сфидетельство на материалы</span>
                    </a>

                </div>

                <div class="col-md-2">
                    <a href="#">
                        <img src="/images/gosstroy.png"  style='height:90px' alt="">
                        <br>
                        <span>Техническое сфидетельство на системы утепления</span>
                    </a>

                </div>
                
           
        
    </div>
    <!--/.footer-->
    
    <div class="footer-bottom">
        <div class="footer_bottom_container">
            <div class="col-md-6">
                <p>© ООО "Сэнарджи-НН". Все права защищены. <?= date("Y");?> г.</p>
            </div>

            <div class="col-md-6">    
                <a href="http://www.tehocenka.ru/registry/fasadnye-sistemy-s-tonkim-narujnym-shtukaturnym-sloem/shtukaturnye-fasadnye-sistemy-na-akrilovoi-osnove" target='_blank'><img src="/images/logo.svg" style="width: 126px;float: right; margin:-5px 0px" alt=""></a>
            </div>

        </div>
    </div>
    <!--/.footer-bottom--> 
</footer>
</div>

               

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
