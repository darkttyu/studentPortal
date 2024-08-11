<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Faculty;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showStudentLoginForm() {
        return view('authentication.studentLogin');
    }
    
    public function showFacultyLoginForm() {
        return view('authentication.facultyLogin');
    }

    public function studentLogin(Request $request) {

        $fetchedStudent = Student::where('studentNumber', $request->input('studentNumber'))
                  ->first(['studentNumber', 'month', 'day', 'year', 'password']);
        
        if($fetchedStudent) {
            $fetchedStudentData = [
                'studentNumber' => $fetchedStudent->studentNumber,
                'month' => $fetchedStudent->month,
                'day' => $fetchedStudent->day,
                'year' => $fetchedStudent->year,
                'password' => $fetchedStudent->password
            ];

            $requestedStudent = $request->only(['studentNumber', 'month', 'day', 'year', 'password']);
            
            $credentialsMatched = true;

            foreach($requestedStudent as $key => $value) {
                if(array_key_exists($key, $fetchedStudentData) && $fetchedStudentData[$key] != $value) {
                    $credentialsMatched = false;
                    break;
                }
            }

            if($credentialsMatched) {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('showStudentLoginForm')
                ->with('alert', 'Credentials do not match.')
                ->withInput();
            }
        } else {
            return redirect()->route('showStudentLoginForm')
            ->with('alert', 'Student Credentials does not Exist.')
            ->withInput();
        }
    }

    public function facultyLogin(Request $request) {

        $fetchedStudent = Faculty::where('username', $request->input('username'))
        ->first(['username', 'password']);
    }
}
