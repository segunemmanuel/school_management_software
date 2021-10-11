<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use App\Models\SchoolSubject;
use Illuminate\Http\Request;

class SchoolSubjectController extends Controller
{
    //

    public function ViewSubject(){
        $data['allData']=SchoolSubject::all();
        return view('backend.setup.subjects.view_subjects' ,$data);
    }


    public function AddSubject(){
       
        return view('backend.setup.subjects.add_subjects');
    }

    public function StoreSubject(Request $request){
        $validatedData=$request->validate([
            'name'=> 'required|unique:school_subjects,name',
            ]);
    
            $data=new SchoolSubject();
            $data->name=$request->name;
            $data->save();
            $notification=[
                'message'=> 'School  subject created  successfully',
                'alert-type'=>'success'
            ];
            return redirect()->route('school.subject.view')->with($notification);
    }


    public function EditSubject($id){
        $data['editData']=SchoolSubject::find($id);
        return view('backend.setup.subjects.edit_subjects',$data);
    }


    public function UpdateSubject(Request $request,$id){
        $data=SchoolSubject::find($id);
        $validatedData=$request->validate([
            'name'=> 'required|unique:exam_types,name',
            ]);
        
            $data->name=$request->name;
            $data->save();
            $notification=[
                'message'=>'Subject updated  successfully',
                'alert-type'=>'info'
            ];
            return redirect()->route('school.subject.view')->with($notification);
        
        }



        public function DeleteSubject($id){
            $data=SchoolSubject::find($id);
                $data->delete();
                
                $notification=[
                    'message'=>'Subject deleted  successfully',
                    'alert-type'=>'warning'
                ];
                return redirect()->route('school.subject.view')->with($notification);
            
            }

}

