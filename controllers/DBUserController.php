<?php

namespace app\controllers;

use app\models\DBUser;
use app\models\DBUserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DBUserController implements the CRUD actions for DBUser model.
 */
class DBUserController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Creates a new DBUser model.
     * If creation is successful, the browser will be redirected to the 'login' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DBUser();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())){ 
                $model->password = sha1($model->password);

                if($model->save()) {
                    return $this->redirect(['site/login']);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
}
