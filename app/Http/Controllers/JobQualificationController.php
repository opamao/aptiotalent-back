<?php

namespace App\Http\Controllers;

use App\Models\JobQualification;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JobQualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $qualification = JobQualification::all();

        return view('profile.job-qualification', compact('qualification'));
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
            'libelle' => 'required|unique:job_qualification,libelle_qualification',
        ];
        $customMessages = [
            'libelle.required' => "Veuillez saisir le nom de la qualification",
            'libelle.unique' => $request->libelle . " existe déjà. Veuillez saisir une autre qualification",
        ];

        $request->validate($roles, $customMessages);

        $experience = new JobQualification();
        $experience->idjob_qualification = Str::uuid();
        $experience->libelle_qualification = $request->libelle;
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
        $experience = JobQualification::findOrFail($id);

        $roles = [
            'libelle' => 'required|unique:job_qualification,libelle_qualification',
        ];

        $customMessages = [
            'libelle.unique' => "La nouvelle qualification est déjà existant. Veuillez saisir une autre qualificatiion.",
        ];

        $request->validate($roles, $customMessages);

        if ($experience->libelle_qualification !== $request->libelle) {
            $experience->libelle_qualification = $request->libelle;
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
        JobQualification::findOrFail($id)->delete();

        return back()->with('succes', "La suppression a été effectué");
    }
}
