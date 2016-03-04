<?
use yii\widgets\ListView;
$this->title="Новости";
?>


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
