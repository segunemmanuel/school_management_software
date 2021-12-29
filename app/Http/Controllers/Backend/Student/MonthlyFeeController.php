<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AssignStudent;
use App\Models\User;
use App\Models\DiscountStudent;
use App\Models\FeeCategoryAmount;
use Illuminate\Support\Facades\DB;
use App\Models\StudentYear;
use App\Models\StudentClass;
use App\Models\StudentGroup;
use niklasravnsborg\LaravelPdf\Facades\Pdf as FacadesPdf;
use niklasravnsborg\LaravelPdf\Pdf as LaravelPdfPdf;
use App\Models\StudentShift;
use PDF;

class MonthlyFeeController extends Controller
{
    //

    public function MonthView(){
        $data['years']=StudentYear::all();
        $data['classes']=StudentClass::all();

    return view('backend.student.monthly_fee.monthly_fee_view',$data);

    }
}
