<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Student extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table='students';  
  protected $fillable=['first_name','last_name','gender','qualifications'];
  public function address(){
  return $this->hasOne(Studentaddress::class,'student_id','id');
  }
  public function orders()
  {
      return $this->hasMany(Order::class,'student_id','id');
  }
  
}
