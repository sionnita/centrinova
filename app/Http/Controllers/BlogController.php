<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('block-user');
    }

    public function view_insert(Request $request)
    {
        return view('pages.admin.blog.insert');
    }
    public function list(Request $request)
    {
        $data = Blog::where('user_id', Auth::user()->id)
            -> paginate(10);
        return view('pages.admin.blog.list',compact('data'))->with('i', (request()->input('page', 1) - 1) * 20);;

    }

    public function save(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:255',
            'wysiwyg_editor' => 'required',
        ]);

        $title = $request -> title;
        $content = $request -> wysiwyg_editor;

        Blog::create([
            'user_id' => Auth::user()->id,
            'title' => $title,
            'content' => $content,
            'status'=> "view"
        ]);

        $request->session()->flash('success', 'Success upload blog');
        // return view('online.input-kyc');
        return redirect()->back();
    }
}
