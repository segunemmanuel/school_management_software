<?php

namespace App\Http\Controllers\Backend\Employee;

use App\Http\Controllers\Controller;
use App\Models\LeavePurpose;
use App\Models\EmployeeLeave;

use Illuminate\Http\Request;
use App\Models\AssignStudent;
use App\Models\Designation;
use App\Models\User;
use App\Models\DiscountStudent;
use App\Models\EmployeeSalaryLog;
use App\Models\FeeCategoryAmount;
use Illuminate\Support\Facades\DB;
use App\Models\StudentYear;
use App\Models\StudentClass;
use App\Models\StudentGroup;
use niklasravnsborg\LaravelPdf\Facades\Pdf as FacadesPdf;
use niklasravnsborg\LaravelPdf\Pdf as LaravelPdfPdf;
use App\Models\StudentShift;

class EmployeeLeaveController extends Controller
{
    //

    public function LeaveView(){
        $data['allData'] = EmployeeLeave::orderBy('id','desc')->get();
    	return view('backend.employee.employee_leave.employee_leave_view',$data);



    }

    public function LeaveAdd(){
        $data['employees']=User::where('usertype','employee')->get();
        $data['leave_purpose']=LeavePurpose::all();
    	return view('backend.employee.employee_leave.employee_leave_add', $data);


    }


    public function LeaveStore(Request $request){

    	if ($request->leave_purpose_id == "0") {
    		$leavepurpose = new LeavePurpose();
    		$leavepurpose->name = $request->name;
    		$leavepurpose->save();
    		$leave_purpose_id = $leavepurpose->id;
    	}else{
    		$leave_purpose_id = $request->leave_purpose_id;
    	}

    	$data = new EmployeeLeave();
    	$data->employee_id = $request->employee_id;
    	$data->leave_purpose_id = $leave_purpose_id;
    	$data->start_date = date('Y-m-d',strtotime($request->start_date));
    	$data->end_date = date('Y-m-d',strtotime($request->end_date));
    	$data->save();

    	$notification = array(
    		'message' => 'Employee Leave Data Inserted Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('employee.leave.view')->with($notification);

    }// end Method 

}
