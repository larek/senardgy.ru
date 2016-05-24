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
  <a href="/vypolnennye-raboty">
   <div class="thumbnail">
     <img src="http://placehold.it/240x180" alt="...">
     <div class="caption">
       <h3>Выполненые работы</h3>
     </div>
   </div>
   </a>
 </div>


 <div class="col-sm-4 col-md-4">
   <a href="/mnogoetaznye-zilye">
    <div class="thumbnail">
      <img src="/uploads/240x180/dc4496a4a31c5c0ec9e833028c254777.jpg" alt="...">
      <div class="caption">
        <h3>Многоэтажные жилые</h3>
      </div>
    </div>
    </a>
  </div>


  <div class="col-sm-4 col-md-4">
    <a href="/kottedzi">
     <div class="thumbnail">
       <img src="/uploads/240x180/6dc7b3e8e35602e8b5c67cf7bcbb6cc5.jpg" alt="...">
       <div class="caption">
         <h3>Коттеджи</h3>
       </div>
     </div>
     </a>
   </div>


   <div class="col-sm-4 col-md-4">
     <a href="/obsestvennye">
      <div class="thumbnail">
        <img src="http://placehold.it/240x180" alt="...">
        <div class="caption">
          <h3>Общественные</h3>
        </div>
      </div>
      </a>
    </div>


    <div class="col-sm-4 col-md-4">
      <a href="/do-i-posle">
       <div class="thumbnail">
         <img src="http://placehold.it/240x180" alt="...">
         <div class="caption">
           <h3>До и после</h3>
         </div>
       </div>
       </a>
     </div>


     <div class="col-sm-4 col-md-4">
       <a href="/arhitekturnye-detali-i-elementy">
        <div class="thumbnail">
          <img src="http://placehold.it/240x180" alt="...">
          <div class="caption">
            <h3>Архитектурные детали и элементы</h3>
          </div>
        </div>
        </a>
      </div>