<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function save(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'comment' => 'required',
            'blog_id' => 'required',
        ]);

        $name = $request -> name;
        $email = $request -> email;
        $comment = $request -> comment;
        $blog_id = $request -> blog_id;
        Comment::create([
            'blog_id' => $blog_id,
            'comment' => $comment,
            'name' => $name,
            'email' => $email,
            'status' => "view"
            ]);

        $request->session()->flash('success', 'Success add comment');
        return redirect()->back();
    }

    public function list(Request $request, $blog_id){

        $comment = Comment::where('blog_id', $blog_id)
                -> paginate(10);
        return $comment;
    }
}
