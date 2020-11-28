<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FeedBackFormRequest;

class FeedbackController extends Controller
{
    //
    public function submit( FeedBackFormRequest $request )
    {
        $request->validated();
        //return dd($request);
    }

    

}
