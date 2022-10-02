<?php
class View {
    function __construct() {
        // echo "view template...";
    }

    function render($viewname) {
        require "views/$viewname.php";
    }
}