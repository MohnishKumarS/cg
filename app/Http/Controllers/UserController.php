<?php

namespace App\Http\Controllers;

use App\Models\PortfolioCategory;
use App\Models\PortfolioGallery;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function portfolio(){
        $cat = PortfolioCategory::all();
        $cat_port = PortfolioGallery::all();
        return view('portfolio',compact('cat','cat_port'));
    }
}
