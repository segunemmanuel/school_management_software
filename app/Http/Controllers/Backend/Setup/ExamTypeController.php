<?php

namespace App\Http\Controllers\Backend\Setup;
use App\Http\Controllers\Controller;
use App\Models\ExamType;
use Illuminate\Http\Request;

class ExamTypeController extends Controller
{
    public function ViewExamType(){

        $data['allData']=ExamType::all();
        return view('backend.setup.exam_type.view_exam_type',$data);
    }

    public function AddExamType(){
       
        return view('backend.setup.exam_type.add_exam_type');
    }


    public function StoreExamType(Request $request){
        $validatedData=$request->validate([
            'name'=> 'required|unique:exam_types,name',
            ]);
    
            $data=new ExamType();
            $data->name=$request->name;
            $data->save();
            $notification=[
                'message'=>'Exam type created  successfully',
                'alert-type'=>'success'
            ];
            return redirect()->route('exam.type.view')->with($notification);
    }


    public function EditExamType($id){
        $data['editData']=ExamType::find($id);
        return view('backend.setup.exam_type.edit_exam_type',$data);
    }


    public function UpdateExamType(Request $request,$id){
        $data=ExamType::find($id);
        $validatedData=$request->validate([
            'name'=> 'required|unique:exam_types,name',
            ]);
        
            $data->name=$request->name;
            $data->save();
            $notification=[
                'message'=>'Exam type name updated  successfully',
                'alert-type'=>'info'
            ];
            return redirect()->route('exam.type.view')->with($notification);
        
        }




        public function DeleteExamType($id){
            $data=ExamType::find($id);
                $data->delete();
                $notification=[
                    'message'=>'Exam type name deleted  successfully',
                    'alert-type'=>'warning'
                ];
                return redirect()->route('exam.type.view')->with($notification);
            
            }
            



}
