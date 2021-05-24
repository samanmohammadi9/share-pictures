<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    //
    public function store(Request $request)
    {
        Comment::create([
            'post_id' => $request->post_id,
            'full_name' => $request->full_name,
            'text' => $request->text
        ]);
        return redirect('/');
    }
}
