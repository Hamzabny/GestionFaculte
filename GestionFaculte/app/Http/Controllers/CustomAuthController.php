<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\User;
use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function home()
    {
        return view('homepage');
    } 

    public function index()
    {
        return view('login');
    }  
       
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if(Auth::user()->role == 1){
            return redirect()->intended('/admin/InterfaceAdmin')
                        ->with('message', 'Signed in!');
        }else if(Auth::user()->role == 2){
            return redirect()->intended('/professeur/InterfaceProfesseur');
        }
    }
   
        return redirect('/login')->with('message', 'Login details are not valid!');
    }
 
    public function signup()
    {
        return view('registration');
    }
       
    public function signupsave(Request $request)
    {
        $request->validate([
            'fullname' => 'required|exists:employes,fullname',
            'registration_number' => 'required|exists:employes,registration_number',
            'email' => 'required',
            'password' => 'required|min:6',
        ]);
    
        $data = $request->only('fullname', 'email', 'registration_number', 'password');
        $employe = Employe::where('registration_number', $data['registration_number'])->first();
    
        $role = ($employe->role == 'CHEFDEP') ? 2 : (($employe->role == 'PROFESSEUR') ? 3 : 0);
    
        $user = $this->create($data, $role);
            // Display the role in the console
           // dd($role); // or var_dump($role);
      
        return redirect("login");
    }
    
    public function create(array $data, $role)
    {
        return User::create([
            'name' => $data['fullname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $role,
        ]);
    }
    
     
    // public function dashboard()
    // {
    //     if(Auth::check()){
    //         return view('dashboard');
    //     }
    //     return redirect('/login');
    // }
    public function InterfaceAdmin()
    {
        if(Auth::check()){
            return view('InterfaceAdmin');
        }
        return redirect('/login');
    }
    public function signOut() {
        Session::flush();
        Auth::logout();
   
        return redirect('login');
    }
}
