<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use function session;

class PostController extends Controller
{
    public function index(Request $request){
        return view('contact.index');
    }

    public function save(Request $request){
        $inputs = $this->validate($request, [
            'name' => 'required|min:4|max:255',
            'message' => 'required'
        ]);

        if(Post::create($request->all())){
            session()->flash('message-post-created', 'Post named '.$inputs['title'].' was successfully created');
        }else{
            session()->flash('message-post-failed', 'There was a problem with adding the post');
        }
        return redirect()->route('contact.index');
    }
}
