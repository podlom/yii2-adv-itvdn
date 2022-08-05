<?php
/**
 * Author: Taraqs Shkodenko <taras@shkodenko.com>
 */

namespace frontend\models;


use yii\db\ActiveRecord;


/**
 * Class Category
 *
 * @package frontend\models
 */
class Category extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return '{{%category}}';
    }
}