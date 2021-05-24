<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like($post_id , Request $request)
    {
        Like::create([
            'post_id' => $post_id,
            'ip' => $request->ip()
        ]);
        return redirect('/');
    }

    public function dislike($post_id , Request $request)
    {
        Like::where('ip',$request->ip())->where('post_id',$post_id)->delete();
        return redirect('/');
    }
}
