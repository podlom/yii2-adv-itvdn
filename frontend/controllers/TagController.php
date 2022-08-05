<?php

namespace frontend\controllers;


use yii\web\Controller;
use frontend\models\Category;
use frontend\models\News;
use frontend\models\Tag;
use yii\web\NotFoundHttpException;


/**
 * Tag Controller
 */
class TagController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        $title = 'You are on a page tag/index';

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
        $model = Tag::findOne($id);

        if (is_null($model)) {
            throw new NotFoundHttpException('Tag page was not found.');
        }

        return $this->render('view', [
            'model' => $model,
        ]);
    }
}