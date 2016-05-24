<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "GalleryImages".
 *
 * @property integer $id
 * @property integer $gallery_id
 * @property string $img
 * @property string $timeCreated
 */
class GalleryImages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'GalleryImages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gallery_id', 'img'], 'required'],
            [['gallery_id'], 'integer'],
            [['timeCreated'], 'safe'],
            [['img'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gallery_id' => 'Gallery ID',
            'img' => 'Img',
            'timeCreated' => 'Time Created',
        ];
    }
}
