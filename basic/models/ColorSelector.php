<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "colorSelector".
 *
 * @property integer $id
 * @property string $wall
 * @property string $roof
 * @property string $arhElem
 * @property string $windows
 * @property string $tube
 * @property string $link
 */
class ColorSelector extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'colorSelector';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           
            [['wall', 'roof', 'arhElem', 'windows', 'tube', 'link'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'wall' => 'Wall',
            'roof' => 'Roof',
            'arhElem' => 'Arh Elem',
            'windows' => 'Windows',
            'tube' => 'Tube',
            'link' => 'Link',
        ];
    }
}
