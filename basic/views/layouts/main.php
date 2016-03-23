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
                        <div class="divBASFLogo">
                            <table>
                                <tbody>

                                <tr>
                                <td><span class="glyphicon glyphicon-earphone"></span></td>
                                <td>8 (831) 4-397-397</td>
                                </tr>
                                <tr>
                                <td><span class="glyphicon glyphicon-envelope"></span></td>
                                <td>info@senardgy.ru</td>
                                </tr>
                                <tr>
                                <td><span class="glyphicon glyphicon-map-marker"></span></td>
                                <td>Н.Новгород,&nbsp;ул. Тимирязева, 29Б</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="divLeftNavigation">
                        
                        <div class="divLeftNavL"><a href="/en/platinum-ci-systems/Pages/default.aspx" title="Platinum CI Systems">Platinum CI Systems</a><a href="/en/wall_systems/eifs_drainage/Pages/default.aspx" title="Water Drainage EIFS">Water Drainage EIFS</a><a href="/en/wall_systems/pb/Pages/default.aspx" title="EIFS - Class PB">EIFS - Class PB</a><a href="/en/wall_systems/stucco/Pages/default.aspx" title="Stucco Wall Systems">Stucco Wall Systems</a><a href="/en/wall_systems/stucco_resurfacing_systems/Pages/default.aspx" title="Stucco Resurfacing Systems">Stucco Resurfacing Systems</a><a href="/en/wall_systems/cement_board_stucco/Pages/default.aspx" title="Cement Board Stucco Systems">Cement Board Stucco Systems</a><a href="/en/wall_systems/textured_acrylic/Pages/default.aspx" title="Textured Acrylic Surfacing Systems">Textured Acrylic Surfacing Systems</a><a href="http://www.senergy.basf.com/en/literature/tech_bulletins/Pages/default.aspx#08" title="Warranties">Warranties</a></div>

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
                                        <?= Html::a('Главная','/')?>|
                                        <?= Html::a('О нас',['site/view','guid' => 'about'])?>|
                                        <?= Html::a('Партнеры',['site/view','guid' => 'partnery'])?>|
                                        <?= Html::a('Новости',['site/view','guid' => 'news']);?>|
                                        <?= Html::a('Контакты',['site/view','guid' => 'contacts'])?>|
                                        <?= Html::a('Обратная связь',['site/view','guid' => 'callback'])?>
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
        <a href='/'><img src="/images/logo_senardgy.png"></a>
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


                            
                        </table>
                    </td>
                </tr>
            </table>
        </div>

               

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
