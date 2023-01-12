<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ProfileController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('block-user');
    }

    public function __invoke()
    {
        $user = Auth::user();
        return view('pages.admin.profile',compact('user'));
//        return view('pages.index');
    }


    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string'
        ]);

        $user = Auth::user();
        $user->update($request->all());
        $request->session()->flash('success', 'Successfully updated data profile');
        return redirect()->back();
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required|string|min:8',
            'new_password' => 'required|string|min:8',
            'confirm_password' => 'required|string|min:8|same:new_password',
        ]);

        $users = Auth::user();
        $password = $request->old_password;
        $hasPassword = Hash::check($password,$users->password);
        if ($hasPassword){
            $users->fill([
                'password' => Hash::make($request->new_password)
            ]);
            $users->save();

            $request->session()->flash('success', 'Successfully, updated password');
            return redirect()->back();
        }else {
            $request->session()->flash('failed', 'Failed, password is wrong.');
            return redirect()->back();
        }
    }


}
