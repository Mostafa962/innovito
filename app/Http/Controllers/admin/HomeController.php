<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Controllers\Controller;
use App\User;

class HomeController extends Controller
{
    public function index()
    {
        $employees_count = User::whereHas('roles', function (Builder $query) {
            $query->where('name', 'employee');
        })->count();

        $coordinators_count = User::whereHas('roles', function (Builder $query) {
            $query->where('name', 'coordinator');
        })->count();

        return view('admin.home.index')
        ->with('employees_count', $employees_count)
        ->with('coordinators_count', $coordinators_count);
    }
}
