<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use App\Models\FeeCategory;
use Illuminate\Http\Request;

class FeeCategoryController extends Controller
{
public function ViewFeeCat(){
    $data['allData']=FeeCategory::all();
        return view('backend.setup.fee.view_fee',$data);
}

public function AddFeeCat(){
    return view('backend.setup.fee.add_fee');


}

public function StoreFeeCat(Request $request){
    $validatedData=$request->validate([
        'name'=> 'required|unique:fee_categories,name',
        ]);

        $data=new FeeCategory();
        $data->name=$request->name;
        $data->save();

        $notification=[
            'message'=>'Fee category created  successfully',
            'alert-type'=>'success'
        ];
        return redirect()->route('fee.category.view')->with($notification);
}

public function EditFeeCat($id){
    $data['editData']=FeeCategory::find($id);
    return view('backend.setup.fee.edit_fee',$data);


}


public function UpdateFeeCat(Request $request,$id){
$data=FeeCategory::find($id);
$validatedData=$request->validate([
    'name'=> 'required|unique:fee_categories,name',
    ]);

    $data->name=$request->name;
    $data->save();
    $notification=[
        'message'=>'Fee category updated  successfully',
        'alert-type'=>'success'
    ];
    return redirect()->route('fee.category.view')->with($notification);

}


public function DeleteFeeCat($id){
    $data=FeeCategory::find($id);
        $data->delete();
        $notification=[
            'message'=>'Fee category deleted  successfully',
            'alert-type'=>'warning'
        ];
        return redirect()->route('fee.category.view')->with($notification);
    
    }
    


}


