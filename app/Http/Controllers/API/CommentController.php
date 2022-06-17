<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request) {
        $comment = new Comment;
        $comment->comment = $request->input('comment');
        $comment->save();

        return response()->json([
            'status'=> 200,
            'message'=>'Comment Added Successfully'
        ]);

    }
}
