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
                                    <div class="col-md-12">
									<h1><?= $model->title;?></h1>
									</div>

									<div class="col-md-12">
									<?= $model->content?>
									</div>

                                </div>
                            </div>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
  </table>

