<?php

namespace App\Http\Controllers\Backend\Student;

use App\Models\AssignStudent;
use App\Models\AssignSubject;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\DiscountStudent;
use App\Models\StudentClass;
use App\Models\StudentGroup;
use App\Models\StudentShift;
use App\Models\StudentYear;
use Illuminate\Http\Request;

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
}
