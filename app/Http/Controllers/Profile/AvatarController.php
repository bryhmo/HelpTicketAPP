<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function update(Request $request){
        // dd($request->_token);
        $request->validate([
            'avatar'=>'image'
        ]);


        // return response()->redirectTo('/profile');
        return back()->with('message','avatar is updated');
    }
}
