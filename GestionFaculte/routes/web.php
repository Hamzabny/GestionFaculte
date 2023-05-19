<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployesController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ProfesseurController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('InterfaceAdmin', [CustomAuthController::class, 'InterfaceAdmin'])
    ->middleware('auth')
    ->name('InterfaceAdmin');

Route::get('/home', [CustomAuthController::class, 'home']); 
//Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('postlogin', [CustomAuthController::class, 'login'])->name('postlogin'); 
Route::get('signup', [CustomAuthController::class, 'signup'])->name('register-user');
Route::post('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('/students/signup',[StudentController::class, 'showSignUpForm'])->name('registrationStudent');
Route::post('/students/signup',[StudentController::class, 'processSignUpEtudiant'])->name('students.signup.submit');
Route::get('loginStudent', [StudentController::class, 'loginStudent'])->name('loginStudent');
Route::post('postloginStudent', [StudentController::class, 'postloginStudent'])->name('postloginStudent'); 
Route::get('/professeur/etudiant-list',[ProfesseurController::class, 'index']);
//edit
Route::get('/professeur/edit-student/{id}',[ProfesseurController::class,'editStudent']);
Route::post('/professeur/save-student/{id}',[ProfesseurController::class,'updateStudent']);
//delete
Route::get('/professeur/delete-student/{id}',[ProfesseurController::class,'deleteStudent']);

//admin route
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/InterfaceAdmin', function () {
        return view('InterfaceAdmin');
    })->name('InterfaceAdmin');
    Route::resource('employes', EmployesController::class);
    Route::get('employes/{id}/certificate', [EmployesController::class, 'getWorkCertificate'])
        ->name('work.certificate');
    Route::get('employes/{id}/vacation', [EmployesController::class, 'vacationRequest'])
        ->name('work.vacation');
});
