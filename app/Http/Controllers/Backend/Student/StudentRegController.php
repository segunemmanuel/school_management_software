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
 



});
}
}