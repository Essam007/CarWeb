<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
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
        return view('comments.index',compact('comments'));
    }

    public function create()
    {
        return view('comments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'body' => 'required',
        ]);

        $input = $request->all();
        $input['user_id'] = auth()->user()->id;

        Comment::create($input);
        return redirect()->route('comments.index');
    }

    public function comments($user_id)
    {
        $users = User::find($user_id);
        $commenter = $users->commenter;
        return view('comments.index', compact('commenter'));
    }

    public function show($id)
    {
        $comment=Comment::find($id);
        return view('comments.show', compact('comment'));
    }

    public function deleteComment($comment_id)
    {
        $comment=Comment::find($comment_id);
        if (!$comment)
            return redirect()->back()->with(['error'=> __('messages.car not exist')]);

        $comment->delete();
        return redirect()
            ->route('comments.index');
    }
}
