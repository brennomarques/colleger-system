<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Feedback extends Controller
{
    public function accessPermission() {
        return view("feedbacks.accessPermission");
    }
}
