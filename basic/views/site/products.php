<?
use app\components\TreeView;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;


$this->title = $title;
foreach ($parents_array as $item) {
	$this->params['breadcrumbs'][] = ['label' => $item['label'], 'url' => ['site/view', 'guid' => $item['url']]];
}
$this->params['breadcrumbs'][] = ['label' => $title];

$this->params['SideMenu'] = TreeView::widget(['id' => $rootParent, 'guid' => $guid]);

?>


 <div class="col-md-12">
<h1><?= $model->title;?></h1>
</div>

<div class="row notmargin">
<div class="col-md-6">
	<table>
		<tr>
			<td><img src="/images/products_01_wrb.jpg" alt="" class='products_item_img'> </td>
			<td>
				<div class='products_item_wrap'>
					<span class='products_title'>Грунтовки (праймер)</span>
					<ul class="products_list">
						<li><a href="/senardzir-prajm">"Сэнарджи® Прайм"</a></li>
						<li><a href="/senardzir-cvetoprajm">"Сэнарджи® Цветопрайм"</a></li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
</div>

<div class="col-md-6">
	<table>
		<tr>
			<td><img src="/images/products_02_abc.jpg" alt="" class='products_item_img'> </td>
			<td>
				<div class='products_item_wrap'>
					<span class='products_title'>Адгезив (клеевой состав)</span>
					<ul class="products_list">
						<li><a href="/senardzir-adgeziv">"Сэнарджи® Адгезив"</a></li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
</div>
</div>

<br><br>
<div class="row notmargin">
<div class="col-md-12">
	<table>
		<tr>
			<td><img src="/images/products_03_mesh.jpg" alt="" class='products_item_img'> </td>
			<td>
				<div class='products_item_wrap' style='width:524px'>
					<span class='products_title'><a href='/dopolnitelnye-i-vspomogatelnye-materialy'>Дополнительные и вспомогательные материалы</a></span>
					<ul class="products_list">
						<li><a href="/armiruusaa-steklotkanevaa-setka">Армирующая стеклотканевая сетка</a></li>
						<li><a href="/plastikovyj-armiruusij-ugolok">Пластиковый армирующий уголок</a></li>
						<li><a href="/mineralovatnaa-plita">Минераловатная плита</a></li>
						<li><a href="/penopolisterol">Пенополистерол</a></li>
						<li><a href="/ankernyj-komplekt">Анкерный комплект (тарельчатый дюбель)</a></li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
</div>
</div>

<br><br>
<div class="row notmargin">
<div class="col-md-12">
	<table>
		<tr>
			<td><img src="/images/products_05_textured.jpg" alt="" class='products_item_img'> </td>
			<td>
				<div class='products_item_wrap' style='width:524px'>
					<span class='products_title'>Фасадные и интерьерные декоративно-защитные штукатурки</span>
					<ul class="products_list">
						<li><a href="/senardzir-klassik-amadej-senardzir-klassik-senardzir-klasik-kors">Сэнарджи® Классик Амадей, Сэнарджи® Классик, Сэнарджи® Класик Корс
</a></li>
						<li><a href="/senardzir-send-i-senardzir-sahara">"Сэнарджи® Сэнд" и "Сэнарджи® Сахара"</a></li>
						<li><a href="/senardzir-fristajl">"Сэнарджи® Фристайл"</a></li>
						<li><a href="/senardzir-avrora-senardzir-avrora-star-senardzir-avrora-kors">"Сэнарджи® Аврора", "Сэнарджи® Аврора Стар", "Сэнарджи® Аврора Корс"</a></li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
</div>

</div>

<br><br>
<div class="row notmargin">
<div class="col-md-12">
	<table>
		<tr>
			<td><img src="/images/archelem.png" style='border:1px solid #004a96' alt="" class='products_item_img'> </td>
			<td>
				<div class='products_item_wrap' style='width:524px'>
					<span class='products_title'>Архитектурные детали</span>
					<ul class="products_list">
						<li>
							<a href="/pdf/katalog-arhElem-2.pdf" target="_blank">Каталог архитектурных элементов PDF</a>
						</li>
					</ul>
					
				</div>
			</td>
		</tr>
	</table>
</div>

</div>

<div class="col-md-12">

<?//= $model->content?>
</div>



