<?php

namespace App\Http\Controllers;

use App\Models\JobTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JobTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = JobTypes::all();

        return view('profile.job-type', compact('types'));
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
            'libelle' => 'required|unique:job_type,libelle_type',
        ];
        $customMessages = [
            'libelle.required' => "Veuillez saisir le nom du type",
            'libelle.unique' => $request->libelle . " existe déjà. Veuillez saisir un autre type",
        ];

        $request->validate($roles, $customMessages);

        $type = new JobTypes();
        $type->idjob_type = Str::uuid();
        $type->libelle_type = $request->libelle;
        if ($type->save()) {
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
        $type = JobTypes::findOrFail($id);

        $roles = [
            'libelle' => 'required|unique:job_type,libelle_type',
        ];

        $customMessages = [
            'libelle.unique' => "Le nouveau type est déjà existant. Veuillez saisir un autre type",
        ];

        $request->validate($roles, $customMessages);


        if ($type->libelle_type !== $request->libelle) {
            $type->libelle_type = $request->libelle;
        }

       if ($type->save()) {
        return back()->with('succes', "Vous avez modifier le type avec succès.");
       } else {
        return back()->withErrors(["Problème lors de la modification. Veuillez réessayer!!"]);
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        JobTypes::findOrFail($id)->delete();

        return back()->with('succes', "La suppression a été effectué");
    }
}
