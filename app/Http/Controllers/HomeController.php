<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{ /**
 * Provision a new web server.
 *
 * @return \Illuminate\Http\Response
 */
    public function __invoke()
    {
        return view('pages.index');
    }

    public function detail()
    {
        return view('pages.detail');
    }

    public function index()
    {
        return view('auth.login');
    }
}
