<?php
    namespace controllers;

    use models\Users as User;
    use controllers\Controller;

    class HomeController extends Controller
    {
        public function index() 
        {
            $users = (array) User::all();
            $this->loadView('index', $users);
        }

        public function findOne($userId)
        {
            $user = (array) User::find(1);
            $this->loadView('index', $user);
        }
    }