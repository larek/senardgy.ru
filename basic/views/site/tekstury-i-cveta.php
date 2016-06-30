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
<div class="col-md-6 podbor-cveta">
	<a href="/podbor-cveta">
		<table>
			<tr>
				<td><img src="/images/colors.jpg" alt="" class='products_item_img'> </td>
				<td>
					<div class='products_item_wrap'>
						<span class='products_title'>Подбор цвета</span>
						<br><br>
						<p>Раскрашивайте отдельные элементы дома по собственному желанию и делитесь ссылкой со соим вариантом.</p>
					</div>
				</td>
			</tr>
		</table>
	</a>
</div>

<div class="col-md-6 podbor-cveta">
	<a href="/tekstury">
		<table>
			<tr>
				<td><img src="/images/textures.jpg" alt="" class='products_item_img'> </td>
				<td>
					<div class='products_item_wrap'>
						<span class='products_title'>Текстуры</span>
						<br><br>
					</div>
				</td>
			</tr>
		</table>
	</a>
</div>

</div>


<br><br>


<div class="col-md-12">

<?//= $model->content?>
</div>



