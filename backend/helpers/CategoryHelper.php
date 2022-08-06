<?php

namespace backend\helpers;


use backend\models\Category;
use yii\helpers\ArrayHelper;


/**
 * Class CategoryHelper
 */
class CategoryHelper
{

    /**
     * @return array
     */
    public static function getAvailableCategories()
    {
        return ArrayHelper::map(Category::find()->all(), 'id', 'title');
    }
}