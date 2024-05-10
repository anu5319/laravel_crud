<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAddress extends Model
{
    use HasFactory;
    protected $primaryKey = 'address_id';
    protected $guarded=[];


    // public function student(){
    //     return $this->belongsTo(Student::class,'student_id','id');
    //     }
}
