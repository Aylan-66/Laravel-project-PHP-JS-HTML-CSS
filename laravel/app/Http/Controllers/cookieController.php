<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controller\Controllers;

class cookieController extends Controller
{
    public function setcookie(Request $request) {
        $value = $request->cookie('name');
        $value = Cookie::get('name');
    }

    public function getcookie(Request $request) {
        return response('Hello World')->cookie(
            'name', 'value', $minutes
        );
    }
}
