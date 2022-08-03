<?php

namespace frontend\controllers;


use yii\web\Controller;


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
        return 'You are on a page category/index';
    }

    /**
     * @param int $id
     * @return string
     */
    public function actionView($id)
    {
        return 'You are on a page category/view/' . $id;
    }
}