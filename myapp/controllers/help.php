<?php

class Help extends Controller {
    function __construct() {
        parent::__construct();
        // echo "Help controller...";
        $this->view->render('help/index');
    }
}