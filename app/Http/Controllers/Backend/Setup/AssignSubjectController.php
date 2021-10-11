<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Models\AssignSubject;
use App\Http\Controllers\Controller;
use App\Models\SchoolSubject;
use App\Models\StudentClass;
use Illuminate\Http\Request;


class AssignSubjectController extends Controller
{
    //

    public function ViewAssignSubject(){
        $data['allData']=AssignSubject::all();
        // $data['allData']=FeeCategoryAmount::select('fee_category_id')->groupBy('fee_category_id')->get();
        return view('backend.setup.assign_subject.view_assign_subject',$data);
    }



  
    public function AddAssignSubject(){
       $data['subjects']=SchoolSubject::all();
       $data['classes']=StudentClass::all();
        return view('backend.setup.assign_subject.add_assign_subject',$data);
    }


}
