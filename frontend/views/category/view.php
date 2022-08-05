<?php
/**
 * @var \frontend\models\Category $model
 */

use yii\helpers\Html;


echo Html::tag('h1', $model->title . ' category page');

echo Html::tag('h3', ' List of news for category ' . $model->title . ' is shown below');
