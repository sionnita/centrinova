<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
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
        $type='insert';
        return view('pages.admin.blog.insert',compact('type'));
    }
    public function view_update(Request $request,$id)
    {
        $type='update';
        $blog = Blog::find($id);

        return view('pages.admin.blog.insert',compact('type','blog'));
    }
    public function list(Request $request)
    {
        $data = Blog::where('user_id', Auth::user()->id)
            -> paginate(10);
        return view('pages.admin.blog.list',compact('data'))->with('i', (request()->input('page',
                    1) - 1) * 10);;

    }

  
    public function save(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:255',
            'wysiwyg_editor' => 'required',
            'image' => 'required|max:30000|mimes:jpeg,png,jpg',
        ]);

        $title = $request -> title;
        $content = $request -> wysiwyg_editor;
        $tujuan_upload = 'assets/images/blog';
        // menyimpan data file yang diupload ke variabel $file
        $file_id = $request->file('image');
        $name_file_id = md5(rand()) . '.' .$file_id->getClientOriginalExtension();;
        $file_id->move($tujuan_upload,$name_file_id);

        Blog::create([
            'user_id' => Auth::user()->id,
            'title' => $title,
            'content' => $content,
            'image' => $tujuan_upload."/".$name_file_id,
            'status'=> "view"
        ]);

        $request->session()->flash('success', 'Success upload blog');
        // return view('online.input-kyc');
        return redirect()->back();
    }

    public function status(Request $request,$id)
    {
        $user_id = Auth::user()-> id;

        $blog = Blog::where('id', $id)
                -> where('user_id', $user_id)
                -> first();

        if($blog){
            $status = $blog -> status;
            $view = "hidden";
            if($status == "hidden"){
                $view = "view";
            }

            $blog -> status = $view;
            $blog -> save();

            $request->session()->flash('success', 'Success change status');
            // return view('online.input-kyc');
            return redirect()->back();
        }else{
            $request->session()->flash('failed', 'Data not found');
            // return view('online.input-kyc');
            return redirect()->back();
        }


    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'wysiwyg_editor' => 'required',
            'id' => 'required',
            'image' => 'required|max:30000|mimes:jpeg,png,jpg',
        ]);
        $user_id = Auth::user()-> id;
        $title = $request -> title;
        $content = $request -> wysiwyg_editor;
        $id = $request -> id;
        $tujuan_upload = 'assets/images/blog';
        // menyimpan data file yang diupload ke variabel $file
        $file_id = $request->file('image');
        $name_file_id = md5(rand()) . '.' .$file_id->getClientOriginalExtension();;
        $file_id->move($tujuan_upload,$name_file_id);

        $blog = Blog::where('id', $id)
            -> where('user_id', $user_id)
            -> first();

        if($blog){
            $blog -> title = $title;
            $blog -> content = $content;
            $blog -> image = $tujuan_upload."/".$name_file_id;
            $blog -> save();

            $request->session()->flash('success', 'Success change data');
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

        $blog = Blog::where('id', $id)
            -> where('user_id', $user_id)
            -> first();

        if($blog){
            $blog->delete();

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
