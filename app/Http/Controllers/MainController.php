<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;
use App\Models\ContactPage;
use App\Models\HomePage;
use App\Models\ProductPage;
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
        $firstTeam = Team::first();
        return view('about',compact(['aboutpage','teams','firstTeam']));
    }

    public function product()
    {
        $productpage = ProductPage::first();
        return view('product',compact('productpage'));

    }

    public function contact()
    {
        $contactpage = ContactPage::first();
        return view('contact',compact('contactpage'));
    }

    public function GetMembers(Request $request)
    {
        if ($request->ajax()) {

            $id = $request->id;

            $memberSelect = Team::where("id",$id)->first();
            return response()->json(['status'=>'success',$memberSelect]);
        }
    }
    public function mentions()
    {
        return view('mentions');
    }

}
