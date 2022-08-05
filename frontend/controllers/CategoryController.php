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
        return 'You are on a page category/view/' . $id;
    }
}