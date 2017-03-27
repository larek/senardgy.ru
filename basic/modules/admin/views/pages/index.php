<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Страницы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать страницу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?
        function get_tree($tree, $pid)
    {
        $html = '';
     
        foreach ($tree as $row)
        {
            if ($row['pid'] == $pid)
            {
                $html .= '<li>' . "\n";
                $html .= '    ' . $row['name'] . "\n";
                $html .= '    ' . get_tree($tree, $row['id']);
                $html .= '</li>' . "\n";
            }
        }
     
        return $html ? '<ul class="tree">' . $html . '</ul>' . "\n" : '';
    }
    ?>
    
        <?= get_tree($pagesArray,0);?>

    
</div>
