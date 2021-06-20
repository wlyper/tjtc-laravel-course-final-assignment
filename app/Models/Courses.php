<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $table='t_course_information';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillable=['id','courseName','courseID','courseTeacher','courseLocation','courseTime','periodWeeks','courseImage'];
}
