<?
namespace app\components;

use yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\models\GalleryImages;

class Gallery extends Widget
{
    public $galleryId;

    public function init()
    {
        parent::init();
        if ($this->galleryId === null) {
            $this->galleryId = 1;
        }
    }

    public function run()
    {
      $model = GalleryImages::find()->where(['gallery_id' => $this->galleryId])->orderBy(['timeCreated' => SORT_ASC])->all();
      if($model){
        foreach($model as $img){
          echo Html::beginTag('div',['class' => 'col-md-2']);
          echo Html::beginTag('a', ['class' => 'fancybox', 'href' => "/uploads/1000px/".$img->img, 'rel' => 'group']);
          echo Html::img("/uploads/100x100/".$img->img,['oncontextmenu' => 'return false','class' => 'img-responsive thumbnail']);
          echo Html::endTag('a');
          echo Html::endTag('div');
				}
      }

    }
}
?>
