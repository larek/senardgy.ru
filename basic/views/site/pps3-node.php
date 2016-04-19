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
    <?= $model->content?>
</div>

<div class="col-md-12">
<a href="/pdf/Album_TR-1 39.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Ситсема ПпС-3</a><br>
<a href="/pdf/Album_TR-1 40.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Схема расположения противопожарных рассечек</a><br>
<a href="/pdf/Album_TR-1 41.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Карты дюбелирования пенополистирольных плит</a><br>
<a href="/pdf/Album_TR-1 42.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Порядок установки стеклотканевых сетокв районе оконных и других проемов</a><br>
<a href="/pdf/Album_TR-1 43.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Порядок кстройства противопожарных рассечек</a><br>
<a href="/pdf/Album_TR-1 44.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Усиление наружного угла цокольного этажа</a><br>
<a href="/pdf/Album_TR-1 45.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Усиление наружного угла здания</a><br>
<a href="/pdf/Album_TR-1 46.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Цоколь</a><br>
<a href="/pdf/Album_TR-1 47.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Примыкание системы к цоколю</a><br>
<a href="/pdf/Album_TR-1 48.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Примыкание системы к цоколю</a><br>
<a href="/pdf/Album_TR-1 49.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Примыкание системы к цоколю</a><br>
<a href="/pdf/Album_TR-1 50.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Примыкание системы к отливу сверху к выступающим элементам здания</a><br>
<a href="/pdf/Album_TR-1 51.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Примыкание системы к мягкой кровле на перепаде высот</a><br>
<a href="/pdf/Album_TR-1 52.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Примыкания системы к оконным отливам (глубокий проем)</a><br>
<a href="/pdf/Album_TR-1 53.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Варианты примыкания системы к оконным рамам, боковые откосы (глубокий проем)</a><br>
<a href="/pdf/Album_TR-1 54.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Варианты примыкания системы к оконным рамам, верх (глубокий проем)</a><br>
<a href="/pdf/Album_TR-1 55.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Варианты примыкания стсемы к оконным рамам, верх (грубокий проем, цокольный этаж)</a><br>
<a href="/pdf/Album_TR-1 56.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Примыкания системы к оконным отливам</a><br>
<a href="/pdf/Album_TR-1 57.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Варианты примыкания систмы к оконным рамам</a><br>
<a href="/pdf/Album_TR-1 58.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Примыкание системы к кровле из горючих материалов</a><br>
<a href="/pdf/Album_TR-1 59.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Примыкание системы к кровле из негорючих материалов</a><br>
<a href="/pdf/Album_TR-1 60.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Устройство горизонтального деформационно-усадочного шва</a><br>
<a href="/pdf/Album_TR-1 61.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Устройство горизонтального деформационно-усадочного шва</a><br>
<a href="/pdf/Album_TR-1 62.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Устройство горизонтального деформационно-усадочного шва в месте расположения противопожарной рассечки</a><br>
<a href="/pdf/Album_TR-1 63.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Схема устройства деформационого шва с закрытием его декоративынм архитектурным элементом</a><br>
<a href="/pdf/Album_TR-1 64.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Схема устройства деформационного шва (в конструкции деформационный шов)</a><br>
<a href="/pdf/Album_TR-1 65.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Схема устройства деформационного шва (в конструкции деформационный шов)</a><br>
<a href="/pdf/Album_TR-1 66.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Ввод комуникаций</a><br>
<a href="/pdf/Album_TR-1 67.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Рольставни</a><br>
<a href="/pdf/Album_TR-1 68.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Порядок дюбелирования пенополистирольной плиты при теплоизоляции горизонтальных поверхностей фасадов</a><br>

<a href="/pdf/Album_TR-1 101.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Карниз</a><br>
<a href="/pdf/Album_TR-1 102.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Карниз наборный</a><br>
<a href="/pdf/Album_TR-1 103.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Раскладка</a><br>
<a href="/pdf/Album_TR-1 104.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Карниз на оштукатуренном фасаде</a><br>
<a href="/pdf/Album_TR-1 105.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Карниз наборный на оштукатуренном фасаде</a><br>
<a href="/pdf/Album_TR-1 106.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Обрамление пожарной лестницы</a><br>
<a href="/pdf/Album_TR-1 107.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Обрамление пожарной лесницы</a><br>
<a href="/pdf/Album_TR-1 108.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Варианты монтажа противопожарных рассечек в зависимости от этажности и расстояний между проемами (оконные, дверные и т.п.)</a><br>
<a href="/pdf/Album_TR-1 109.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Утепление остекленной лоджии. Вариант 1</a><br>
<a href="/pdf/Album_TR-1 110.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Утепление остекленной лоджии. Вариант 2</a><br>
<a href="/pdf/Album_TR-1 111.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Установка системы на внутреннем вертикальном угле здания</a><br>
<a href="/pdf/Album_TR-1 112.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Установка системы на внутреннем вертикальном угле здания</a><br>
</div>

