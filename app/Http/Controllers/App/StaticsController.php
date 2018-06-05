<?php

namespace App\Http\Controllers\App;

use App\Models\Pages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaticsController extends Controller
{
    const PATH_VIEW = 'app.entities.statics.';
    const CONTROLLER = 'App\StaticsController@';
    
    public function home(Request $request)
    {
        $page = Pages::find(1);
        return view(self::PATH_VIEW . 'home')->with([
            'page' => $page
        ]);
    }

    public function showBlog(Request $request)
    {
        return view(self::PATH_VIEW . 'blog')->with([

        ]);
    }
    
    
    public function showGaleries(Request $request)
    {
        
        for ($i = 1; $i <= 10; $i++){
            "J'adore $i";
        }
        
        return view(self::PATH_VIEW . 'galeries')->with([
    
        ]);
    }
    
    public function showLogement(Request $request)
    {
        return view(self::PATH_VIEW . 'temoignages')->with([
    
        ]);
    }
    
    public function showReservation(Request $request)
    {
        return view(self::PATH_VIEW . 'reservations.create')->with([
    
        ]);
    }
    
    public function showAcces(Request $request)
    {
        return view(self::PATH_VIEW . 'access')->with([
        
        ]);
    }
}
