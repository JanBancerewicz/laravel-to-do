<?php

namespace App\Http\Controllers\Web;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SiteController extends Controller
{

    public function request(Request $request){
        $name = $request->input('name', 'default_name');

        return $name;
    }

    public function getall(){
        $allArticles = User::all();
        dd( $allArticles);
    }
    
}
