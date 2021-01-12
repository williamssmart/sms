<?php
namespace App\Traits;
use Illuminate\Support\Str;


/**
* reg  number generator
*/
trait RegNumberGenarator
{

  public function genarator() {

    $alpha = "QWERTYUIOPASDFGHJKLZXCVBNMAAAQQQWWWSSEEXDRRFGYGCHIIPOG";
    $lenght = 3;
    $year = date("dmy");
    $num = "123456789012345678901234567890";
    $randalpha = substr(str_shuffle($alpha), 0, 3);
    $randnum = substr(str_shuffle($num), 0, $lenght);
    $v = 'PMS/'. $year. '/'. $randnum. $randalpha;
    return  "$v";

  }
}