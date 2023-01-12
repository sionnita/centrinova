<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SlideController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('block-user');
    }

    public function save(Request $request){
        $request->validate([
            'image' => 'required|max:30000|mimes:jpeg,png,jpg',
        ]);

        $tujuan_upload = 'assets/images/slide';
        // menyimpan data file yang diupload ke variabel $file
        $file_id = $request->file('image');
        $name_file_id = md5(rand()) . '.' .$file_id->getClientOriginalExtension();;
        $file_id->move($tujuan_upload,$name_file_id);

        Slide::create([
            'images' => $tujuan_upload."/".$name_file_id,
            'status' => "view"
            ]);

        $request->session()->flash('success', 'Success add slide image');
        return redirect()->back();
    }

    public function list(Request $request){

        $slide = Slide:: paginate(10);
        return view('pages.admin.slide.list',compact('slide'))->with('i', (request()->input('page',
                    1) - 1) * 10);;
    }

    public function status(Request $request,$id)
    {

        $slide = Slide::where('id', $id)
            -> first();

        if($slide){
            $status = $slide -> status;
            $view = "hidden";
            if($status == "hidden"){
                $view = "view";
            }

            $slide -> status = $view;
            $slide -> save();

            $request->session()->flash('success', 'Success change status');
            // return view('online.input-kyc');
            return redirect()->back();
        }else{
            $request->session()->flash('failed', 'Data not found');
            // return view('online.input-kyc');
            return redirect()->back();
        }


    }
}
