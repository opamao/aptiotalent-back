<?php

namespace App\Http\Controllers;

use App\Models\Faqs;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faqs::all();

        return view('faqs.faq', compact('faqs'));
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
            'question' => 'required|unique:faqs,questions',
            'answer' => 'required',
        ];
        $customMessages = [
            'question.required' => "Veuillez saisir la question.",
            'question.unique' => $request->question . " existe déjà. Veuillez saisir une autre question.",
            'answer.required' => "Veuillez saisir la réponse.",
        ];

        $request->validate($roles, $customMessages);

        $faqs = new Faqs();
        $faqs->idfaq = Str::uuid();
        $faqs->questions = $request->question;
        $faqs->answers = $request->answer;
        if ($faqs->save()) {
            return back()->with('succes',  "Vous avez ajouter " . $request->question);
        } else {
            return back()->withErrors(["Impossible d'ajouter " . $request->questions . ". Veuillez réessayer!!"]);
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
        $faqs = Faqs::findOrFail($id);

        $roles = [
            'question' => 'required|unique:faqs,questions',
            'answer' => 'required',
        ];

        $customMessages = [
            'question.unique' => "La nouvelle question existe déjà. Veuillez saisir une autre question.",
            'answer.required' => "Veuillez saisir la réponse.",
        ];

        $request->validate($roles, $customMessages);

        if ($faqs->questions !== $request->question) {
            $faqs->questions = $request->question;
        }
        if ($faqs->answers !== $request->answer) {
            $faqs->answers = $request->answer;
        }

        if ($faqs->save()) {
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
        Faqs::findOrFail($id)->delete();

        return back()->with('succes', "La suppression a été effectué");
    }
}
