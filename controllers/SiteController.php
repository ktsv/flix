<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Link;
use yii\data\ActiveDataProvider;

class SiteController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new Link();
//         var_dump(Yii::$app->request->post('Link'));die;
        if ($model->load(Yii::$app->request->post())){
            if (substr($model->long,0,4) != 'http'){
                $model->long = 'http://'.$model->long;
            }
            $model->short= \Yii::$app->shortener->shorten($model->long);
            if ($model->save()){
                $model = new Link();   
            } 
        }
        $provider = new ActiveDataProvider(['query' => Link::find()->orderBy('time desc')]);
        
        return $this->render('index',['model' => $model,'provider' => $provider]);
    }
}
