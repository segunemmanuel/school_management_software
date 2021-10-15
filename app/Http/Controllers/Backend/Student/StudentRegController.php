<?php

namespace App\Http\Controllers\Backend\Student;

use App\Models\AssignStudent;
use App\Models\AssignSubject;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\DiscountStudent;
use App\Models\SchoolSubject;
use App\Models\StudentClass;
use App\Models\StudentGroup;
use App\Models\StudentShift;
use App\Models\StudentYear;
use Illuminate\Foundation\Events\DiscoverEvents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class StudentRegController extends Controller
{
public function ViewStudentReg(){
$data['allData']=AssignStudent::all();

        return view('backend.student.student_reg.student_view',$data);

    }


public function AddStudentReg(){
$data['years']=StudentYear::all();
$data['classes']=StudentClass::all();
$data['groups']=StudentGroup::all();
$data['shifts']=StudentShift::all();
return view('backend.student.student_reg.student_add',$data);

}



public function StoreStudentReg(Request $request){
DB::transaction(function () use($request) {
$checkYear=StudentYear::find($request->year_id)->name;
$student=User::where('usertype','students')->orderBy('id','DESC')->first();

    if($student==null){
$firstReg=0;
$studentId=$firstReg +1;

if($studentId < 10) {

    $id_no='0000'.$studentId;
} elseif ($studentId<100) {

    $id_no='00'.$studentId;

    } elseif($studentId < 1000){
    
        $id_no='0'.$studentId;
    
    }
    } else{
        $student=User::where('usertype',  'students')->orderBy('id','DESC')->first()->id;
        $studentId=$student+1;
        if($studentId < 10) {

            $id_no='0000'.$studentId;
        } elseif ($studentId<100) {
        
            $id_no='00'.$studentId;
        
            } elseif($studentId < 1000){
            
                $id_no='0'.$studentId;
            
            }
    } 

$final_id_no=$checkYear.$id_no;
$user=new User();
$code=rand(0000,9999);
$user->id_no=$final_id_no;
$user->password=bcrypt($code);
$user->usertype='students';
$user->code=$code;
$user->name=$request->name;
$user->fname=$request->fname;
$user->mname=$request->mname;
$user->mobile=$request->mobile;
$user->address=$request->address;
$user->gender=$request->gender;
$user->religion=$request->religion;
$user->dob=$request->date('Y-m-d',strtotime($request->dob));


if($request->file('image')){
    $file=$request->file('image');
    $filename=date('YmdHi').$file->getClientOriginalName();
    $file->move(public_path('upload/student_images'), $filename);
    $data['image']=$filename;
}
$user->save();

// Assigning student ID using 
$assign_student= new AssignStudent();
$assign_student->student_id=$user->id;
$assign_student->year_id->student_id=$request->year_id;
$assign_student->class_id->student_id=$request->class_id;
$assign_student->group_id->student_id=$request->group_id;
$assign_student->shift_id->student_id=$request->shift_id;
$assign_student->save();


// Assigning discounts
$discount_student= new DiscountStudent();
$discount_student->assign_student_id=$assign_student->id;
$discount_student->fee_category_id=1;
$discount_student->discount=$request->discount;
$discount_student->save();












});
}
}