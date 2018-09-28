<?php

namespace App\Http\Controllers\user;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Registration;
// use App\Http\Controllers\user\Registration;

class UserController extends Controller
{
    public function regStep(Request $request)
    {
       
        // $reg = new Registration();
        // $reg
        $imgPath = "";
        if ($request->hasFile('proimg') && $request->file('proimg')->isValid()) {
            $image = $request->file('proimg');
            $imgPath = $image->store('public/images/' . Auth::id());
        }
        $profile = new Registration($request->all());
        $profile->proimg = $imgPath;
        Auth::user()->Registration()->save($profile);
        return view('home');

    }
}
