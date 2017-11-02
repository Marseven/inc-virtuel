@extends('layouts.app')


@section('content')



    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title"><h3>Ajouter une Session</h3></div>
        </div>
        <div class="panel-body">
            @include('back.sessions.form', ['route' => 'store'])
        </div>
    </div>
@endsection