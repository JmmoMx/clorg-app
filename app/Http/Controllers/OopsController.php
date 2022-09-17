<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OopsController extends Controller {

    public function index(Request $request){

        if($request->input('msg')){
            $msg = $_GET['msg'];
        } else if(session('msg')){
            $msg = session('msg');
        } else {
            $msg = null;
        }

        return view('oops')->with('msg', $msg);
    }

}
