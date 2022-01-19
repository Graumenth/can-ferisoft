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

    public function save(){
        $inputs = \request()->validate([
            'name' => 'required|min:4|max:255',
            'message' => 'required'
        ]);

        if(Post::create($inputs)){
            session()->flash('message-post-created', 'Your message was successfully delivered');
        }else{
            session()->flash('message-post-failed', 'There was a problem with sending the message');
        }
        return redirect()->route('contact');
    }
}
