<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use backend\models\News;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'News');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <div>
        <?= Html::a(Yii::t('app', 'Create News'), ['create'], ['style' => 'float:right;', 'class' => 'btn btn-success']) ?>
        <h1><?= Html::encode($this->title) ?></h1>
    </div>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category_id',
            'slug',
            'title',
            'description:ntext',
            //'enabled',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, News $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
