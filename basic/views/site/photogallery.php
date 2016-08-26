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
     <img src="/images/c25a49724df00ebca4f13dbfdd7adeb4.jpg" alt="...">
     <div class="caption">
       <h3>Наши возможности</h3>
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
       <img src="/uploads/240x180/c0fec58e8f40d63407fa3cb6364a5b5a.jpg" alt="...">
       <div class="caption">
         <h3>Коттеджи</h3>
       </div>
     </div>
     </a>
   </div>


   <div class="col-sm-4 col-md-4">
     <a href="/obsestvennye">
      <div class="thumbnail">
        <img src="/uploads/240x180/aa4a3b814aaae48f83c13c95b05de3f5.jpg" alt="...">
        <div class="caption">
          <h3>Общественные</h3>
        </div>
      </div>
      </a>
    </div>


    <div class="col-sm-4 col-md-4">
      <a href="/do-i-posle">
       <div class="thumbnail">
         <img src="/uploads/1000px/2193721e283087f71031cbb56f95929a.jpg" alt="...">
         <div class="caption">
           <h3>До и после</h3>
         </div>
       </div>
       </a>
     </div>


     <div class="col-sm-4 col-md-4">
       <a href="/arhitekturnye-detali-i-elementy">
        <div class="thumbnail">
        <img src="/uploads/240x180/9261c2d20481092d4445854bdfc70798.jpg" alt="...">
          <div class="caption">
            <h3>Архитектурные детали и элементы</h3>
          </div>
        </div>
        </a>
      </div>
