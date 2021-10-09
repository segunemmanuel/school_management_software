<?php
namespace App\Http\Controllers\Backend\Setup;
use App\Models\StudentGroup;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentGroupController extends Controller
{
    public function ViewGroup(){
$data['allData']=StudentGroup::all();
        return view('backend.setup.group.view_group',$data);
    }


    public function AddGroup(){

        return view('backend.setup.group.add_group');
        
            }


            public function StoreGroup(Request $request){
                $validatedData=$request->validate([
                    'name'=> 'required|unique:student_groups,name',
                    ]);
        
        
                    $data=new StudentGroup();
                    $data->name=$request->name;
                    $data->save();
        
                    $notification=[
                        'message'=>'Student group created successfully successfully',
                        'alert-type'=>'success'
                    ];
                    return redirect()->route('student.group.view')->with($notification);

            }


            public function EditGroup($id){

                $data['editData']= StudentGroup::find($id);
                return view('backend.setup.group.edit_group',$data);


            }



            public function UpdateGroup(Request $request, $id){
                $data=StudentGroup::find($id);
                $validatedData=$request->validate([
                    'name'=> 'required|unique:student_groups,name',
                    ]);
           $data->name=$request->name;
                    $data->save();
                    $notification=[
                        'message'=>'Student group updated  successfully',
                        'alert-type'=>'info'
                    ];
                    return redirect()->route('student.group.view')->with($notification);

            }
            

            public function DeleteGroup($id){
                $data=StudentGroup::find($id);
                $data->delete();

                $notification=[
                    'message'=>'Student group deleted successfully',
                    'alert-type'=>'warning'
                ];
                return redirect()->route('student.group.view')->with($notification);


            }






        }
