<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use backend\models\Category;
use backend\helpers\EnabledHelper;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Categories');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="category-index">

    <div>
        <?= Html::a(Yii::t('app', 'Create Category'), ['create'], ['style' => 'float:right;', 'class' => 'btn btn-success']) ?>
        <h1><?= Html::encode($this->title) ?></h1>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            // 'slug',
            'title',
            // 'enabled',
//            [
//                'attribute' => 'enabled',
//                'filter' => EnabledHelper::getEnabledFilter(),
//                'value' => function ($model, $key, $index, $column) {
//                    return EnabledHelper::getEnabledView($model->enabled);
//                }
//            ],
            [
                'attribute' => 'enabled',
                'format' => 'boolean',
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Category $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
