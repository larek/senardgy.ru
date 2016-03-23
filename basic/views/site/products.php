<?
use app\components\SideMenu;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;


$this->title = $title;
foreach ($parents_array as $item) {
	$this->params['breadcrumbs'][] = ['label' => $item['label'], 'url' => ['site/view', 'guid' => $item['url']]];
}
$this->params['breadcrumbs'][] = ['label' => $title];

$this->params['SideMenu'] = SideMenu::widget(['model' => $model_child,'guid' => $guid]);

?>


 <div class="col-md-12">
<h1><?= $model->title;?></h1>
</div>

<div class="row notmargin">
<div class="col-md-6">
	<table>
		<tr>
			<td><img src="http://www.senergy.basf.com/en/products/PublishingImages/products_01_wrb.jpg" alt="" class='products_item_img'> </td>
			<td>
				<div class='products_item_wrap'>
					<span class='products_title'><a href='#'>Водо-воздухо отталкивающие грунтовки (праймер)</a></span>
					<ul class="products_list">
						<li><a href="#">"Сэнарджи® Прайм"</a></li>
						<li><a href="#">"Сэнарджи® Цветопрайм"</a></li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
</div>

<div class="col-md-6">
	<table>
		<tr>
			<td><img src="http://www.senergy.basf.com/en/products/PublishingImages/products_02_abc.jpg" alt="" class='products_item_img'> </td>
			<td>
				<div class='products_item_wrap'>
					<span class='products_title'><a href='#'>Адгезив</a></span>
					<ul class="products_list">
						<li><a href="#">"Сэнарджи® Адгезив"</a></li>
						<li><a href="#">"Сэнарджи® Адгезив-СК"</a></li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
</div>
</div>

<br><br>
<div class="row notmargin">
<div class="col-md-6">
	<table>
		<tr>
			<td><img src="http://www.senergy.basf.com/en/products/PublishingImages/products_03_mesh.jpg" alt="" class='products_item_img'> </td>
			<td>
				<div class='products_item_wrap'>
					<span class='products_title'><a href='#'>Армирующая стеклотканевая сетка</a></span>
					
				</div>
			</td>
		</tr>
	</table>
</div>

<div class="col-md-6">
	<table>
		<tr>
			<td><img src="http://www.senergy.basf.com/en/products/PublishingImages/products_05_textured.jpg" alt="" class='products_item_img'> </td>
			<td>
				<div class='products_item_wrap'>
					<span class='products_title'><a href='#'>Декоративно-защитная штукатурка</a></span>
					<ul class="products_list">
						<li><a href="#">"Сэнарджи® Сэнд" и "Сэнарджи® Сахара"</a></li>
						<li><a href="#">"Сэнарджи® Фристайл"</a></li>
						<li><a href="#">"Сэнарджи® Аврора", "Сэнарджи® Аврора Стар", "Сэнарджи® Аврора Корс"</a></li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
</div>

</div>

<div class="col-md-12">

<?= $model->content?>
</div>



