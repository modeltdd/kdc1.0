<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionTest1(){
        $a=3;
        $b=5;
        $sum=$a+$b;
        
     // echo 'ทดสอบ 1';
        return $this->render('test1',['sum' => $sum]);
    }
}
