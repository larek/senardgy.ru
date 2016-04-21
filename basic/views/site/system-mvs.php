<?
use app\components\TreeView;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;


$this->title = $title;

foreach ($parents_array as $item) {
    $this->params['breadcrumbs'][] = ['label' => $item['label'], 'url' => ['site/view', 'guid' => $item['url']]];
}
$this->params['breadcrumbs'][] = ['label' => $title];
$this->params['SideMenu'] = TreeView::widget(['id' => $rootParent, 'guid' =>$guid]);
?>


<div class="col-md-12">
    <h1><?= $model->title;?></h1>
</div>


<div class="col-md-5">
	<img src="/images/mvs.jpg" class="img-responsive" alt="">
</div>
<div class="col-md-6"></div>
<div class="col-md-12">
	
</div>

<div class="col-md-12">
    <?= $model->content?>
</div>




