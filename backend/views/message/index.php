<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use backend\models\Message;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Messages');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="message-index">

    <div>
        <?= Html::a(Yii::t('app', 'Create Message'), ['create'], ['style' => 'float:right;', 'class' => 'btn btn-success pull-right']) ?>
        <h1><?= Html::encode($this->title) ?></h1>
    </div>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [

            // 'id',
            'source.category',
            'source.message:ntext',
            'language',
            'translation:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Message $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id, 'language' => $model->language]);
                 }
            ],
        ],
    ]); ?>


</div>
