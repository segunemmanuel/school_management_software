<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use App\Models\FeeCategory;
use App\Models\FeeCategoryAmount;
use App\Models\StudentClass;

use Illuminate\Http\Request;

class FeeAmountController extends Controller
{
    //

    public function ViewFeeAmount(){


        $data['allData']=FeeCategoryAmount::all();
        return view('backend.setup.fee_amount.view_fee_amount',$data);

    }


    public function AddFeeAmount(){

        $data['fee_categories']=FeeCategory::all();
        $data['classes']=StudentClass::all();
        return view('backend.setup.fee_amount.add_fee_amount', $data);
    }
}
