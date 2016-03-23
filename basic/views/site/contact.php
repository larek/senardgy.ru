<?
use app\components\SideMenu;
use yii\helpers\Html;


$this->title = $title;

?>

<table class="tblContent" cellpadding="0" cellspacing="0">
        <tr>

            <td class="tdLeftNavigation noPrint">

                <div class="divLeftNavigation">

                    <div class="divLeftNavL">
					<?= SideMenu::widget(['model' => $model_child,'guid' => $guid]); ?>

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
                                    
									<?//content of the view?>
<div class="col-md-12">
<h1><?= $model->title;?></h1>
</div>

    <div class='col-md-12'>
        <?= $model->content?>
    </div>
    <br><br>
    <div class='col-md-12' style='height:400px; margin-top:30px;'>
<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=P7eHtpha6R2iBTUOXv6Np9T_WtOCDtCm&width=100%&height=300&lang=ru_RU&sourceType=constructor"></script>    </div>
    <br><br>
									<?//end content of the view?>
									

                                </div>
                            </div>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
  </table>



