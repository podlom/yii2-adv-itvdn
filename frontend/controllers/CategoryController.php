<?php

namespace frontend\controllers;


use yii\web\Controller;


class CategoryController extends Controller
{
    public function actionIndex()
    {
        return 'You are on a page category/index';
    }

    public function actionView($id)
    {
        return 'You are on a page category/view/' . $id;
    }
}