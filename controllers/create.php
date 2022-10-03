<?php
class Create extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('create/index');
    }
}