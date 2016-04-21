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
			<td><img src="/images/pps.jpg" alt="" class='systems_item_img'> </td>
			<td>
				<div class='systems_item_wrap'>
					<span class='systems_title'><a href='/senardzi-pps'>Сэнарджи ПпС</a></span>
					<p>Система «Сэнарджи® ПпС» предназначена для наружной теплоизоляции фасадов малоэтажных жилых домов(до трех этажей включительно), V степени огнестойкости в соответствии с требованиями действующих норм по тепловой защите зданий, изменения и дополнения их архитектурного облика.</p>
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
						<li><a href="/opisanie-i-sostav">Описание и состав</a></li>
						<li><a href="/montaz">Монтаж</a></li>
						<li><a href="/trebovania-k-komponentam">Требования к компонентам</a></li>
						<li><a href="/pismo-cniisk">Письмо ЦНИИСК</a></li>
						<li><a href="/uzly">Узлы</a></li>
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
			<td><img src="/images/pps3.jpg" alt="" class='systems_item_img'> </td>
			<td>
				<div class='systems_item_wrap'>
					<span class='systems_title'><a href='/senardzi-pps-3'>Сэнарджи ПпС-3</a></span>
					<p>Система «Сэнарджи® ПпС-3» предназначена для наружной теплоизоляции фасадов зданий и

сооружений в соответствии с требованиями действующих норм по тепловой защите зданий,

изменения и дополнения их архитектурного облика</p>
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
						<li><a href="/opisanie-i-sostav-2">Описание и состав</a></li>
						<li><a href="/montaz-2">Монтаж</a></li>
						<li><a href="/trebovania-k-komponentam-2">Требования к компонентам</a></li>
						<li><a href="/pismo-cniisk-2">Письмо ЦНИИСК</a></li>
						<li><a href="/pps3-node">Узлы</a></li>
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
			<td><img src="/images/mvs.jpg" alt="" class='systems_item_img'> </td>
			<td>
				<div class='systems_item_wrap'>
					<span class='systems_title'><a href='/senardzi-mvs'>Сэнарджи МвС</a></span>
					<p>Система «Сэнарджи® МВС» предназначена для наружной теплоизоляции фасадов зданий и

сооружений в соответствии с требованиями действующих норм по тепловой защите зданий,

изменения и дополнения их архитектурного облика</p>
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
						<li><a href="/opisanie-i-sostav-3">Описание и состав</a></li>
						<li><a href="/montaz-3">Монтаж</a></li>
						<li><a href="/trebovania-k-komponentam-3">Требования к компонентам</a></li>
						<li><a href="/pismo-cniisk-3">Письмо ЦНИИСК</a></li>
						<li><a href="/mvs-node">Узлы</a></li>
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



