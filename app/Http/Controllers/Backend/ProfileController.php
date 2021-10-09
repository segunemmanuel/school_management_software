<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Auth;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class ProfileController extends Controller
{
    //

    public function ProfileView(){
    $id=Auth::user()->id;
    $user=User::find($id);
        return view('backend.user.view_profile', compact('user'));
    }



    public function ProfileEdit(){
        $id=Auth::user()->id;
        $editData=User::find($id);
            return view('backend.user.edit_profile', compact('editData'));

    }

    public function ProfileStore(Request $request){
        $id=Auth::user()->id;
        $data=User::find($id);
        // inserting data into db
        $data->name=$request->name;
        $data->email=$request->email;
        $data->mobile=$request->mobile;
        $data->gender=$request->gender;
        $data->usertype=$request->usertype;
        $data->address=$request->address;
        $data->image=$request->image;
        
        
        
        if($request->file('image')){
            $file=$request->file('image');
            @unlink(public_path('upload/user_images/'. $data->image));
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $filename);
            $data['image']=$filename;
        }

        $data->save();
        $notification=[
            'message'=>'User profile updated deleted successfully',
            'alert-type'=>'success'
        
        
        ];
        return redirect()->route('profile.view')->with($notification);
    }



    public function Passview(){

        return view('backend.user.edit_password');
    }

    public function PassUpdate(Request $request){
        $validatedData=$request->validate([
            'oldpassword'=> 'required',
            'password'=>  'required|confirmed',
            ]);
            // Access old password
            $hashedPassword=Auth::user()->password;
            
            // Check if old password is hashed and on form
            if(Hash::check($request->oldpassword, $hashedPassword)){
                // Find user id
                $user=User::find(Auth::id());
                // Access new password field and hash it
                $user->password=Hash::make($request->password);
                $user->save();
                Auth::logout();
                return redirect()->route('login');


            }
            else{
                return redirect()->back();

            }


    }
}

