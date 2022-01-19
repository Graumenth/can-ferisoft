<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('admin/index', ['posts' => $posts]);
    }

    public function destroy(Post $post){
        $post->delete();
        Session::flash('message', 'The post was deleted');
        return back();
    }
}
