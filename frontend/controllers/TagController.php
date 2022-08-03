<?php

namespace frontend\controllers;


use yii\web\Controller;


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
        return 'You are on a page tag/index';
    }

    /**
     * @param int $id
     * @return string
     */
    public function actionView($id)
    {
        return 'You are on a page tag/view/' . $id;
    }
}