<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    //
    public function dashboardIndex(Request $request)
    {
        $pageTitle = 'Dashboard';
        return view('admin/admin_dashboard', compact('pageTitle'));
    }

    public function profileIndex(Request $request)
    {

        $user = User::first();

        $pageTitle = 'Profile';
        return view('admin/profile/admin_profile', compact('pageTitle', 'user'));
    }
}
