<?php

namespace frontend\controllers;


use yii\web\Controller;
use yii\web\NotFoundHttpException;
use frontend\models\Category;


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
        $model = Category::findOne($id);

        if (is_null($model)) {
            throw new NotFoundHttpException('Category page was not found.');
        }

        return $this->render('view', [
            'model' => $model,
        ]);
    }
}