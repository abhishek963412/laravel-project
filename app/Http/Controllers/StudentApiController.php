<?php

namespace App\Http\Controllers;

use App\Models\User; // Hame User model se students ka data chahiye
use Illuminate\Http\Request;

class StudentApiController extends Controller
{
    // Yeh wahi function hai jo tumne api.php me define kiya hai
    public function getAllStudents()
    {
        // Database se saare users (students) ko nikalna
        $students = User::all();
        
        // Data ko raw JSON format me return karna status code 200 (OK) ke sath
        return response()->json($students, 200);
    }
}