<?php

class shuvo {
    function svo(){
        echo "hi shuvo";
    }
}
class daknam{
    static $name;
    public static function getIndex(){
        if (!self::$name){
            self::$name = new shuvo();
        }
        return self::$name;
    }
}
$amarName = new shuvo();
$amarName->svo();
