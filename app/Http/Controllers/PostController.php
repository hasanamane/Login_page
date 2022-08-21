<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{   public function index(){
        $posts = DB::table('posts')->get();
        return view('posts.index',compact('posts'));
    }
    public function create(){
        return view('posts.create');
    }
    public function insert(Request $request){
     DB::table('posts')->insert([
         'title'=>$request->title,
         'body'=>$request->body

     ]);
     return response('<div style="max-width: 600px ; color: white; margin-left: auto;margin-right: auto; "><h1 style="text-align: center; background-color: yellowgreen;color: white;padding: 20px;border-radius: 2px solid ;">Done add successfully</h1> <a href="/post/index" style="text-align: center; max-width: 600px;margin-left: auto;margin-right: auto; background-color: yellowgreen;color: white;padding: 20px;border-radius: 2px solid ; text-decoration: none; width:200px;">Show Posts</a></div>');

    }
}
