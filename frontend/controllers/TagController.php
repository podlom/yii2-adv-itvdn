<?php

namespace frontend\controllers;


use Yii;
use frontend\models\Tag;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;


/**
 * Class TagController
 *
 * @package frontend\controllers
 */
class TagController extends \yii\web\Controller
{

    /**
     * @return string
     */
    public function actionIndex()
    {
        $title = Yii::t('frontend', 'You are on tags index page');

        $model = Tag::find();

        return $this->render('index', [
            'title' => $title,
            'model' => $model,
        ]);
    }

    /**
     * @param $id
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionView($id)
    {
        $model = Tag::findOne($id);

        if ($model === null) {
            throw new NotFoundHttpException(Yii::t('frontend', 'Page not found'));
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $model->getNews(),
            'pagination' => false,
        ]);

        return $this->render('view', [
            'model' => $model,
            'dataProvider' => $dataProvider,
        ]);
    }
}