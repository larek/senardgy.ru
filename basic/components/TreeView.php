<?
namespace app\components;

use yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use app\models\Pages;

class TreeView extends Widget
{
    public $id;
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


        $data = $this->getChilds($this->id);
        echo $tree = $this->getTree($data,$this->id, $this->guid);

        
    }

    protected function getChilds($id){
        static $childs_array = [];
        $models = Pages::find()->where(['parent_id' => $id])->all();
        foreach($models as $model){
            if(isset($model->id)) {
                //$page = Pages::find()->where(['parent_id' => $model->id])->one();
                $childs_array[] = [
                    'id' => $model->id,
                    'pid' => $model->parent_id,
                    'name' => $model->title,
                    'url' => $model->guid,
                    ];
                   $this->getChilds($model->id);
            }
        }
       
        return $childs_array;

    }

    protected function getTree($tree, $pid, $guid)
        {
            $html = '';
         
            foreach ($tree as $row)
            {
                if ($row['pid'] == $pid)
                {
                    $row['url'] == $guid ? $active = "active" : $active = "";
                    $html .= '<li>' . "\n";
                    $html .= '<a href="'. $row['url'] .'" class="'. $active .'">' . "\n";
                    $html .= '    ' . $row['name'] . "\n";
                    $html .= '</a>';
                    $html .= '    ' . $this->getTree($tree, $row['id'], $guid);
                    $html .= '</li>' . "\n";
                }
            }
         
            return $html ? '<ul class="treeview">' . $html . '</ul>' . "\n" : '';
        }
}
?>