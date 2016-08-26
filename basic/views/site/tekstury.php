<?
use app\components\TreeView;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\models\Gallery;

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

<div class="col-sm-4 col-md-4">
  <a href="/klassik">
   <div class="thumbnail">
     <img src="/uploads/240x180/e9409ab55bbebbdfb6f44f6cb0d7e04f.jpg" alt="...">
     <div class="caption">
       <h3>Классик</h3>
     </div>
   </div>
   </a>
 </div>

 <div class="col-sm-4 col-md-4">
  <a href="/klassik-kors">
   <div class="thumbnail">
     <img src="/uploads/240x180/2cada6bbd5111ab5695b95882bc5e971.jpg" alt="...">
     <div class="caption">
       <h3>Классик Корс</h3>
     </div>
   </div>
   </a>
 </div>

 <div class="col-sm-4 col-md-4">
  <a href="/klassik-amadej">
   <div class="thumbnail">
     <img src="/uploads/240x180/b43cf273837cfc72a26188dc2c6a50fc.jpg" alt="...">
     <div class="caption">
       <h3>Классик Амадей</h3>
     </div>
   </div>
   </a>
 </div>

 <div class="col-sm-4 col-md-4">
  <a href="/send">
   <div class="thumbnail">
     <img src="/uploads/240x180/1a3435359b19d344cdbb9008158a079b.jpg" alt="...">
     <div class="caption">
       <h3>Сенд</h3>
     </div>
   </div>
   </a>
 </div>

 <div class="col-sm-4 col-md-4">
  <a href="/sahara">
   <div class="thumbnail">
     <img src="/uploads/240x180/3c064b6d50327f33fec2da78a319fdde.jpg" alt="...">
     <div class="caption">
       <h3>Сахара</h3>
     </div>
   </div>
   </a>
 </div>

 <div class="col-sm-4 col-md-4">
  <a href="/fristajl">
   <div class="thumbnail">
     <img src="/uploads/240x180/14898a57d9bf966416082b24d2553d57.jpg" alt="...">
     <div class="caption">
       <h3>Фристайл</h3>
     </div>
   </div>
   </a>
 </div>

 <div class="col-sm-4 col-md-4">
  <a href="/avrora">
   <div class="thumbnail">
     <img src="/uploads/240x180/8ded01eb01f8eaeb5d8e82cf759d11e0.jpg" alt="...">
     <div class="caption">
       <h3>Аврора</h3>
     </div>
   </div>
   </a>
 </div>


