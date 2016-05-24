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

  <nav class="navbar navbar-default">
  <div class="container-fluid">


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/opisanie-i-sostav-2">Описание и состав</a></li>
        <li><a href="/montaz-2">Монтаж</a></li>
        <li><a href="/trebovania-k-komponentam-2">Требования к компонентам</a></li>
        <li><a href="/pismo-cniisk-2">Письмо ЦНИИСК</a></li>
        <li><a href="/pps3-node">Узлы</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</div>
<div class="col-md-12">
	<div class="system-schema">
	<div class="line" style="width: 350px;margin: 34px 0px 0px 140px;"><a href="/senardzir-prajm">Прайм (грунтовка)</a></div>
	<div class="line" style="width: 350px;margin: 56px 0px 0px 140px;"><a href="/senardzir-adgeziv">Адгезив (клеевой состав)</a></div>
	<div class="line" style="width: 350px;margin: 78px 0px 0px 140px;"><a href="/penopolisterol">Пенополистерол</a></div>
	<div class="line" style="width: 300px;margin: 100px 0px 0px 190px;"><a href="/senardzir-adgeziv">Адгезив (армирующий состав)</a></div>
	<div class="line" style="width: 310px;margin: 122px 0px 0px 180px;"><a href="/armiruusaa-steklotkanevaa-setka">Армирующая сетка</a></div>
	<div class="line" style="width: 300px;margin: 144px 0px 0px 190px;"><a href="/senardzir-cvetoprajm">Цветопрайм</a></div>
	<div class="line" style="width: 300px;margin: 166px 0px 0px 190px;"><a href="/dekorativno-zasitnaa-stukaturka">Декоративно-защитная штукатурка</a></div>


	<img src="/images/pps3.png" class="img-responsive" alt="" style='width:270px'>
	</div>
</div>




<div class="col-md-12">
    <?= $model->content?>
</div>
