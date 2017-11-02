@extends('layouts.app')

@section('content')

    <h3>Gestion des Formateurs</h3>

    <p class="text-left">
        <a href="{{ route('formateur.create')}}" class="btn btn-primary">Ajouter un formateur</a>
    </p>

    <table class="table table-striped table-responsive">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse E-mail</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Pays</th>
                <th>Nationalité</th>
                <th>Grade</th>
                <th>Spécialité</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach($formateurs as $formateur)
                <tr>
                    <td>{{$formateur->id}}</td>
                    <td>{{ $formateur->nom }}</td>
                    <td>{{ $formateur->prenom }}</td>
                    <td>{{ $formateur->email }}</td>
                    <td>{{ $formateur->adresse }}</td>
                    <td>{{ $formateur->ville }}</td>
                    <td>{{ $formateur->pays }}</td>
                    <td>{{ $formateur->nationalite }}</td>
                    <td>{{ $formateur->grade }}</td>
                    <td>{{ $formateur->specialite }}</td>
                    <td>
                        <a href="{{ route('formateur.edit', $formateur->id) }}" class="btn btn-info">Editer</a>
                        <a href="{{ route('formateur.destroy',  $formateur)}}"
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