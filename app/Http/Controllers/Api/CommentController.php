<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment()
    {
        return response()->json(Comment::get(),200);
    }

    public function combyid($id)
    {
        return response()->json(Comment::find($id),200);
    }
}
