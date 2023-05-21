<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class ChefDepController extends Controller
{
    //
    public function index(){
        $listeetu= Student::get();
        return view('Student-list', compact('listeetu'));
    }
    public function editStudent($id){
        $listeetu = Student::find($id);
        return view('edit-student', compact('listeetu'));
    }
    public function updateStudent(Request $request,$id){
        $request->validate([
        ]);
        $nom = $request->nom;
        $prenom = $request->prenom;
        $email = $request->email;
        $datedenaissance = $request->datedenaissance;

        $listeetu = Student::find($id);
        $listeetu->nom = $nom;
        $listeetu->prenom = $prenom;
        $listeetu->email = $email;
        $listeetu->datedenaissance = $datedenaissance;
        $listeetu->save();
        return redirect()->back()->with('success', 'Student Updated Suceefully');
    }
    public function deleteStudent($id){
        $listeetu = Student::find($id);
        $listeetu->delete();
        return redirect()->back()->with('success', 'Student Deleted Suceefully');
        }

}
