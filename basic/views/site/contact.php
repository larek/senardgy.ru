<?
use app\components\SideMenu;
use yii\helpers\Html;


$this->title = $title;
$this->params['breadcrumbs'][] = ['label' => $model->title];
?>

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
									
									



