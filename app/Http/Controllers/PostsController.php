<?php
/*
 * Duarte Cancela
 * 13683
 * 02/11/20221
 *
 * */

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create(){
        return view('addPost');
    }

    public function store(Request $request){

        $post = $request->all();
        return view('show')->with('post', $post);
    }

}
