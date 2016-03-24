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
        <div class="col-md-6">
        <table class='header_contact'>

                        <tbody>
                            
                            <tr>
                                <td><span class="glyphicon glyphicon-map-marker"></span></td>
                                <td>Н.Новгород,&nbsp;ул. Тимирязева, 29Б</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-earphone"></span></td>
                                <td>8 (831) 220-24-24, 8 (831) 220-24-67, 8 (831) 220-24-68, 8 (831) 220-24-69 </td>
                            </tr>
                            
                            <tr>
                                <td><span class="glyphicon glyphicon-envelope"></span></td>
                                <td>senardgy@yandex.ru</td>
                            </tr>
                        </tbody>
        </table>
        </div>
        <div class="col-md-6">
        <table class='header_contact'>
                        <tbody>
                            
                            
                            <tr>
                                <td><span class="glyphicon glyphicon-map-marker"></span></td>
                                <td>Москва,&nbsp;3-й проезд Марьиной Рощи, дом 40, стр.1, оф. 506</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-earphone"></span></td>
                                <td>8 (495) 741-20-17</td>
                            </tr>
                            <tr>
                                <td><span class="glyphicon glyphicon-envelope"></span></td>
                                <td>senardgy@yandex.ru</td>
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
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
  </table>
</div>

               

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
