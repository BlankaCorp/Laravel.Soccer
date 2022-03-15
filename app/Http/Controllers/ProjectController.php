<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{   
    public function getData(Request $request){
    $date = "2021-02-07";
    $response = Http::get("https://api.soccersapi.com/v2.2/fixtures/?user=nelghammaz&token=1c69696c66bfb564d98d85c4b22b313a&t=schedule&d=".$date."&league_id=1609");
    return view('index',['response'=>$response]);
    }

}
    
