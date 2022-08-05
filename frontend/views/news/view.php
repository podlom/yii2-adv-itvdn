<?php
/**
 * @var \frontend\models\News $model
 */

use yii\helpers\Html;


echo Html::tag('h1', $model->title . ' news page');

echo Html::tag('h3', ' List of news on topic ' . $model->title . ' is shown below');
