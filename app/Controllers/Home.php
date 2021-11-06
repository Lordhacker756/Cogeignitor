<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('index');
    }

    public function about()
    {
        echo view('about');
    }

    public function contact()
    {
        echo view('contact');
    }

    public function fullwidth()
    {
        echo view('layout/fullwidth');
    }

    public function rightsidebar()
    {
        echo view('layout/rightsidebar');
    }

    public function leftsidebar()
    {
        echo view('layout/leftsidebar');
    }

    public function leftrightsidebar()
    {
        echo view('layout/leftrightsidebar');
    }
}
