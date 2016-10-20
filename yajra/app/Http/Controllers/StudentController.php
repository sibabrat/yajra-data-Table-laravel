<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\controllers\controller;
use DB;
class StudentController extends Controller
{

    public function index(){
        $students=DB::table('users')->get();
        $students = DB::table('users')->paginate(5);
        return view('student',compact('students'));



    }
}

