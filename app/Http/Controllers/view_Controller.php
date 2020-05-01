<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class view_Controller extends Controller
{
    //
    function home_index ()
    {
        $title = 'inicio';
        $companyName = 'Food Proyect';
        $template = 2;

        switch($template){
            case 1:
                return view('home',
                            [
                                'title' => $title,
                                'companyName' => $companyName
                            ]);
            break;
            case 2:
                return view('home2',    
                            [
                                'title' => $title,
                                'companyName' => $companyName
                            ]);
            break;
        }
    }
}
