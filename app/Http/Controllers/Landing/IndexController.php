<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Inertia\Inertia;

class IndexController extends Controller
{
    public function index() 
    { 
        return Inertia::render('Landing/Index'); 
    }

    
    public function about()  
    {  
        return Inertia::render('Landing/About'); 
    }
}
