<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Classe;


class EtudiantController extends Controller
{

    public function index(){

        $etudiants = Etudiant::orderBy("nom","asc")->paginate(5);  //trier par ordre alphabetique la liste des etudiants en fonction de leur nom
        return view("etudiant", compact("etudiants"));
    }

    public function create(){

        $classes = Classe::all();
        return view("createEtudiant", compact("classes"));
    }


    public function edit(Etudiant $etudiant){
        $classes = Classe::all();
        return view("editEtudiant", compact("etudiant", "classes"));
    }
    public function ajouter(Request $request){
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "classe_id"=>"required"
        ]);
        Etudiant::create($request->all()); //il va donné seulement ce que je l'ai donné dans $fillable, sinon je peux faire comme ca:
        /*
        "nom"=>$request->nom,
        "prenom"=>$request->prenom, 
        "classe_id" => $request->classe_id

        si j'ai pas de $fillebale
        */

        return back()->with("success", "Etudiant ajouté avec succè!");
    }




    public function update(Request $request, Etudiant $etudiant){
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "classe_id"=>"required"
        ]);
        
        $etudiant->update([
        "nom"=>$request->nom,
        "prenom"=>$request->prenom, 
        "classe_id" => $request->classe_id
        ]);

        return back()->with("success", "Etudiant mis à jour avec succè!");
    }


    public function supprimer(Etudiant $etudiant){
        $nom_complet = $etudiant->nom . " ". $etudiant->prenom;
        $etudiant->delete();

        return back()->with("successDelete","L'étudiant $nom_complet a été supprimé");
    }

    /*ou bien 
    public function supprimer($etudiant){
        Etudiant::find($etudiant)->delete();

        return back()->with("successDelete","L'étudiant a été supprimé");
    }
     */
}
