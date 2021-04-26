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

    public function index()
    {
        $data = array(
            'title' => 'THE PAGES PAGE :I',
            'content' => 'PAGES HAS BEEN LOADED LIKE ALWAYS BY MVC'
        );
        $this->view('pages/index', $data);
    }
}
