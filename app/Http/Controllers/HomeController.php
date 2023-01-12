<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{ /**
 * Provision a new web server.
 *
 * @return \Illuminate\Http\Response
 */
    public function __invoke()
    {
        $blog = Blog::where('status','view')
            -> paginate(12);
        $slide = Slide::where('status','view')
            ->get();
        return view('pages.index',compact('blog','slide'))->with('i', (request()->input('page',
                    1) - 1) *
            10);
//        return view('pages.index');
    }

    public function detail(Request $request,$id)
    {
        $blog = Blog::find($id);
        $comments = Comment::where('blog_id', $id)
            -> where('status','view')
            -> paginate(10);
        return view('pages.detail',compact('blog', 'comments'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function index()
    {
        return view('auth.login');
    }


}
