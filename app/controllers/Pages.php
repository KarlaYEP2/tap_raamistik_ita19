<?php


class Pages extends Controller
{

    /**
     * Pages constructor.
     */
    public function __construct()
    {
        echo 'Pages class has been loaded<br>';
    }

    public function index(){
        echo 'index method has been loaded<br>';
        $this->view('index');
    }
    public function about(){
        echo 'about method has been loaded<br>';
        $this->view('about');
    }
}