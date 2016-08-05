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
  <a href="/armiruusaa-steklotkanevaa-setka">
   <div class="thumbnail">
     <img src="/images/setka_av.jpg" alt="...">
     <div class="caption">
       <h3>Армирующая стеклотканевая сетка</h3>
     </div>
   </div>
   </a>
 </div>


 <div class="col-sm-4 col-md-4">
   <a href="/plastikovyj-armiruusij-ugolok">
    <div class="thumbnail">
      <img src="/images/ugolok.jpg" alt="...">
      <div class="caption">
        <h3>Пластиковый армирующий уголок</h3>
      </div>
    </div>
    </a>
  </div>


  <div class="col-sm-4 col-md-4">
    <a href="/mineralovatnaa-plita">
     <div class="thumbnail">
      <img src="/images/mineralovatnayaPlita.jpg" alt="...">
       <div class="caption">
         <h3>Минераловатная плита</h3>
       </div>
     </div>
     </a>
   </div>


   <div class="col-sm-4 col-md-4">
     <a href="/penopolisterol">
      <div class="thumbnail">
      <img src="/images/penopolisterol.jpg" alt="...">
        <div class="caption">
          <h3>Пенополистерол</h3>
        </div>
      </div>
      </a>
    </div>


    <div class="col-sm-4 col-md-4">
      <a href="/ankernyj-komplekt">
       <div class="thumbnail">
         <img src="/images/dubel.jpg" alt="...">
         <div class="caption">
           <h3>Анкерный комплект (тарельчатый дюбель)</h3>
         </div>
       </div>
       </a>
     </div>
