<?php

namespace App\Http\Controllers\Backend\Setup;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\FeeCategory;
use App\Models\FeeCategoryAmount;
use App\Models\StudentClass;

use Illuminate\Http\Request;

class FeeAmountController extends Controller
{
    public function ViewFeeAmount(){
        // $data['allData']=DB::table('fee_category_amounts')->latest()->get() ;\
        $data['allData']=FeeCategoryAmount::all();
        $data['allData']=FeeCategoryAmount::select('fee_category_id')->groupBy('fee_category_id')->get();
        return view('backend.setup.fee_amount.view_fee_amount',$data);
    }

    public function AddFeeAmount(){

        $data['fee_categories']=FeeCategory::all();
        $data['classes']=StudentClass::all();
        return view('backend.setup.fee_amount.add_fee_amount', $data);
    }

public function  StoreFeeAmount(Request $request){
$countClass=count($request->class_id);
// Count to see if there are any clases 

if($countClass !=NULL){
for ($i=0; $i < $countClass; $i++) { 
$fee_amount=new FeeCategoryAmount();
$fee_amount->fee_category_id=$request->fee_category_id;
$fee_amount->class_id=$request->class_id[$i];
$fee_amount->amount=$request->amount[$i];
$fee_amount->save();



}
$notification=[
    'message'=>'Fee amount added successfully',
    'alert-type'=>'success'
];
return redirect()->route('fee.amount.view')->with($notification);
}

}



public function EditFeeAmount($fee_category_id){

    $data['editData']= FeeCategoryAmount::where('fee_category_id',$fee_category_id)->orderBy('class_id','asc')->get();
// dd($data['editData']->toArray());
$data['fee_categories']=FeeCategory::all();
$data['classes']=StudentClass::all();
return view('backend.setup.fee_amount.edit_fee_amount', $data);

}


public function UpdateFeeAmount(Request $request,$fee_category_id){
    if($request->class_id==NULL){
        $notification=[
            'message'=>'No class amount selected',
            'alert-type'=>'error'
        ];
        return redirect()->route('fee.amount.edit',$fee_category_id)->with($notification);
    }
    else{
  
        $countClass=count($request->class_id);
        // Count to see if there are any clases 
        FeeCategoryAmount::where('fee_category_id',$fee_category_id)->delete();
        for ($i=0; $i < $countClass; $i++) { 
        $fee_amount=new FeeCategoryAmount();
        $fee_amount->fee_category_id=$request->fee_category_id;
        $fee_amount->class_id=$request->class_id[$i];
        $fee_amount->amount=$request->amount[$i];
        $fee_amount->save();
        }

}

$notification=[
    'message'=>'Data updated successfully',
    'alert-type'=>'success'
];
return redirect()->route('fee.amount.view')->with($notification);
}



public function DetailFeeAmount($fee_category_id){
    $data['details']= FeeCategoryAmount::where('fee_category_id',$fee_category_id)->orderBy('class_id','asc')->get();

    return view('backend.setup.fee_amount.details_fee_amount', $data);
    


}

}
