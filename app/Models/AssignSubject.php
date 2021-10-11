<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignSubject extends Model
{
    use HasFactory;




    public function student_class(){
        // Join
                return $this->belongsTo(StudentClass::class, 'class_id','id');
        

            }


            public function school_subject(){
                // Join
                        return $this->belongsTo(StudentClass::class, 'subject_id','id');
                
                    }


}

