<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeCategoryAmount extends Model
{
    use HasFactory;

    public function fee_category(){
// Join
        return $this->belongsTo(FeeCategory::class, 'fee_category_id','id');

    }

    
    public function student_class(){
        // Join
                return $this->belongsTo(StudentClass::class, 'class_id','id');
        
            }
}
