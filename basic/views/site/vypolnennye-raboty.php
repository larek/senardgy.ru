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
<a data-pin-do="embedBoard" data-pin-lang="ru" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://ru.pinterest.com/bril007/%25D0%25B0%25D0%25B0%25D0%25B0-%25D1%2581%25D1%258D%25D0%25BD%25D0%25B5%25D1%2580%25D0%25B4%25D0%25B6%25D0%25B8/"></a>
</div>