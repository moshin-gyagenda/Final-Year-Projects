<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'studentno',
        'firstname',
        'lastname',
        'gender',
        'dateofbirth',
        'nationality',
        'levelofstudy',
        'religion',
        'grades',
        'class',
        'schoolattended',
        'healthinformation',
        'interest',
        'pfirstname',
        'pgender',
        'email',
        'ninnumber',
        'preligion',
        'occupation',
        'physicaladdress',
        'phonenumber'
    ];
    
}
