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

class EmployeeSalaryController extends Controller
{
    //

    public function SalaryView(){

        $data['allData']=User::where('usertype','employee')->get();
    	return view('backend.employee.employee_salary.employee_salary_view',$data);


    }



    public function SalaryIncrement($id){
        $data['editData']=User::find($id);
    	return view('backend.employee.employee_salary.employee_salary_increment', $data);


    }

    public function SalaryUpdate(Request $request,$id){

        $user=User::find($id);

        $previous_salary=$user->salary;


        return ;
    }

}
