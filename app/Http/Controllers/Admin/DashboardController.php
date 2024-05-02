<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public function index(){

        return view("admin.dashboard");
    }

    public function allroles(){

        $roles = Role::get();

        return view('admin.managers.roles',compact('roles'));

    }
}
