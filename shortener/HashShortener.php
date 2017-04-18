<?php
namespace app\shortener;
class HashShortener extends Shortener {
    public function shorten($url){
        $hash = hash('md5',$url);
        return substr($url,0,8);
    }
}