<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'firstname', 'grade', 'parentID',
        'middlename',
        'lastname',
        'gender',
        'bloodgroup',
        'nationality' ,
        'mmob','ddob','yyob',
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
        'regNumber', 'realRegNumber'
      ];
}
