<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Url;

class UrlController extends Controller
{
    function index()
    {

    }

    function GenerateShortUrl(Request $request)
    {
        $domain = "localhost/";
        $outputUrl = $domain;

        $url = $request->input('url');
        //1) check if record is new - else go to step3
        //2) generate the token
        //3) display the url

        $record = Url::where('url', '=', $url)->first();

        if (!empty($record["token"]) && isset($record["token"])){
            $outputUrl .= $record["token"];
        }
        else {
            $token = SHA1($url);
            $token = substr($token, 0,  6);
            $record = Url::Create(array('url' => $url, 'token' => $token));
            $outputUrl.= $record["token"];
        }

        //display the url
        echo $outputUrl;
    }
}
