<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('index');
        echo view('layout/footer');
    }

    public function about()
    {
        echo view('layout/header');
        echo view('about');
        echo view('layout/footer');
    }

    public function contact()
    {
        echo view('layout/header');
        echo view('contact');
        echo view('layout/footer');
    }

    public function fullwidth()
    {
        echo view('layout/header');
        echo view('layout/fullwidth');
        echo view('layout/footer');
    }

    public function rightsidebar()
    {
        echo view('layout/header');
        echo view('layout/rightsidebar');
        echo view('layout/footer');
    }

    public function leftsidebar()
    {
        echo view('layout/header');
        echo view('layout/leftsidebar');
        echo view('layout/footer');
    }

    public function leftrightsidebar()
    {
        echo view('layout/header');
        echo view('layout/leftrightsidebar');
        echo view('layout/footer');
    }

}  