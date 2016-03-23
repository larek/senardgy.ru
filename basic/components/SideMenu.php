<?
namespace app\components;

use yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\Pages;

class SideMenu extends Widget
{
    public $message;
    public $parent_id;
    public $model;
    public $guid;

    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Hello World';
        }
    }

    public function run()
    {
    
            if(count($this->model)>0){
                                                     
                foreach($this->model as $item){
                   $item->guid == $this->guid ? $active = "hypCurrent" : $active = "";
                echo Html::a($item->title, ['site/view','guid' => $item->guid],['class' => $active]);

                }
                                                                   
            }
        
    }
}
?>