<?php
//interface holo akta empty class jar moddhe method thake bt method er kono body part thake na. and take use korte hole kono class er moddhe implements kore overwrite kora jae


//interface

interface School{
     public function mySchool();
}

//implements interface

class teacher implements School{
    
    public function __construct(){
        $this->mySchool();
    }
    public function mySchool(){
        echo "I am a school teacher";
    }
}
$teacher=new teacher();
