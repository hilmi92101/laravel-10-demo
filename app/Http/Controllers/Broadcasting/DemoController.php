<?php

namespace App\Http\Controllers\Broadcasting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Events\DemoMessage; 
use Inertia\Inertia;

class DemoController extends Controller
{
    public function demoLanding() 
    { 
        return Inertia::render('Broadcasting/DemoLanding'); 
    }
    
    public function demoTrigger()  
    {  
        return Inertia::render('Broadcasting/DemoTrigger'); 
    }

    public function demoTriggerAttempt()  
    {  
        $message = 'Hello World 123';
        event(new DemoMessage($message));

        return response()->json([   
            'success' => true,   
            'message' => $message,   
        ]);
    }
}
