<?php

namespace App\Http\Controllers\Back;

use App\Http\Requests\FormationRequest;
use App\Models\Formation;
use App\Http\Controllers\Controller;

class FormationController extends Controller
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
        $formations = Formation::all('id', 'titre', 'niveau', 'description', 'heure_formation');
        
        return view('back.formation.index', compact('formations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formation = new Formation();
        return view('back.formation.create', compact('formation'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\FormationRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormationRequest $request)
    {
        Formation::create($request->all());

        return redirect('admin/formation')
            ->with('success', 'La formation '.$request->titre.' a bien été ajoutée');
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
        $formation = Formation::findOrFail($id);

        return view('back.formation.edit', compact('formation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\FormationRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormationRequest $request, $id)
    {
        $formation = Formation::findOrFail($id);

        $formation->update($request->only('titre', 'niveau', 'description', 'heure_formation'));

        return redirect("admin/formation/{$formation->id}/edit")
            ->with('success', 'La formation a bien été modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formation = Formation::findOrFail($id);

        $formation->delete();

        return redirect("admin/formation/")
            ->with('success', 'La formation a bien été supprimée');
    }
}
