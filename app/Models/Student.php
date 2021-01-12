<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'firstname', 'gradeID', 'parentID',
        'middlename',
        'lastname',
        'gender',
        'bloodgroup',
        'nationality' ,
        'dateofbirth',
        'height' ,
        'weight' ,
        'homelanguage',
        'icename1'   ,
        'relationship1',
        'phone1',
        'icename2',
        'relationship2',
        'phone2',
        'passport',
        'regnumber',
      ];
}
