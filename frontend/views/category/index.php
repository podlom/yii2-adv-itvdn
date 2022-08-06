<?php

use yii\helpers\Html;
use yii\data\ActiveDataProvider;
use yii\widgets\ListView;


/**
 * @var string $title
 * @var ActiveDataProvider $dataProvider
 */

echo HTML::tag('h2', $title);

if ($dataProvider->getCount() > 0) {
    echo ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_category_item',
        'itemOptions' => ['tag' => null],
        'options' => ['class' => 'list-group'],
    ]);
}