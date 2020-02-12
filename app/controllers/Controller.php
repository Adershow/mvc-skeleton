<?php 
    namespace controllers;

    class Controller 
    {
        public function loadView($viewName, $data = array()) {
            extract($data);
            include_once 'app/views/'.$viewName.'.php';
        }
    }