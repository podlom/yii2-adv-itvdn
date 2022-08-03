<?php

namespace frontend\controllers;


use yii\web\Controller;


class NewsController extends Controller
{
    public function actionIndex()
    {
        return 'You are on a page news/index';
    }

    public function actionView($id)
    {
        return 'You are on a page news/view/' . $id;
    }
}