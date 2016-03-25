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
<div class="col-md-9">
	<table>
		<tr>
			<td><img src="/images/pirog.jpg" alt="" class='systems_item_img'> </td>
			<td>
				<div class='systems_item_wrap'>
					<span class='systems_title'><a href='#'>Сэнарджи ПпС</a></span>
					<p>Краткое описание системы</p>
				</div>
			</td>
		</tr>
	</table>

</div>

<div class="col-md-3">
<div class="systems-line"></div>
	<table>
		<tr>
		
				<div class='systems_quick_links_item_wrap'>
					<span class='systems_title_small'>Быстрые ссылки</span>
					<ul class="systems_list">
						<li><a href="#">Ссылка 1</a></li>
						<li><a href="#">Ссылка 2</a></li>
						<li><a href="#">Ссылка 3</a></li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
</div>
</div>

<br><br>
<div class="row notmargin">
<div class="col-md-9">
	<table>
		<tr>
			<td><img src="/images/pirog.jpg" alt="" class='systems_item_img'> </td>
			<td>
				<div class='systems_item_wrap'>
					<span class='systems_title'><a href='#'>Сэнарджи ПпС-3</a></span>
					<p>Краткое описание системы</p>
				</div>
			</td>
		</tr>
	</table>

</div>

<div class="col-md-3">
<div class="systems-line"></div>
	<table>
		<tr>
		
				<div class='systems_quick_links_item_wrap'>
					<span class='systems_title_small'>Быстрые ссылки</span>
					<ul class="systems_list">
						<li><a href="#">Ссылка 1</a></li>
						<li><a href="#">Ссылка 2</a></li>
						<li><a href="#">Ссылка 3</a></li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
</div>
</div>

<br><br>
<div class="row notmargin">
<div class="col-md-9">
	<table>
		<tr>
			<td><img src="/images/pirog.jpg" alt="" class='systems_item_img'> </td>
			<td>
				<div class='systems_item_wrap'>
					<span class='systems_title'><a href='#'>Сэнарджи МвС</a></span>
					<p>Краткое описание системы</p>
				</div>
			</td>
		</tr>
	</table>

</div>

<div class="col-md-3">
<div class="systems-line"></div>
	<table>
		<tr>
		
				<div class='systems_quick_links_item_wrap'>
					<span class='systems_title_small'>Быстрые ссылки</span>
					<ul class="systems_list">
						<li><a href="#">Ссылка 1</a></li>
						<li><a href="#">Ссылка 2</a></li>
						<li><a href="#">Ссылка 3</a></li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
</div>
</div>

<br><br>


<div class="col-md-12">

<?//= $model->content?>
</div>



