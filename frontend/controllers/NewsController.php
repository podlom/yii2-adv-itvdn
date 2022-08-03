<?php

namespace frontend\controllers;


use yii\web\Controller;


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
        return 'You are on a page news/index';
    }

    /**
     * @param int $id
     * @return string
     */
    public function actionView($id)
    {
        return 'You are on a page news/view/' . $id;
    }
}