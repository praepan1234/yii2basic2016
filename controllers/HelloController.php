<?php

namespace app\controllers;

class HelloController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $title='สวัสดีจ้า';
        
        $person = [
            ['fname' => 'สมชาย', 'lname' => 'ใจดี', 'email' => 'som@hotmail.com'],
            ['fname' => 'สมหญิง', 'lname' => 'ใจงาม', 'email' => 'ying@hotmail.com'],
            ['fname' => 'กิตตนันท์', 'lname' => 'สายะเวส', 'email' => 'ae@hotmail.com']
        ];
        
        return $this->render('index',['title'=>$title,'person'=>$person]);
    }

}
