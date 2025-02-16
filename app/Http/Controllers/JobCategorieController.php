<?php

namespace App\Http\Controllers;

use App\Models\JobCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JobCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorie = JobCategories::all();

        return view('profile.job-category', compact('categorie'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $roles = [
            'libelle' => 'required|unique:job_categorie,libelle_categorie',
        ];
        $customMessages = [
            'libelle.required' => "Veuillez saisir le nom de la catégorie",
            'libelle.unique' => $request->libelle . " existe deja. Veuillez saisir une autre catégorie",
        ];

        $request->validate($roles, $customMessages);

        $categorie = new JobCategories();
        $categorie->idjob_categorie = Str::uuid();
        $categorie->libelle_categorie = $request->libelle;
        if ($categorie->save()) {
            return back()->with('succes',  "Vous avez ajouter " . $request->libelle);
        } else {
            return back()->withErrors(["Impossible d'ajouter " . $request->libelle . ". Veuillez réessayer!!"]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categorie = JobCategories::findOrFail($id);

        $roles = [
            'libelle' => 'required|unique:job_categorie,libelle_categorie',
        ];

        $customMessages = [
            'libelle.unique' => "La nouvelle catégorie est déjà existante. Veuillez saisir une autre catégorie",
        ];

        $request->validate($roles, $customMessages);


        if ($categorie->libelle_categorie !== $request->libelle) {
            $categorie->libelle_categorie = $request->libelle;
        }

       if ($categorie->save()) {
        return back()->with('succes', "Vous avez modifier la catégorie avec succès.");
       } else {
        return back()->withErrors(["Problème lors de la modification. Veuillez réessayer!!"]);
       }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        JobCategories::findOrFail($id)->delete();

        return back()->with('succes', "La suppression a été effectué");
    }
}
