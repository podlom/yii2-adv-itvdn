<?php
/**
 * Author: Taraqs Shkodenko <taras@shkodenko.com>
 */

namespace frontend\models;


use Yii;
use yii\db\ActiveRecord;


/**
 * Class TagToNews
 * This is the model class for table "{{%tag_to_news}}".
 *
 * @property int $tag_id
 * @property int $news_id
 *
 * @property News $news
 * @property Tag $tag
 *
 * @package frontend\models
 */
class TagToNews extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tag_to_news}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tag_id' => Yii::t('app', 'Tag ID'),
            'news_id' => Yii::t('app', 'News ID'),
        ];
    }

    /**
     * Gets query for [[News]].
     *
     * @return News|null|\yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasOne(News::class, ['id' => 'news_id']);
    }

    /**
     * Gets query for [[Tag]].
     *
     * @return Tag|null|\yii\db\ActiveQuery
     */
    public function getTag()
    {
        return $this->hasOne(Tag::class, ['id' => 'tag_id']);
    }
}
