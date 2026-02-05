<?php

namespace App\Controller;

use App\Core\Controller;
use App\Core\Database;
use App\Repository\UserRepository;

class HomeController extends Controller
{
    public function index()
    {
        $userRepository = new UserRepository();
        $users = $userRepository->findAll();

        $this->render('home', [
            "title" => "home",
            "description" => "home page",
            "age" => "54",
            "users" => $users
        ]);
    }


}