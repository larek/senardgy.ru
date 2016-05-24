<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "Gallery".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $meta_description
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Gallery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'image', 'meta_title', 'meta_keywords', 'meta_description'], 'required'],
            [['description', 'meta_description'], 'string'],
            [['title', 'image', 'meta_title', 'meta_keywords'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'image' => 'Image',
            'meta_title' => 'Meta Title',
            'meta_keywords' => 'Meta Keywords',
            'meta_description' => 'Meta Description',
        ];
    }
}
