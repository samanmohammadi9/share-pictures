<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $ip=$request->ip();
        $user_likes=Like::where('ip',$ip)->get();
        $posts=Post::OrderBy('id','desc')->get();
        return view('timeline' , compact('posts','user_likes'));

    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $fileName = time().'.'.$request->pic->extension();
        $request->file('pic')->move(public_path('uploads'), $fileName);
        Post::create([
            'full_name' => $request->full_name,
            'caption' => $request->caption,
            'url' => '/uploads/'.$fileName
        ]);
        return redirect('/');
    }
}
