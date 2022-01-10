<?php

namespace App\Http\Controllers\Backend\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LeavePurpose;
use App\Models\EmployeeLeave;
use App\Models\AssignStudent;
use App\Models\Designation;
use App\Models\User;
use App\Models\DiscountStudent;
use App\Models\EmployeeAttendance;
use App\Models\EmployeeSalaryLog;
use App\Models\FeeCategoryAmount;
use Illuminate\Support\Facades\DB;
use App\Models\StudentYear;
use App\Models\StudentClass;
use App\Models\StudentGroup;
use niklasravnsborg\LaravelPdf\Facades\Pdf as FacadesPdf;
use niklasravnsborg\LaravelPdf\Pdf as LaravelPdfPdf;
use App\Models\StudentShift;

class EmployeeAttendanceController extends Controller
{
    //

    public function AttendanceView(){
        $data['allData'] = EmployeeAttendance::select('date')->groupBy('date')->orderBy('id','DESC')->get();
    	// $data['allData'] = EmployeeAttendance::orderBy('id','DESC')->get();
    	return view('backend.employee.employee_attendance.employee_attendance_view',$data);
    }


    public function AddAttendance(){
        $data['employees'] = User::where('usertype','employee')->get();
    	return view('backend.employee.employee_attendance.employee_attendance_add',$data);
    }
}
