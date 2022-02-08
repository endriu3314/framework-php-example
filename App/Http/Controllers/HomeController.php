<?php

namespace App\Http\Controllers;

use AndreiCroitoru\FrameworkPhp\Controller;
use AndreiCroitoru\FrameworkPhp\Template;

class HomeController extends Controller
{
    public function homeView()
    {
//        header('Content-type: application/json');
        echo json_encode('test');
//        Template::view('home.html', [
//            'title'  => 'Home Page',
//            'colors' => ['red', 'blue', 'green'],
//        ]);
    }
}
