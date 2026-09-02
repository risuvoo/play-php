<?php

try{
    throw new Exception("There is a Error");
}catch(Exception $e){
    echo $e->getMessage();
}finally{
    echo "Process completed";
}