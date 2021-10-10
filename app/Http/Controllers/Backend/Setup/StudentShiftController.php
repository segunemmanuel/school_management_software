<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Models\StudentShift;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentShiftController extends Controller
{


public function ViewShift(){

    $data['allData']=StudentShift::all();
    return view('backend.setup.shift.view_shift',$data);
}


public function AddShift(){
    return view('backend.setup.shift.add_shift');

}


public function StoreShift(Request $request){
    $validatedData=$request->validate([
        'name'=> 'required|unique:student_shifts,name',
        ]);


        $data= new StudentShift();
        $data->name=$request->name;
        $data->save();
        $notification=[
            'message'=>'Student shift created successfully successfully',
            'alert-type'=>'success'
        ];
        return redirect()->route('student.shift.view')->with($notification);


}


public function EditShift($id){
    $data['editData']= StudentShift::find($id);
    return view('backend.setup.shift.edit_shift',$data);

}


public function UpdateShift(Request $request, $id){
    $data=StudentShift::find($id);
    $validatedData=$request->validate([
        'name'=> 'required|unique:student_shifts,name',
        ]);
$data->name=$request->name;
        $data->save();
        $notification=[
            'message'=>'Student shift updated  successfully',
            'alert-type'=>'info'
        ];
        return redirect()->route('student.shift.view')->with($notification);
}



public function DeleteShift($id){
    $data=StudentShift::find($id);
    $data->delete();
    $notification=[
        'message'=>'Student shift deleted successfully',
        'alert-type'=>'warning'
    ];
    return redirect()->route('student.shift.view')->with($notification);
}

}
