<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->hasRole('superadmin')) {
            return redirect()->route('dashboard.superadmin');
        } elseif ($user->hasRole('admin')) {
            return redirect()->route('dashboard.admin');
        } else {
            return redirect()->route('dashboard.user');
        }
    }

    public function superadmin()
    {
        return view('dashboards.superadmin');
    }

    public function admin()
    {
        return view('dashboards.admin');
    }

    public function user()
    {
        return view('dashboards.user');
    }
}
