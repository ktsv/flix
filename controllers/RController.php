<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\Link;
use yii\base\Exception;
use yii\db\Command;

class RController extends Controller{
    public function actionIndex($id){
        $model = Link::find()->where(['short'=>$id])->one();
        if ($model){
            $cmd = \Yii::$app->db->createCommand('update link set clicked=clicked+1');
            $cmd->execute();
            $this->redirect($model->long);
        } else {
            throw new Exception('Link not found');
        }
    }
    
    public function actionError(){
        
    }
}