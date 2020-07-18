<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return "สวัดดี";
    }
    public function greeting($name){
        return "สวัดดี $name";
    }
    public function calculator($num1,$num2,$num3){
        return "ผลรวมของเลข $num1, $num2 และ $num3 คือ" .($num1+$num2+$num3)."นะจ๊ะ";
    }
}
