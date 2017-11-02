@extends('layouts.app')

@section('content')

    <h3>Gestion des Sessions de formation</h3>

    <p class="text-left">
        <a href="{{ route('session.create')}}" class="btn btn-primary">Ajouter une session</a>
    </p>

    <table class="table table-striped table-responsive">
        <thead>
        <tr>
            <th>Id</th>
            <th>Durée</th>
            <th>Date Début</th>
            <th>Date Fin</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($sessions as $session)
            <tr>
                <td>{{$session->id}}</td>
                <td>{{ $session->duree }}</td>
                <td>{{ $session->debut }}</td>
                <td>{{ $session->fin }}</td>
                <td>
                    <a href="{{ route('session.edit', $session->id) }}" class="btn btn-info">Editer</a>
                    <a href="{{ route('session.destroy',  $session)}}"
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