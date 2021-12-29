<?php

namespace App\Http\Controllers;

use App\Models\{Plan, Student, teacher};

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
