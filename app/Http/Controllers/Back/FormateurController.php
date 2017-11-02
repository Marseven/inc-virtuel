<?php

namespace App\Http\Controllers\Back;

use App\Http\Requests\FormateurRequest;
use App\Models\Formateur;
use App\Http\Controllers\Controller;

class FormateurController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formateurs = Formateur::all();

        return view('back.formateur.index', compact('formateurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formateur = new Formateur();
        return view('back.formateur.create', compact('formateur'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  FormateurRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormateurRequest $request)
    {
        Formateur::create($request->all());

        return redirect('admin/formateur')
            ->with('success', 'Le formateur '.$request->nom.' a bien été ajoutée');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formateur = Formateur::findOrFail($id);

        return view('back.formateur.edit', compact('formateur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  FormateurRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormateurRequest $request, $id)
    {
        $formateur = Formateur::findOrFail($id);

        $formateur->update($request->all());

        return redirect("admin/formateur")
            ->with('success', 'La formateur a bien été modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formateur = Formateur::findOrFail($id);

        $titre = $formateur->titre;

        $formateur->delete();

        return redirect("admin/formateur/")
            ->with('success', 'La formateur '.$titre.' a bien été supprimée');
    }
}
