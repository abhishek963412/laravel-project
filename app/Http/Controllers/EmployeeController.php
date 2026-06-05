<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth; // 1. FIXED: Added this crucial missing import!
use App\Models\User;
class EmployeeController extends Controller
{
    public function index()
    {
        $allRegisteredUsers = User::all();

        // 3. Pass the collection to your view under the variable name 'employees'
        return view('employee', ['employees' => $allRegisteredUsers]);
    }
    
    // ... your userTable() and other methods can stay exactly as they are below
}
    