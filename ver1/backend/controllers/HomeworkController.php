<?php

/**
 * Team:NKNextTeam
 * Coding by wanghanwei 1811430, 20211127
 * This is the homework controller
 */
namespace backend\controllers;


use yii\web\Controller;

class HomeworkController extends Controller
{
    public function actionTeam()
    {
        return $this->render('team');
    }

    public function actionPerson()
    {
        return $this->render('person');
    }
	    public function actionSysinfo()
    {
        return $this->render('sysinfo');
    }
		 public function actionBackup()
    {
        return $this->render('backup');
    }
}