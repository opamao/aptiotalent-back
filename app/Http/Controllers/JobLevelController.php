<?php

namespace App\Http\Controllers;

use App\Models\JobLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JobLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $level = JobLevel::all();

        return view('profile.job-level', compact('level'));
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
            'libelle' => 'required|unique:job_level,libelle_level',
        ];
        $customMessages = [
            'libelle.required' => "Veuillez saisir le nom du niveau d'emploi",
            'libelle.unique' => $request->libelle . " existe déjà. Veuillez saisir un autre niveau d'emploi",
        ];

        $request->validate($roles, $customMessages);

        $level = new JobLevel();
        $level->idjob_level = Str::uuid();
        $level->libelle_level = $request->libelle;
        if ($level->save()) {
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
        $level = JobLevel::findOrFail($id);

        $roles = [
            'libelle' => 'required|unique:job_level,libelle_level',
        ];

        $customMessages = [
            'libelle.unique' => "Le nouveau niveau d'emploi est déjà existant. Veuillez saisir un autre niveau d'emploi",
        ];

        $request->validate($roles, $customMessages);


        if ($level->libelle_level !== $request->libelle) {
            $level->libelle_level = $request->libelle;
        }

       if ($level->save()) {
        return back()->with('succes', "Vous avez modifier avec succès.");
       } else {
        return back()->withErrors(["Problème lors de la modification. Veuillez réessayer!!"]);
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        JobLevel::findOrFail($id)->delete();

        return back()->with('succes', "La suppression a été effectué");
    }
}
