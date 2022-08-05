<?php

namespace frontend\controllers;


use yii\web\Controller;
use frontend\models\Category;
use frontend\models\News;
use yii\web\NotFoundHttpException;


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

        return $this->render('index', [
            'title' => $title
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