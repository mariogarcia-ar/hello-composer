<?php 
use \anlutro\cURL\cURL;    

namespace HelloWorld;

class Api
{
    public static function call($url='https://www.google.com')
    {
        $cUrl = new \anlutro\cURL\cURL;
        return $cUrl->get($url);
    }
}