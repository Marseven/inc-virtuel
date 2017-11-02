@extends('layouts.app')

@section('content')

    <h3>Gestion des Formations</h3>

    <p class="text-left">
        <a href="{{ route('formation.create')}}" class="btn btn-primary">Ajouter une formation</a>
    </p>

    <table class="table table-striped table-responsive">
        <thead>
            <tr>
                <td>Id</td>
                <td>Titre</td>
                <td>Niveau</td>
                <td>Description</td>
                <td>Horaires</td>
                <td>Options</td>
            </tr>
        </thead>
        <tbody>
            @foreach($formations as $formation)
                <tr>
                    <td>{{$formation->id}}</td>
                    <td>{{ $formation->titre }}</td>
                    <td>{{ $formation->niveau }}</td>
                    <td>{{ substr($formation->description, 10) }}</td>
                    <td>{{ $formation->heure_formation }}</td>
                    <td>
                        <a href="{{ route('formation.edit', $formation->id) }}" class="btn btn-info">Editer</a>
                        <a href="{{ route('formation.destroy',  $formation)}}"
                           class="btn btn-danger"
                           data-method="delete">
                            Supprimer
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection