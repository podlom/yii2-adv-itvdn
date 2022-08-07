<?php

namespace api\models;


use Yii;


/**
 * This is the model class for table "{{%news}}".
 *
 * @property int $id
 * @property int $category_id
 * @property string $slug
 * @property string $title
 * @property string $description
 * @property int $enabled
 *
 * @property Category $category
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%news}}';
    }

    public function rules()
    {
        return [];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    public function fields()
    {
        return [
            'id',
            'category_id',
            'slug',
            'title',
            'enabled' => function() {
                return Yii::$app->formatter->asBoolean($this->enabled);
            },
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
//    public function getTagToNews()
//    {
//        return $this->hasMany(TagToNews::class, ['news_id' => 'id']);
//    }

    /**
     * @return \yii\db\ActiveQuery
     */
//    public function getTags()
//    {
//        return $this->hasMany(Tag::class, ['id' => 'tag_id'])->via('tagToNews');
//    }
}