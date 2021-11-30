<?php


namespace backend\controllers;


use yii\web\Controller;

class SysController extends Controller
{
    public function actionSys()
    {
        return $this->render('sys');
    }

}