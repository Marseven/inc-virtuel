@extends('layouts.app')

@section('content')

    <h3>Gestion des Utilisateurs</h3>

    <table class="table table-striped table-responsive">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Adresse E-mail</th>
            <th>Telephone</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Pays</th>
            <th>Role</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{ $user->nom }}</td>
                <td>{{ $user->prenom }}</td>
                <td>{{ $user->email}}</td>
                <td>{{ $user->telephone }}</td>
                <td>{{ $user->adresse }}</td>
                <td>{{ $user->ville }}</td>
                <td>{{ $user->pays }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <a href="{{ route('users.edit', $user) }}" class="btn btn-info">Editer</a>
                    <a href="{{ route('users.destroy', $user) }}"
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