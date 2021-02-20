<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;
use App\Models\HomePage;
use App\Models\Team;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $homepage = HomePage::first();
        return view('home',compact('homepage'));
    }
    public function about()
    {
        $aboutpage = AboutPage::first();
        $teams = Team::all();
        return view('about',compact(['aboutpage','teams']));
    }
    public function product()
    {
        return view('product');

    }
    public function contact()
    {
        return view('contact');
    }

}
