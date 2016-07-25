<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function getIndex()
    {
    	$view = view('home.index');
    	$view->title = "Welcome";
        $view->description = "";
    	return $view;
    }
}