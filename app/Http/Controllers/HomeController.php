<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;
use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['company_count'] = Company::where('user_id',Auth::user()->id)->get()->count();
        $data['employee_count'] = Employee::where('user_id',Auth::user()->id)->get()->count();
        return view('home',$data);
    }
}
