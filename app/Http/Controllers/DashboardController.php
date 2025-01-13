<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use App\Models\Employee;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $cmpt['companies'] = Company::latest()->take(10)->get();
        $cmpt['user'] = User::count();
        $cmpt['company'] = Company::count();
        $cmpt['employee'] = Employee::count();
        $cmpt['role']     = Role::count();
        return view('adminDash.index', $cmpt);
    }

}
