<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function getIndex()
    {
    	$view = view('home.index');
    	$view->title = "Welcome";
        $view->description = "Carryout and catering at Gregg's Gourmet Cafe in Clarkston, MI. Pizza, salad, breadsticks and more.";
    	return $view;
    }

    public function getCarryoutMenu()
    {
        $view = view('home.carryout');
        $view->title = "Carryout Menu";
        $view->description = "Carryout menu for Gregg's Gourmet Cafe in Clarkston, MI. Pizza, salad, breadsticks and more.";
        $view->active_page = 'carryout';
        return $view;
    }

    public function getCateringMenu()
    {
        $view = view('home.catering');
        $view->title = "Catering Menu";
        $view->description = "Catering menu for Gregg's Gourmet Cafe in Clarkston, MI. Graduations, open house, weddings and more.";
        $view->active_page = 'catering';
        return $view;
    }

    public function getSpecials()
    {
        $view = view('home.specials');
        $view->title = "Specials";
        $view->description = "Specials at Gregg's Gourmet Cafe in Clarkston, MI. Wings, pasta, subs and more.";
        $view->active_page = 'specials';
        return $view;
    }
}