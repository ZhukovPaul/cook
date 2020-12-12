<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Models\Recipe;

class NewsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        return  dd( $request);
    }

    public function show($slug){
       
        $recipe = Recipe::where('slug',$slug)->first();
         
        if( !$recipe){
            abort('404');
        }
    
        return view('newsitem',[
            'recipe' =>$recipe
        ]);
    }
}
