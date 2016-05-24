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

<div class="col-md-12">
	<p>ЦНИИСК - Центральный научно-исследовательский институт строительных конструкций имени В. А. Кучеренко. Один из ведущих институтов России в области строительства. <a href="http://tsniisk.ru/" target='_blank'><span class='glyphicon glyphicon-link'></span> www.tsniisk.ru</a></p>
	<a href='/pdf/Letter-senardgy.pdf' class='btn btn-primary btn-lg' target='_blank'>Открыть письмо в PDF <span class='glyphicon glyphicon-file'></span> </a>	
</div>

<div class="col-md-12">
    <?= $model->content?>
</div>




