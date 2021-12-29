<?php

namespace App\Http\Controllers;

use App\Models\{Plan, Student, teacher};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    function generalSearch() {
        $teachers = teacher::count();
        $students = Student::count();
        $plans = Plan::count();
        $total = Plan::sum('discount');

        return view("dashboard.dashboard", compact('teachers', 'students', 'plans', 'total'));
    }
}
