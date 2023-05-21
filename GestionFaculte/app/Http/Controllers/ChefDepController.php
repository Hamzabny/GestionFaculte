<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Professeur;
use Illuminate\Http\Request;
use App\Models\Departement;
use App\Models\Classe;
class ChefDepController extends Controller
{
     //
     public function index_CD(){
        $listeetu= Student::get();
        return view('Student-list_CD', compact('listeetu'));
    }
    public function editStudent_CD($id){
        $listeetu = Student::find($id);
        $classes = Classe::all();
        $departements = Departement::all();
        return view('edit-student_CD')->with([
            "listeetu" => $listeetu,
            "classes" => $classes,
            "departements" => $departements
        ]);;
    }
    public function updateStudent_CD(Request $request,$id){
        $request->validate([
        ]);
        $nom = $request->nom;
        $prenom = $request->prenom;
        $email = $request->email;
        $datedenaissance = $request->datedenaissance;
        $departement_id = $request->departement_id;
        $classe_id = $request->classe_id;


        $listeetu = Student::find($id);
        $listeetu->nom = $nom;
        $listeetu->prenom = $prenom;
        $listeetu->email = $email;
        $listeetu->datedenaissance = $datedenaissance;
        $listeetu->departement_id = $departement_id;
        $listeetu->classe_id = $classe_id;
        $listeetu->save();
        return redirect()->back()->with('success', 'Student Updated Suceefully');
    }
    public function deleteStudent_CD($id){
        $listeetu = Student::find($id);
        $listeetu->delete();
        return redirect()->back()->with('success', 'Student Deleted Suceefully');
        }

}
