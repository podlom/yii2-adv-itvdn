<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;


/**
 * @var News $model
 */

$description = StringHelper::truncateWords($model->description, 21);

echo Html::a(
    Html::encode($model->title) . Html::tag('br') . Html::tag('small' , $description, ['class' => 'text-muted']),
    ['news/view', 'id' => $model->id],
    ['class' => 'list-group-item']
);
