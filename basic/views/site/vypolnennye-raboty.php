<?
use app\components\TreeView;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\components\Gallery;


$this->title = $title;

foreach ($parents_array as $item) {
    $this->params['breadcrumbs'][] = ['label' => $item['label'], 'url' => ['site/view', 'guid' => $item['url']]];
}
$this->params['breadcrumbs'][] = ['label' => $title];
$this->params['SideMenu'] = TreeView::widget(['id' => $rootParent, 'guid' =>$guid]);
$this->registerJsFile('//assets.pinterest.com/js/pinit.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>


<div class="col-md-12">
    <h1><?= $model->title;?></h1>
</div>

<div class="col-md-12">
    <?= $model->content?>
</div>

<div class="">
<a data-pin-do="embedBoard" data-pin-lang="ru" data-pin-board-width="690" data-pin-scale-height="600" data-pin-scale-width="150" href="https://ru.pinterest.com/bril007/%D0%90%D0%90%D0%90-%D1%81%D1%8D%D0%BD%D0%B5%D1%80%D0%B4%D0%B6%D0%B8"></a>
</div>