<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $table='t_student_profile';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillable=['id','studentName','studentID','gender','dateOfBirth','registrationDate','major','telephone'];
}
