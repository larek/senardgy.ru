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
            <table class="tblContent" cellpadding="0" cellspacing="0">
                <colgroup>
                    <col width="14" />
                    <col width="160" />
                    <col width="770" />
                </colgroup>
                <tr>
                   
                    <td class="tdLeftNavigation noPrint">
                        <div class="divBASFLogo"><a href="/en/Pages/default.aspx" title="Home"><img src="http://www.senergy.basf.com/Style%20Library/Custom/Images/1x1tr.gif" border="0" width="160px" height="160px" alt="Home" /></a></div>

                        <div class="divLeftNavigation">

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
                                        <?= Html::a('О нас',['site/view','guid' => 'about'])?>|
                                        <a href="#" title="Партнеры">Партнеры</a>|
                                        <a href="#" title="Новости">Новости</a>|
                                        <a href="#" title="Контакты">Контакты</a>|
                                        <a href="#" title="Обратная связь">Обратная связь</a>
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
                            <tr class="trHeaderNavL2 noPrint">
                                <td colspan="3">
                                    <div class="divHeaderNavL2">
                                        <?= Html::a('Системы утепления', ['site/view' ,'guid' => 'sistemy-uteplenia']);?>|
                                       
                                        <a href="#" title="Продукция">Продукция</a>|
                                        <a href="#" title="Реставрация">Реставрация</a>|
                                        <a href="#" title="Техническая документация">Тех. документация</a>|
                                        <a href="#" title="Техническая поддержка">Тех. поддержка</a>|
                                        <a href="#" title="Текстуры и цвета">Текстуры и цвета</a>|
                                        <a href="#" title="Фотогалерея">Фотогалерея</a>
                                        
                                        
                                    </div>
                                </td>
                            </tr>
                            <tr class="noPrint">
                                <td colspan="3">

    <div class="header_block">
        <a href='/'><img src="/images/logo_senardgy.png"></a>
    </div>


                                </td>
                            </tr>


    <tr>
        <td colspan="3">
            <div class="divContentRectangleWide">
                <div class="divBreadcrump">

                </div>
                <div class="divMainContent" >
                    <?= $content?>

                </div>
            </div>
        </td>
    </tr>


                            <tr class="noPrint">
                                <td colspan="3" class="tdCopyright">
                                    <span id="ctl00_Footer"><table class="tblCopyright" cellspacing="0" cellpadding="0" border="0" style="border-collapse:collapse;">
  <tr>
    <td class="tdCopyrightLeft"><a href="http://www.senergy.basf.com/en/footer/Pages/disclaimer.aspx">Disclaimer</a></td><td class="tdCopyrightLeft"><a href="http://www.senergy.basf.com/en/footer/Pages/credits.aspx">Credits</a></td><td class="tdCopyrightLeft"><a href="http://www.senergy.basf.com/en/footer/Pages/DataProtection.aspx">Data Protection</a></td><td>Copyright 2009 BASF SE</td>
  </tr>
</table></span>
                                    <font color="white">BASFCC.Moss.Core.wsp 1.0.0.12 -  S:24 T:3/2/2016 11:00:08 PM</font>
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
