<?
use yii\widgets\ListView;
$this->title="Новости";
?>


<table class="tblContent" cellpadding="0" cellspacing="0">
        <tr>

            <td class="tdLeftNavigation noPrint">

                <div class="divLeftNavigation">

                    <div class="divLeftNavL">
                    

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
                                <?// content of this view?>


    <!-- Page header -->
<div class="col-md-12">
        <h1>Новости</h1>
</div>

    <!-- /Page header -->


    <!-- Timeline -->
<div class="col-md-12">
    <div class="timeline">

        <!-- Line component -->
        <div class="line text-muted"></div>


        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_item',
            'summary' => false,
        ]);?>



    </div>
</div>
    <!-- /Timeline -->

<br><br>
                                <?//end content of this view?>

                                </div>
                            </div>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
  </table>

