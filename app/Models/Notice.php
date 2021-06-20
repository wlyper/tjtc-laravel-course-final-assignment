<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $table='t_notice';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillable=['id','noticeTitle','noticeID','noticeContent','noticeImage'];
}
