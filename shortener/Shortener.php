<?php
namespace app\shortener;
use yii\base\Component;

class Shortener extends Component{
    public function shorten($url){
        return substr(hash('md5',$url),0,8);
    }
    
//     public function addChar($hash){
        
//     }
}