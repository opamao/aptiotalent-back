<?php

namespace App\Http\Controllers;

use App\Models\CategorieBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriesBlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorie = CategorieBlog::all();
        return view('blogs.blog-categories', compact('categorie'));
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
            'libelle' => 'required|unique:faqs,questions',
            'statut' => 'required',
        ];
        $customMessages = [
            'libelle.required' => "Veuillez saisir la question.",
            'libelle.unique' => $request->question . " existe déjà. Veuillez saisir une autre question.",
            'statut.required' => "Veuillez saisir la réponse.",
        ];

        $request->validate($roles, $customMessages);

        $categorie = new CategorieBlog();
        $categorie->idcategorie_blog = Str::uuid();
        $categorie->libelle_categorie = $request->libelle;
        $categorie->status_categorie = $request->statut;
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
        $categorie = CategorieBlog::findOrFail($id);

        $roles = [
            'libelle' => 'required|unique:categories_blogs,libelle_categorie',
            'statut' => 'required',
        ];

        $customMessages = [
            'libelle.unique' => "La nouvelle catégorie existe déjà. Veuillez saisir une autre catégorie.",
            'statut.required' => "Veuillez saisir la réponse.",
        ];

        $request->validate($roles, $customMessages);

        if ($categorie->libelle_categorie !== $request->libelle) {
            $categorie->libelle_categorie = $request->libelle;
        }
        if ($categorie->status_categorie !== $request->statut) {
            $categorie->status_categorie = $request->statut;
        }

        if ($categorie->save()) {
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
        CategorieBlog::findOrFail($id)->delete();

        return back()->with('succes', "La suppression a été effectué");
    }
}
