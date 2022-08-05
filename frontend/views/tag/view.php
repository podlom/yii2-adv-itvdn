<?php
/**
 * @var \frontend\models\Tag $model
 */

use yii\helpers\Html;


echo Html::tag('h1', $model->title . ' tag page');

echo Html::tag('h3', ' List of news tagged with ' . $model->title . ' is shown below');
