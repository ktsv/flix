<?php
namespace app\models;
class Link extends \app\basemodels\Link {
    
    
    public function rules (){
        return array_merge(parent::rules(),[
                [['long'],'url'],
                [['time'], 'default','value'=> date('Y-m-d H:i:s')]
        ]);
    }
}