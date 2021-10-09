<?php
namespace App\Http\Controllers\Backend\Setup;
use App\Models\StudentYear;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class StudentYearController extends Controller
{
    public function ViewYear(){
$data['allData']=StudentYear::all();
return view('backend.setup.year.view_year',$data);
    }


public function AddYear(){
return view('backend.setup.year.add_year');

}



public function StoreStudentYear(Request $request){
    $validatedData=$request->validate([
        'name'=> 'required|unique:student_years,name',
        ]);
        $data=new StudentYear();
        $data->name=$request->name;
        $data->save();

        $notification=[
            'message'=>'Student year created successfully successfully',
            'alert-type'=>'success'
        ];
        return redirect()->route('student.year.view')->with($notification);
    }


    public function EditYear($id){
        $year=StudentYear::find($id);
        return view('backend.setup.year.edit_year',compact('year'));

    }

    public function UpdateStudentYear(Request $request,$id){
        $data=StudentYear::find($id);
        $validatedData=$request->validate([
            'name'=> 'required|unique:student_years,name',
            ]);
            $data->name=$request->name;
            $data->save();
    
            $notification=[
                'message'=>'Student year updated successfully',
                'alert-type'=>'success'
            ];
            return redirect()->route('student.year.view')->with($notification);

    }

    public function DeleteYear($id){
        $data=StudentYear::find($id);
        $data->delete();
        $notification=[
            'message'=>'Student year deleted  successfully',
            'alert-type'=>'warning'
        ];
        return redirect()->route('student.year.view')->with($notification);
    }

}
