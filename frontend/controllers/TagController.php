<?php

namespace frontend\controllers;


use yii\web\Controller;


class TagController extends Controller
{
    public function actionIndex()
    {
        return 'You are on a page tag/index';
    }

    public function actionView($id)
    {
        return 'You are on a page tag/view/' . $id;
    }
}