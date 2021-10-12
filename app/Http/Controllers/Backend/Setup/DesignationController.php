<?php

namespace App\Http\Controllers\Backend\Setup;
use App\Models\Designation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;




class DesignationController extends Controller
{
    //
    public function ViewDesignation(){
        $data['allData']=Designation::all();
        return view('backend.setup.designation.view_designation' ,$data);
    }


    public function AddDesignation(){
        return view('backend.setup.designation.add_designation');

    }


    public function StoreDesignation(Request $request){
        $validatedData=$request->validate([
            'name'=> 'required|unique:designations,name',
            ]);
    
            $data=new Designation();
            $data->name=$request->name;
            $data->save();
            $notification=[
                'message'=> 'Designation created  successfully',
                'alert-type'=>'success'
            ];
            return redirect()->route('designation.view')->with($notification);
    }

    public function EditDesignation($id){
        $data['editData']=Designation::find($id);
        return view('backend.setup.designation.edit_designation' ,$data);

    }



    public function UpdateDesignation(Request $request,$id){
        $data=Designation::find($id);
        $validatedData=$request->validate([
            'name'=> 'required|unique:designations,name',
            ]);
        
            $data->name=$request->name;
            $data->save();
            $notification=[
                'message'=>'Designation updatesd successfully',
                'alert-type'=>'info'
            ];
            return redirect()->route('designation.view')->with($notification);
        
        }



        public function DeleteDesignation($id){
            $data=Designation::find($id);
                $data->delete();
                
                $notification=[
                    'message'=>'Designation deleted  successfully',
                    'alert-type'=>'warning'
                ];
                return redirect()->route('designation.view')->with($notification);
            
            }


}
