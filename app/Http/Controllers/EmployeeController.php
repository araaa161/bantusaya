<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function home(){
        return view('main');
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function addpasien(){
        return view('addpasien');
    }

    public function adddata(Request $request){
        // dd($request->all());
        Employee::create($request->all());
    }

    public function datapasien(){
        return view('datapasien');
    }

    public function addbiaya(){
        return view('addbiaya');
    }

    public function biayaop(){
        return view('biayaop');
    }

    public function addjadwal(){
        return view('addjadwal');
    }

    public function jadwal(){
        return view('jadwal');
    }

    public function grafik(){
        return view('grafik');
    }

    public function control(){
        return view('user');
    }

}
