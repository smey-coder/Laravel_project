<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'tbl_student';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];
    public $timestamps = false;
}
