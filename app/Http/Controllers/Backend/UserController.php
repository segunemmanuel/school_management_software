<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function UserView(){
// $allData=User::all();
$data['allData']=User::all();
return view('backend.user.view_user',$data);

    }


    public function UserAdd(){
        return view('backend.user.add_user');
    }

    public function UserStore(Request $request){

$validatedData=$request->validate([
'email'=> 'required|unique:users',
'name'=>  'required',
]);


// This is how to insert records into the database table
$data=new User();
$data->usertype=$request->usertype;
$data->name=$request->name;
$data->email=$request->email;
$data->password=bcrypt($request->password);
$data->save();

// Using toastr
$notification=[
    'message'=>'User inserted successfully',
    'alert-type'=>'success'


];
return redirect()->route('user.view')->with($notification);
}





    public function UserEdit($id){
$editData= User::find($id); 
return view('backend.user.edit_user', compact('editData'));
    }


public function UserUpdate(Request $request, $id){
  
        // This is how to insert records into the database table
        $data = User::find($id);
        $data->usertype=$request->usertype;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->save();

        // Using toastr
        $notification=[
            'message'=>'User updated successfully',
            'alert-type'=>'info'
        
        
        ];
        return redirect()->route('user.view')->with($notification);

}


public function UserDelete(Request $request, $id){
    $data=User::find($id)->delete();

  // Using toastr
        $notification=[
            'message'=>'User deleted successfully',
            'alert-type'=>'warning'
        
        
        ];
        return redirect()->route('user.view')->with($notification);
}
}
