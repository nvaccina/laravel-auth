<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Work;

class DashboardController extends Controller
{
    public function index(){
        $n_works = Work::all()->count();
        return view('admin.home', compact('n_works'));
    }

    public function settings(){
        return view('admin.settings');
    }

    public function stats(){
        return view('admin.stats');
    }
}
