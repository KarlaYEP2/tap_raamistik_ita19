<?php


class Core
{// class start
    // construcctor
    public function __construct(){
        $this->getUrl();
    }
    // get url data
    public function getUrl(){
        if(isset($_GET['url'])){
            $url = $_GET['url'];
            echo $url;
        }
    }
}//class end