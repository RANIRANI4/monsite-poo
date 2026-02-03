<?php

namespace App\Controller;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index(){
        $this->render('home',
            [ "title" => "home",
            "description" => "home page",
            "age" => "54"


        ]);

    }

    public function contact() : void
    {
        $formContent = $_GET["myForm"];

        $this->render('contact',[ "title" => "home",
            "description" => "home page",
            "age" => "54"]);
    }
}