<?php
/**
 * Author: Taraqs Shkodenko <taras@shkodenko.com>
 */

namespace frontend\models;


use yii\db\ActiveRecord;


/**
 * Class News
 *
 * @package frontend\models
 */
class News extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return '{{%news}}';
    }
}