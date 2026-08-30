<?php
function formatProfileValue(string $text):string{
   if(is_string($text)){
     $formatedText = trim(ucwords($text));
    return $formatedText;
   }
   return "";
}