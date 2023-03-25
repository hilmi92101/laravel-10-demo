<?php

namespace App\Http\Controllers\Broadcasting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Pusher\Pusher;
use Inertia\Inertia;

use App\Events\DemoMessage; 

class DemoController extends Controller
{
    public function landing() 
    { 
        return Inertia::render('Broadcasting/DemoLanding'); 
    }
    
    public function triggerPage()  
    {  
        return Inertia::render('Broadcasting/DemoTrigger'); 
    }

    public function triggerPageAttempt()  
    {  
        $message = 'Hello World 123';
        event(new DemoMessage($message));

        return response()->json([   
            'success' => true,   
            'message' => $message,   
        ]);
    }


}
