<?php

namespace frontend\controllers;


use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use frontend\models\Category;
use frontend\models\News;


/**
 * News controller
 */
class NewsController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        $title = 'You are on a page news/index';

        $dataProvider = new ActiveDataProvider([
            'query' => News::find()->innerJoinWith('category')
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
        $model = News::findOne($id);

        if (is_null($model)) {
            throw new NotFoundHttpException('News page was not found.');
        }

        return $this->render('view', [
            'model' => $model,
        ]);
    }
}