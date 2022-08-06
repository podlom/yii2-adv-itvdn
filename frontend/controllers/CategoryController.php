<?php

namespace frontend\controllers;


use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use frontend\models\Category;
use frontend\models\News;


/**
 * Category controller
 */
class CategoryController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        $title = 'You are on a page category/index';

        $dataProvider = new ActiveDataProvider([
            'query' => Category::find()->innerJoinWith('news'),
            'pagination' => [
                'pageSize' => 20,
            ]
        ]);

        return $this->render('index', [
            'title' => $title,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * @param int $id
     * @return string
     */
    public function actionView($id)
    {
        $model = Category::findOne($id);

        if (is_null($model)) {
            throw new NotFoundHttpException('Category page was not found.');
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $model->getNews(),
            'pagination' => false,
        ]);

        return $this->render('view', [
            'model' => $model,
            'dataProvider' => $dataProvider,
        ]);
    }
}