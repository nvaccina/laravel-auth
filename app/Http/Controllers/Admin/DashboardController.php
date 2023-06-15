<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.home');
    }

    public function settings(){
        return view('admin.settings');
    }

    public function stats(){
        return view('admin.stats');
    }
}
