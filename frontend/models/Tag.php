<?php
/**
 * Author: Taraqs Shkodenko <taras@shkodenko.com>
 */

namespace frontend\models;


use yii\db\ActiveRecord;


/**
 * Class Tag
 *
 * @package frontend\models
 */
class Tag extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return '{{%tag}}';
    }
}