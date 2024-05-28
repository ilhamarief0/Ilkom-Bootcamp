<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        $users = User::get();

        // dd($users);

        return view('dashboard.table', compact('users'));
    }
}
