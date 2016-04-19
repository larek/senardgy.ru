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
<a href="/pdf/Album_TR-1 69.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Ситсема МвС</a><br>
<a href="/pdf/Album_TR-1 70.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Карты дюбелирования минеральных плит</a><br>
<a href="/pdf/Album_TR-1 71.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Карты дюбелирования минеральных плит (варианты дюбелирования)</a><br>
<a href="/pdf/Album_TR-1 72.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Порядок установки стеклотканевых сеток в районе оконных и других проемов</a><br>
<a href="/pdf/Album_TR-1 73.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Порядок дюбелирования минераловатной плиты</a><br>
<a href="/pdf/Album_TR-1 74.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Усиление наружного угла цокольного этажа</a><br>
<a href="/pdf/Album_TR-1 75.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Усиление наружного угла здания</a><br>
<a href="/pdf/Album_TR-1 76.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Цоколь</a><br>
<a href="/pdf/Album_TR-1 77.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Примыкание системы к цоколю</a><br>
<a href="/pdf/Album_TR-1 78.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Примыкание системы к цоколю</a><br>
<a href="/pdf/Album_TR-1 79.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Примыкание системы к цоколю</a><br>
<a href="/pdf/Album_TR-1 80.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Примыкание системы к отливу сверху к выступающим элементам здания</a><br>
<a href="/pdf/Album_TR-1 81.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Примыкание системы к мягкой кровле на перепаде высот</a><br>
<a href="/pdf/Album_TR-1 82.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Примыкания системы к оконным отливам (глубокий проем)</a><br>
<a href="/pdf/Album_TR-1 83.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Варианты примыкания системы к оконным рамам, боковые откосы (глубокий проем)</a><br>
<a href="/pdf/Album_TR-1 84.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Варианты примыкания системы к оконным рамам, верх (глубокий проем)</a><br>
<a href="/pdf/Album_TR-1 85.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Варианты примыкания системы к оконным рамам, верх (глубокий проем, цокольный этаж)</a><br>
<a href="/pdf/Album_TR-1 86.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Примыкания системы к оконным отливам</a><br>
<a href="/pdf/Album_TR-1 87.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Варианты примыкания системы к оконным рамам</a><br>
<a href="/pdf/Album_TR-1 88.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Примыкание системы к кровле из горючих материалов</a><br>
<a href="/pdf/Album_TR-1 89.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Примыкание системы к кровле из негорючих материалов</a><br>
<a href="/pdf/Album_TR-1 90.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Устройство горизонтального деформационно-усадочного шва</a><br>
<a href="/pdf/Album_TR-1 91.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Устройство горизонтального деформационно-усадочного шва</a><br>
<a href="/pdf/Album_TR-1 92.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Схема устройства деформационного шва с закрытием его декоративнм архитектурным элементом</a><br>
<a href="/pdf/Album_TR-1 93.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Сема устройства деформационного шва (в конструкции деформационный шов)</a><br>
<a href="/pdf/Album_TR-1 94.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Схема устройства деформационного шва (в конструкции деформационный шов)</a><br>
<a href="/pdf/Album_TR-1 95.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Ввод коммуникаций</a><br>
<a href="/pdf/Album_TR-1 96.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Рольставни</a><br>
<a href="/pdf/Album_TR-1 97.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Порядок дюбелирования минераловатной плиты при двухслойной теплоизоляции стен фасадов</a><br>
<a href="/pdf/Album_TR-1 98.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Порядок дюбелирования минераловатной плиты при теплоизоляции горизонтальных поверхностей фасадов</a><br>
<a href="/pdf/Album_TR-1 99.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Порядок дюбелирования минераловатной плиты при двухслойной теплоизоляции горизонтальных поверхностей фасадов</a><br>
<a href="/pdf/Album_TR-1 100.pdf" target='_blank'><span class="glyphicon glyphicon-file"></span> Порядок дюбелирования минераловатной плиты при двухслойной теплоизоляции горизонтальных поверхностей фасадов</a><br>

</div>
