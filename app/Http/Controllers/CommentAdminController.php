<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentAdminController extends Controller
{

    public function list(Request $request,$blog_id)
    {
        $user_id = Auth::user()-> id;
        $data = Comment::whereHas('blog', function ($query) use ($user_id){
                $query->where('user_id',$user_id);
            })
            ->where('blog_id',$blog_id)
            -> paginate(10);
        return view('pages.admin.comment.list',compact('data'))->with('i', (request()->input
                ('page', 1) - 1) * 10);

    }

    public function status(Request $request,$id)
    {
        $user_id = Auth::user()-> id;

        $comment = Comment::whereHas('blog', function ($query) use ($user_id){
            $query->where('user_id',$user_id);
        })
            ->where('id',$id)
            -> first();

        if($comment){
            $status = $comment -> status;
            $view = "hidden";
            if($status == "hidden"){
                $view = "view";
            }

            $comment -> status = $view;
            $comment -> save();

            $request->session()->flash('success', 'Success change status ');
            // return view('online.input-kyc');
            return redirect()->back();
        }else{
            $request->session()->flash('failed', 'Data not found');
            // return view('online.input-kyc');
            return redirect()->back();
        }


    }

    public function delete(Request $request,$id)
    {
        $user_id = Auth::user()-> id;

        $comment = Comment::whereHas('blog', function ($query) use ($user_id){
            $query->where('user_id',$user_id);
        })
            ->where('id',$id)
            -> first();

        if($comment){
            $comment->delete();

            $request->session()->flash('success', 'Success delete');
            // return view('online.input-kyc');
            return redirect()->back();
        }else{
            $request->session()->flash('failed', 'Data not found');
            // return view('online.input-kyc');
            return redirect()->back();
        }
    }

}
