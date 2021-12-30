<?php
namespace App\Http\Controllers\Backend\Employee;
use App\Http\Controllers\Controller;
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


use PDF;

class EmployeeRegController extends Controller
{
    //
    public function EmployeeRegView(){

    	$data['allData'] = User::where('usertype','Employee')->get();
    	return view('backend.employee.employee_reg.employee_view',$data);

    }
}
