<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AssignStudent;
use App\Models\User;
use App\Models\DiscountStudent;
use Illuminate\Support\Facades\DB;
use App\Models\StudentYear;
use App\Models\StudentClass;
use App\Models\StudentGroup;
use App\Models\StudentShift;
use PDF;
class RegistrationFeeController extends Controller
{
    //

    public function RegFeeView(){
        $data['years']=StudentYear::all();
        $data['classes']=StudentClass::all();
return view('backend.student.registration_fee.registration_fee_view',$data);
        return view();
    }
}
