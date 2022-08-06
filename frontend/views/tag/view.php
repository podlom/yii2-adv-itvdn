<?php

use yii\helpers\Html;
use yii\data\ActiveDataProvider;
use yii\widgets\ListView;
use frontend\models\Tag;


/**
 * @var Tag $model
 * @var ActiveDataProvider $dataProvider
 */

echo Html::tag('h1', Yii::t('frontend', 'News with tag') . ' ' . $model->title);

if ($dataProvider->getCount() > 0) {

    echo ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '//news/_news_item_short',
        'itemOptions' => ['tag' => null],
        'options' => ['class' => 'list-group'],
    ]);
}

echo Html::tag(
    'p',
    Html::a(Yii::t('frontend', 'Go back'), ['tag/index'], ['class' => 'btn btn-default']),
    ['class' => 'text-right']
);