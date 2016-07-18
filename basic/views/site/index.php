<?php
use app\components\SideMenu;
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->registerJsFile('/js/fotorama.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerCssFile('/css/fotorama.css');
$this->title = 'Сэнарджи-НН. Системы утепления фасадов.';
$this->params['SideMenu'] = SideMenu::widget(['model' => $model_child,'guid' => $guid]);

?>

<div class="col-md-12">
<div class="panel panel-default">
  <div class="panel-body">
    <div class="starter-template">
        <p class=""> Компания "Сэнарджи®" является разработчиком и производителем систем наружной теплоизоляции фасадов зданий "Сэнарджи® МвС" и "Сэнарджи® ПпС-3". Системы утепления "Сэнарджи®" полностью сертифицированы и имеют Техническое свидетельство.</p>
</div>
  </div>
</div>
</div>

<br><br>

<div class="col-md-12">
  <div class="fotorama"
     data-width="100%"
     data-ratio="2/1"
     data-fit="cover">    
     <img src="/images/slide4.jpg" data-caption="Речной вокзал (г.Нижний Новгород, площадь Маркина, д. 15а)">    <img src="/images/slide2.jpg" data-caption='Комплекс 17-ти этажных жилых домов (г. Нижний Новгород, микрорайон "Молодежный", Автозаводского р-на)'>
    <img src="/images/slide1.jpg" data-caption='Картинная Галерея А.Шилова (г.Москва, ул.Знаменка, д.5)'>
    <img src="/images/slide3.jpg" >
    <img src="/images/slide5.jpg" >
  </div>
</div>

<div class="col-md-4" style="margin-top:20px; text-align:center">
          <img class="" src="/images/pps3.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Системы утепления</h2>
          <p>Системы наружной теплоизоляции фасадов зданий "Сэнарджи ПпС", "Сэнарджи ПпС-3" <br> и "Сэнарджи МвС"</p>
          <p><?= Html::a('Подробнее »',['site/view', 'guid' => 'sistemy-uteplenia'], ['class' => 'btn btn-default']);?></p>
          
</div>

<div class="col-md-4" style="margin-top:20px; text-align:center">
          <img class="img-circle" src="/images/products_01_wrb.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Продукция</h2>
          <p>Водо-воздухо отталкивающие грунтовки (праймер), Адгезив, Армирующая стеклотканевая сетка, Декоративно-защитная штукатурка</p>
          <p><?= Html::a('Подробнее »',['site/view', 'guid' => 'produkcia'], ['class' => 'btn btn-default']);?></p>
</div>

<div class="col-md-4" style="margin-top:20px; text-align:center">
          <img class="img-circle" src="/images/colors.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Текстуры и цвета</h2>
          <p>Мы предлагаем как стандартные цветовые решения так и индивидуальные цвета на заказ</p>
          <p><?= Html::a('Подробнее »',['site/view', 'guid' => 'tekstury-i-cveta'], ['class' => 'btn btn-default']);?></p>
</div>

<div class="row">
<div style='height:100px;width:100%'></div>
</div>





             