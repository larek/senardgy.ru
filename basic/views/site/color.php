<?
use app\components\TreeView;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

$this->registerJsFile('/js/snap.svg-min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('/js/color.js', ['depends' => '/js/snap.svg-min.js']);

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
    <div class="btn-group" role="group" aria-label="...">
      <span class="btn btn-default color-selector btn-wall active" data="wall">Стены</span>
      <span class="btn btn-default color-selector btn-roof" data="roof">Крыша</span>
      <span class="btn btn-default color-selector btn-plinth hide" data="plinth">Цоколь и трубы</span>
      <span class="btn btn-default color-selector btn-doors hide" data="door">Дверь</span>
      <span class="btn btn-default color-selector btn-windows" data="windows">Окна</span>
      <span class="btn btn-default color-selector btn-arhElem" data="arhElem">Архитектурные элементы</span>
      <span class="btn btn-default color-selector btn-tube" data="tube">Дымоходы</span>
    </div>
</div>

<div class="col-md-12">
    <svg id="svg"></svg>
<div id="ctl00_PlaceHolderMain_ColorComparison_divColors" class="colors">

    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#904d47">
            <div class="ColorComparisonSmallAdd" onclick="addColor('904d47','','Paprika');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Paprika 3025</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#b86c4a">
            <div class="ColorComparisonSmallAdd" onclick="addColor('b86c4a','','Clay Pot');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Clay Pot 3026</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#c49583">
            <div class="ColorComparisonSmallAdd" onclick="addColor('c49583','','Dusty Peach');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Dusty Peach 545</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#ebdac0">
            <div class="ColorComparisonSmallAdd" onclick="addColor('ebdac0','','Pueblo');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Pueblo 3043</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#c4a998">
            <div class="ColorComparisonSmallAdd" onclick="addColor('c4a998','','Slate Rose');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Slate Rose 543</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#aa917d">
            <div class="ColorComparisonSmallAdd" onclick="addColor('aa917d','','Clay');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Clay 614</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#95856c">
            <div class="ColorComparisonSmallAdd" onclick="addColor('95856c','','Ash Brown');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Ash Brown 620</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#7c6a60">
            <div class="ColorComparisonSmallAdd" onclick="addColor('7c6a60','','Sepia');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Sepia 3069</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#b28679">
            <div class="ColorComparisonSmallAdd" onclick="addColor('b28679','','Creme Brule');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Creme Brule 3029</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#b58958">
            <div class="ColorComparisonSmallAdd" onclick="addColor('b58958','','Ground Mace');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Ground Mace 3031</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#e7c7b2">
            <div class="ColorComparisonSmallAdd" onclick="addColor('e7c7b2','','Mannequin');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Mannequin 3027</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#f0d2ba">
            <div class="ColorComparisonSmallAdd" onclick="addColor('f0d2ba','','Melon');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Melon 3032</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#bfa487">
            <div class="ColorComparisonSmallAdd" onclick="addColor('bfa487','','Mosque');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Mosque 3059</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#b59b84">
            <div class="ColorComparisonSmallAdd" onclick="addColor('b59b84','','Hickory');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Hickory 3073</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#9f8c7b">
            <div class="ColorComparisonSmallAdd" onclick="addColor('9f8c7b','','Hazelnut');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Hazelnut 618</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#857252">
            <div class="ColorComparisonSmallAdd" onclick="addColor('857252','','Brunet');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Brunet 3070</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#c1928a">
            <div class="ColorComparisonSmallAdd" onclick="addColor('c1928a','','Strawberry');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Strawberry 3035</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#d9ada0">
            <div class="ColorComparisonSmallAdd" onclick="addColor('d9ada0','','Solitude');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Solitude 3030</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#ddbfb4">
            <div class="ColorComparisonSmallAdd" onclick="addColor('ddbfb4','','Daiquiri');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Daiquiri 3036</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#e1ceca">
            <div class="ColorComparisonSmallAdd" onclick="addColor('e1ceca','','Nirvana');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Nirvana 3042</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#e1ccb7">
            <div class="ColorComparisonSmallAdd" onclick="addColor('e1ccb7','','Blush');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Blush 547</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#b99e89">
            <div class="ColorComparisonSmallAdd" onclick="addColor('b99e89','','Seashell');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Seashell 612</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#beb499">
            <div class="ColorComparisonSmallAdd" onclick="addColor('beb499','','Cardamon');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Cardamon 3052</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#8f705c">
            <div class="ColorComparisonSmallAdd" onclick="addColor('8f705c','','Java');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Java 3071</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#dbb58e">
            <div class="ColorComparisonSmallAdd" onclick="addColor('dbb58e','','Mariposa');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Mariposa 3037</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#f3d9c2">
            <div class="ColorComparisonSmallAdd" onclick="addColor('f3d9c2','','Vintage');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Vintage 3028</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#f9e6d5">
            <div class="ColorComparisonSmallAdd" onclick="addColor('f9e6d5','','Peacherine');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Peacherine 3033</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#e8d9d2">
            <div class="ColorComparisonSmallAdd" onclick="addColor('e8d9d2','','Lotus');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Lotus 3048</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#ddd3ca">
            <div class="ColorComparisonSmallAdd" onclick="addColor('ddd3ca','','Firenze');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Firenze 3041</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#ccb9a8">
            <div class="ColorComparisonSmallAdd" onclick="addColor('ccb9a8','','Pink Ash');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Pink Ash 549</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#a5916e">
            <div class="ColorComparisonSmallAdd" onclick="addColor('a5916e','','Rawhide');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Rawhide 3064</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#84634f">
            <div class="ColorComparisonSmallAdd" onclick="addColor('84634f','','Bulgur');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Bulgur 3072</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#dcbd9e">
            <div class="ColorComparisonSmallAdd" onclick="addColor('dcbd9e','','Tawny');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Tawny 3053</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#e8d2ba">
            <div class="ColorComparisonSmallAdd" onclick="addColor('e8d2ba','','Scarborough');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Scarborough 3038</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#fbead8">
            <div class="ColorComparisonSmallAdd" onclick="addColor('fbead8','','Coral');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Coral 3039</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#f0e5df">
            <div class="ColorComparisonSmallAdd" onclick="addColor('f0e5df','','Sonata');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Sonata 3054</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#d6cfbd">
            <div class="ColorComparisonSmallAdd" onclick="addColor('d6cfbd','','Silverado');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Silverado 600</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#cbc4b2">
            <div class="ColorComparisonSmallAdd" onclick="addColor('cbc4b2','','Sandstorm');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Sandstorm 3103</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#cdb996">
            <div class="ColorComparisonSmallAdd" onclick="addColor('cdb996','','Cafe au Lait');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Cafe au Lait 3060</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#c7ab84">
            <div class="ColorComparisonSmallAdd" onclick="addColor('c7ab84','','Aztec Gold');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Aztec Gold 433</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#d9c195">
            <div class="ColorComparisonSmallAdd" onclick="addColor('d9c195','','Coriander');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Coriander 3074</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#e0d1b2">
            <div class="ColorComparisonSmallAdd" onclick="addColor('e0d1b2','','Bambi');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Bambi 3066</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#eee5dc">
            <div class="ColorComparisonSmallAdd" onclick="addColor('eee5dc','','Artisan');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Artisan 3049</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#efe5db">
            <div class="ColorComparisonSmallAdd" onclick="addColor('efe5db','','Luna');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Luna 3057</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#e3d7c7">
            <div class="ColorComparisonSmallAdd" onclick="addColor('e3d7c7','','Tortilla');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Tortilla 3047</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#e6e0d4">
            <div class="ColorComparisonSmallAdd" onclick="addColor('e6e0d4','','Frappe');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Frappe 3063</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#e7d7be">
            <div class="ColorComparisonSmallAdd" onclick="addColor('e7d7be','','Dune');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Dune 3061</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#c8ad8f">
            <div class="ColorComparisonSmallAdd" onclick="addColor('c8ad8f','','Peanut');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Peanut 3065</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#cabd90">
            <div class="ColorComparisonSmallAdd" onclick="addColor('cabd90','','Sun Glow');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Sun Glow 528</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#d8d1a7">
            <div class="ColorComparisonSmallAdd" onclick="addColor('d8d1a7','','Egg Cream');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Egg Cream 3067</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#eae1d0">
            <div class="ColorComparisonSmallAdd" onclick="addColor('eae1d0','','Ramie');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Ramie 3044</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#f2e6d8">
            <div class="ColorComparisonSmallAdd" onclick="addColor('f2e6d8','','Windsong');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Windsong 3051</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#ebe5cf">
            <div class="ColorComparisonSmallAdd" onclick="addColor('ebe5cf','','Ecru');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Ecru 3080</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#e8e2cc">
            <div class="ColorComparisonSmallAdd" onclick="addColor('e8e2cc','','Angora');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Angora 3062</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#e5dac4">
            <div class="ColorComparisonSmallAdd" onclick="addColor('e5dac4','','Shearling');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Shearling 3055</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#bdae91">
            <div class="ColorComparisonSmallAdd" onclick="addColor('bdae91','','Champagne');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Champagne 361</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#dec99a">
            <div class="ColorComparisonSmallAdd" onclick="addColor('dec99a','','Lions Mane');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Lions Mane 3086</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#f9f7e0">
            <div class="ColorComparisonSmallAdd" onclick="addColor('f9f7e0','','Gauze');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Gauze 3089</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#faf0e4">
            <div class="ColorComparisonSmallAdd" onclick="addColor('faf0e4','','Finesse');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Finesse 3046</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#f5f2eb">
            <div class="ColorComparisonSmallAdd" onclick="addColor('f5f2eb','','Stark White');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Stark White 354</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#f9eddd">
            <div class="ColorComparisonSmallAdd" onclick="addColor('f9eddd','','Edelweiss');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Edelweiss 3045</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#f8eddb">
            <div class="ColorComparisonSmallAdd" onclick="addColor('f8eddb','','Papyrus');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Papyrus 3056</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#e0d5c1">
            <div class="ColorComparisonSmallAdd" onclick="addColor('e0d5c1','','Jute');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Jute 3040</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#c6b796">
            <div class="ColorComparisonSmallAdd" onclick="addColor('c6b796','','Sandman');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Sandman 3105</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#d4ba7f">
            <div class="ColorComparisonSmallAdd" onclick="addColor('d4ba7f','','Empire');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Empire 3081</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#f7e9ce">
            <div class="ColorComparisonSmallAdd" onclick="addColor('f7e9ce','','Honeysuckle');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Honeysuckle 3090</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#fbefdf">
            <div class="ColorComparisonSmallAdd" onclick="addColor('fbefdf','','Egg Nog');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Egg Nog 3084</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#fffffd">
            <div class="ColorComparisonSmallAdd" onclick="addColor('fffffd','','Ultra-White');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Ultra-White 330</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#ebe5d9">
            <div class="ColorComparisonSmallAdd" onclick="addColor('ebe5d9','','Birch');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Birch 3068</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#d5cdb6">
            <div class="ColorComparisonSmallAdd" onclick="addColor('d5cdb6','','Parchment');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Parchment 342</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#d9caab">
            <div class="ColorComparisonSmallAdd" onclick="addColor('d9caab','','Almond');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Almond 431</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#b0a285">
            <div class="ColorComparisonSmallAdd" onclick="addColor('b0a285','','Concord');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Concord 3106</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#9b8e6b">
            <div class="ColorComparisonSmallAdd" onclick="addColor('9b8e6b','','Umber');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Umber 3076</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#e9dabb">
            <div class="ColorComparisonSmallAdd" onclick="addColor('e9dabb','','Custard');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Custard 440</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#f7ebd3">
            <div class="ColorComparisonSmallAdd" onclick="addColor('f7ebd3','','Parsnip');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Parsnip 3075</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#f1e8e3">
            <div class="ColorComparisonSmallAdd" onclick="addColor('f1e8e3','','Nightingale');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Nightingale 3058</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#f4ebe4">
            <div class="ColorComparisonSmallAdd" onclick="addColor('f4ebe4','','Nougat');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Nougat 3050</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#dfd4be">
            <div class="ColorComparisonSmallAdd" onclick="addColor('dfd4be','','Biscuit');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Biscuit 3100</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#d7c8b1">
            <div class="ColorComparisonSmallAdd" onclick="addColor('d7c8b1','','Oatmeal');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Oatmeal 427</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#a6987b">
            <div class="ColorComparisonSmallAdd" onclick="addColor('a6987b','','Sage');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Sage 3107</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#aca26d">
            <div class="ColorComparisonSmallAdd" onclick="addColor('aca26d','','Ocha');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Ocha 3077</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#f6e7d0">
            <div class="ColorComparisonSmallAdd" onclick="addColor('f6e7d0','','Meringue');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Meringue 3085</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#ece5db">
            <div class="ColorComparisonSmallAdd" onclick="addColor('ece5db','','Muslin');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Muslin 3034</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#ebf8ef">
            <div class="ColorComparisonSmallAdd" onclick="addColor('ebf8ef','','Orchid');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Orchid 3096</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#e8e4db">
            <div class="ColorComparisonSmallAdd" onclick="addColor('e8e4db','','Snow');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Snow 410</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#d0cab2">
            <div class="ColorComparisonSmallAdd" onclick="addColor('d0cab2','','Salt White');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Salt White 425</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#c2b3a0">
            <div class="ColorComparisonSmallAdd" onclick="addColor('c2b3a0','','Porridge');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Porridge 610</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#ada894">
            <div class="ColorComparisonSmallAdd" onclick="addColor('ada894','','Badger');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Badger 3108</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#adab6e">
            <div class="ColorComparisonSmallAdd" onclick="addColor('adab6e','','Cumin');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Cumin 3082</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#e2d9ca">
            <div class="ColorComparisonSmallAdd" onclick="addColor('e2d9ca','','Saddlesoap');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Saddlesoap 3097</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#e7e0d8">
            <div class="ColorComparisonSmallAdd" onclick="addColor('e7e0d8','','Dynasty');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Dynasty 601</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#ebf9ea">
            <div class="ColorComparisonSmallAdd" onclick="addColor('ebf9ea','','New Frond');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;New Frond 3092</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#e4e4dc">
            <div class="ColorComparisonSmallAdd" onclick="addColor('e4e4dc','','Harrier');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Harrier 3094</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#cfc8c2">
            <div class="ColorComparisonSmallAdd" onclick="addColor('cfc8c2','','Vibrato');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Vibrato 3101</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#e0d9cf">
            <div class="ColorComparisonSmallAdd" onclick="addColor('e0d9cf','','Crescent');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Crescent 3098</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#9e9d89">
            <div class="ColorComparisonSmallAdd" onclick="addColor('9e9d89','','Putty Grey');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Putty Grey 329</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#bec496">
            <div class="ColorComparisonSmallAdd" onclick="addColor('bec496','','Gold Ochre');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Gold Ochre 3078</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#e5dcbb">
            <div class="ColorComparisonSmallAdd" onclick="addColor('e5dcbb','','Flax');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Flax 3083</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#ecf4df">
            <div class="ColorComparisonSmallAdd" onclick="addColor('ecf4df','','Sprite');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Sprite 3091</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#e4ebd9">
            <div class="ColorComparisonSmallAdd" onclick="addColor('e4ebd9','','Mint Tea');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Mint Tea 3095</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#d5d1c6">
            <div class="ColorComparisonSmallAdd" onclick="addColor('d5d1c6','','Brume');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Brume 3099</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#babeb0">
            <div class="ColorComparisonSmallAdd" onclick="addColor('babeb0','','Dawn Grey');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Dawn Grey 752</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#b7b1a1">
            <div class="ColorComparisonSmallAdd" onclick="addColor('b7b1a1','','Walden');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Walden 3104</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#5f6366">
            <div class="ColorComparisonSmallAdd" onclick="addColor('5f6366','','Grey Cloud');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Grey Cloud 875</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#88b095">
            <div class="ColorComparisonSmallAdd" onclick="addColor('88b095','','Bay Leaf');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Bay Leaf 3079</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#daead0">
            <div class="ColorComparisonSmallAdd" onclick="addColor('daead0','','Cats Eye');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Cats Eye 3088</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#e9ecd1">
            <div class="ColorComparisonSmallAdd" onclick="addColor('e9ecd1','','Mint Aspic');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Mint Aspic 3087</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#d9e9de">
            <div class="ColorComparisonSmallAdd" onclick="addColor('d9e9de','','Glacier');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Glacier 606</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#ccc9c0">
            <div class="ColorComparisonSmallAdd" onclick="addColor('ccc9c0','','London Fog');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;London Fog 869</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#b6b5b1">
            <div class="ColorComparisonSmallAdd" onclick="addColor('b6b5b1','','Morning Mist');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Morning Mist 751</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#bbb9ac">
            <div class="ColorComparisonSmallAdd" onclick="addColor('bbb9ac','','Revere');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Revere 3102</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#8f978c">
            <div class="ColorComparisonSmallAdd" onclick="addColor('8f978c','','Slate Grey');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Slate Grey 877</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#739386">
            <div class="ColorComparisonSmallAdd" onclick="addColor('739386','','Greenbrier');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Greenbrier 609</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#86a192">
            <div class="ColorComparisonSmallAdd" onclick="addColor('86a192','','Glade');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Glade 608</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#9cb6ab">
            <div class="ColorComparisonSmallAdd" onclick="addColor('9cb6ab','','Gem');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Gem 607</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#dfe9e8">
            <div class="ColorComparisonSmallAdd" onclick="addColor('dfe9e8','','Crystal Blue');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Crystal Blue 602</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#c9cec8">
            <div class="ColorComparisonSmallAdd" onclick="addColor('c9cec8','','Seamist');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Seamist 755</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#a9b3b2">
            <div class="ColorComparisonSmallAdd" onclick="addColor('a9b3b2','','Grey Ash');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Grey Ash 3109</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#949995">
            <div class="ColorComparisonSmallAdd" onclick="addColor('949995','','Whale Grey');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Whale Grey 872</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#5f6366">
            <div class="ColorComparisonSmallAdd" onclick="addColor('5f6366','','Storm Grey');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Storm Grey 870</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#5b7081">
            <div class="ColorComparisonSmallAdd" onclick="addColor('5b7081','','Bluet');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Bluet 605</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#98b0bc">
            <div class="ColorComparisonSmallAdd" onclick="addColor('98b0bc','','Truro Blue');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Truro Blue 604</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#abc8d8">
            <div class="ColorComparisonSmallAdd" onclick="addColor('abc8d8','','Atlantis');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Atlantis 603</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#baced9">
            <div class="ColorComparisonSmallAdd" onclick="addColor('baced9','','Robin Egg');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Robin Egg 611</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#c9cec8">
            <div class="ColorComparisonSmallAdd" onclick="addColor('c9cec8','','Seattle Mist');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Seattle Mist 3093</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#9fa7aa">
            <div class="ColorComparisonSmallAdd" onclick="addColor('9fa7aa','','Thundermist');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Thundermist 758</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#9a9fa2">
            <div class="ColorComparisonSmallAdd" onclick="addColor('9a9fa2','','Magnum');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Magnum 757</div>
    </div>
    <div class="ColorComparisonSmall">
        <div class="ColorComparisonSmallColor" style="BACKGROUND-COLOR:#4e4e4e">
            <div class="ColorComparisonSmallAdd" onclick="addColor('4e4e4e','','Charcoal');" title="add color">+</div>
        </div>
        <div class="ColorComparisonSmallText"><strong></strong>&nbsp;Charcoal 880</div>
    </div>
</div>

</div>



