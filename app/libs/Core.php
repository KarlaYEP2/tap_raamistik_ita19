<?php


class Core
{// class start
    // constructor
    public function __construct(){
        $this->getUrl();
    }
    // get url data
    public function getUrl(){
        if(isset($_GET['url'])){
            $url = $_GET['url'];
            $url = rtrim($url,'/');
            $url = htmlentities($url);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
    }
}//class end