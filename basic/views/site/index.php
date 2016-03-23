<?php
use app\components\SideMenu;
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->registerJsFile('/js/fotorama.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerCssFile('/css/fotorama.css');
$this->title = 'Сенерджи';

?>



<table class="tblContent" cellpadding="0" cellspacing="0">
        <tr>

            <td class="tdLeftNavigation noPrint">

                <div class="divLeftNavigation">

                    <div class="divLeftNavL">
          <?= SideMenu::widget(['model' => $model_child,'guid' => $guid]); ?>

                    </div>

                </div>
            </td>
            <td>
                <table cellpadding="0" cellspacing="0">
                    <tr>
                        <td colspan="3">
                            <div class="divContentRectangleWide">
                                <div class="divBreadcrump">

                                </div>
                                <div class="divMainContent">
                                   <?// content of this view?>


<div class="col-md-12">
  <div class="fotorama"
     data-width="100%"
     data-ratio="2/1"
     data-fit="cover">
    <img src="/images/slide1.jpg" data-caption='Картинная Галерея А.Шилова (г.Москва, ул.Знаменка, д.5)'>
    <img src="/images/slide2.jpg" data-caption='Комплекс 17-ти этажных жилых домов (г. Нижний Новгород, микрорайон "Молодежный", Автозаводского р-на)'>
    <img src="/images/slide3.jpg" >
    <img src="/images/slide4.jpg" data-caption="Речной вокзал (г.Нижний Новгород, площадь Маркина, д. 15а)">
    <img src="/images/slide5.jpg" >
    <img src="/images/slide8.jpg" >
  </div>
</div>

<div class='col-md-12'><h1>ООО "Сенарджи-НН"</h1></div>
                    
<div class="col-md-8">
    <div class="alert alert-info">
        <span class='glyphicon glyphicon-info-sign'></span> Компания "Сэнарджи®" является разработчиком и производителем систем наружной теплоизоляции фасадов зданий "Сэнарджи® МвС" и "Сэнарджи® ПпС-3". Системы утепления "Сэнарджи®" полностью сертифицированы и имеют Техническое свидетельство Росстроя России.
    </div>
    <div class="main_banner_txt">
        Системы утепления
        <br>
        <?= Html::a('Подробнее »',['site/view', 'guid'=>'sistemy-uteplenia']);?>
    </div>
    <img src="/images/senardgy_banner.jpg" class='thumbnail img-responsive'>
</div>

<div class="col-md-4">
    <div class="list-group">

      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">Заголовок блока</h4>
        <p class="list-group-item-text">Краткое описание раздела</p>
      </a>
      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">Заголовок блока</h4>
        <p class="list-group-item-text">Краткое описание раздела</p>
      </a>
      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">Заголовок блока</h4>
        <p class="list-group-item-text">Краткое описание раздела</p>
      </a>
      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">Заголовок блока</h4>
        <p class="list-group-item-text">Краткое описание раздела</p>
      </a>
      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">Заголовок блока</h4>
        <p class="list-group-item-text">Краткое описание раздела</p>
      </a>
      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">Заголовок блока</h4>
        <p class="list-group-item-text">Краткое описание раздела</p>
      </a>
      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">Заголовок блока</h4>
        <p class="list-group-item-text">Краткое описание раздела</p>
      </a>
      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">Заголовок блока</h4>
        <p class="list-group-item-text">Краткое описание раздела</p>
      </a>

    </div>
</div>

<div class="col-md-12">
    <img src='https://placeholdit.imgix.net/~text?txtsize=50&txt=баннер&w=690&h=200' class='img-responsive'>
</div>


<div class="col-md-4" style="margin-top:20px; text-align:center">
          <img class="img-circle" src="https://placehold.it/200x200" alt="Generic placeholder image" width="140" height="140">
          <h2>Заголовок</h2>
          <p>Краткое описание раздела, которое в общих чертах дает пользователю понимание, что находится в самом разделе и есть ли там нужная ему информация</p>
          <p><a class="btn btn-default" href="#" role="button">Подробнее »</a></p>
</div>

<div class="col-md-4" style="margin-top:20px; text-align:center">
          <img class="img-circle" src="https://placehold.it/200x200" alt="Generic placeholder image" width="140" height="140">
          <h2>Заголовок</h2>
          <p>Краткое описание раздела, которое в общих чертах дает пользователю понимание, что находится в самом разделе и есть ли там нужная ему информация</p>
          <p><a class="btn btn-default" href="#" role="button">Подробнее »</a></p>
</div>

<div class="col-md-4" style="margin-top:20px; text-align:center">
          <img class="img-circle" src="https://placehold.it/200x200" alt="Generic placeholder image" width="140" height="140">
          <h2>Заголовок</h2>
          <p>Краткое описание раздела, которое в общих чертах дает пользователю понимание, что находится в самом разделе и есть ли там нужная ему информация</p>
          <p><a class="btn btn-default" href="#" role="button">Подробнее »</a></p>
</div>

<div class="row">
<div style='height:100px;width:100%'></div>
</div>

                                   <?// end content of this view?>

                                </div>
                            </div>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
  </table>





             