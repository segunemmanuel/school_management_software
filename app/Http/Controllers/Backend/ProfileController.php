<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;


class ProfileController extends Controller
{
    //

    public function ProfileView(){
    $id=Auth::user()->id;
    $user=User::find($id);
        return view('backend.user.view_profile', compact('user'));
    }

}

