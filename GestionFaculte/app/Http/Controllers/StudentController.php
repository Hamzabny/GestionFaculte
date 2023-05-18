<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Hash;
use Illuminate\Support\Facades\Auth;
class StudentController extends Controller
{
    public function showSignUpForm()
    {
        return view('registrationStudent');
    }

    public function processSignUpEtudiant(Request $request)
    {
         // Validate the form data
    $validatedData = $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'email' => 'required|email|unique:students',
        'password' => 'required|string|min:8',
        'datedenaissance' => 'required|date',
        // Add any additional validation rules for other form fields
    ]);
    
    // Create a new student record in the students table
    $student = new Student();
    $student->nom = $validatedData['nom'];
    $student->prenom = $validatedData['prenom'];
    $student->email = $validatedData['email'];
    $student->password = Hash::make($validatedData['password']);
    $student->datedenaissance = $validatedData['datedenaissance'];
    // Set any additional properties as needed
    $student->save();

    // Redirect to a success page or perform any additional actions
    return view('loginStudent');
    }
    public function loginStudent()
    {
        return view('loginStudent');
    }  
    public function postloginStudent(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
        if (Auth::guard('student')->attempt($credentials)) {
            return view('welcome');
        }
   
        return view('registrationStudent');
    }
}

