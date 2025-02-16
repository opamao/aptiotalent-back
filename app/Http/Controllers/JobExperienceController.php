<?php

namespace App\Http\Controllers;

use App\Models\JobExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JobExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = JobExperience::all();

        return view('profile.job-experience', compact('experiences'));
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
            'libelle' => 'required|unique:job_experience,libelle_experience',
        ];
        $customMessages = [
            'libelle.required' => "Veuillez saisir le nom de l'expérience",
            'libelle.unique' => $request->libelle . " existe déjà. Veuillez saisir un autre niveau d'emploi",
        ];

        $request->validate($roles, $customMessages);

        $experience = new JobExperience();
        $experience->idjob_experience = Str::uuid();
        $experience->libelle_experience = $request->libelle;
        if ($experience->save()) {
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
        $experience = JobExperience::findOrFail($id);

        $roles = [
            'libelle' => 'required|unique:job_experience,libelle_experience',
        ];

        $customMessages = [
            'libelle.unique' => "La nouvelle expérience est déjà existant. Veuillez saisir une autre expérience.",
        ];

        $request->validate($roles, $customMessages);

        if ($experience->libelle_experience !== $request->libelle) {
            $experience->libelle_experience = $request->libelle;
        }

        if ($experience->save()) {
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
        JobExperience::findOrFail($id)->delete();

        return back()->with('succes', "La suppression a été effectué");
    }
}
