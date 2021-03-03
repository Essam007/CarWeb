<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $comments = Comment::all();
        return view('comments.index', compact('comments'));
    }

    public function create()
    {
        return view('comments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'body'=>'required',
        ]);

        Comment::create($request->all());
        return redirect()->route('comments.index');
    }

    public function show($id)
    {
        $comment = Comment::find($id);
        return view('comments.show', compact('comment'));
    }

    public function deleteComment($comment_id)
    {
        $comment = Comment::find($comment_id);
        if (!$comment)
            return redirect()->back()->with(['error' => __('messages.car not exist')]);

        $comment->delete();
        return redirect()
            ->route('comments.index');
    }

}
