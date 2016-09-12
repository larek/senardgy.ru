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
?>


<div class="col-md-12">
    <h1><?= $model->title;?></h1>
</div>

<div class="col-md-12">
    <?= $model->content?>
</div>
<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-body">
		<p class=""> Группа Компаний "Сэнарджи®" предоставляет для данной текстуры стандартный набор цветов из нашей колерной карты.</p>
				<img src="/images/avrora2.jpg" class='img img-responsive' alt="">
				<img src="/images/avrora1.jpg" class='img img-responsive' alt="">
		</div>
	</div>
</div>

<div class="">
<?//= Gallery::widget(['galleryId' => 3]);?>
</div>
