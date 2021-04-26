<?php


class Pages extends Controller
{

    /**
     * Pages constructor.
     */
    public function __construct()
    {
      $this->pagesModel = $this->model('Page');
    }

    public function index(){
        //echo 'index method has been loaded<br>';
        $data = array(
            'title' => 'THE PAGES PAGE :I',
            'content' => 'PAGES HAS BEEN LOADED LIKE ALWAYS BY MVC'
        );
        $this->view('pages/index', $data);
    }
    public function about(){
        //echo 'about method has been loaded<br>';
        $data = array('content' => 'PAGES ABOUT HAS BEEN LOADED BY MVC');
        $this->view('pages/about', $data);
    }
}