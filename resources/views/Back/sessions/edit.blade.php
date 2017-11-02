@extends('layouts.app')


@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title"><h3>Editer</h3></div>
        </div>
        <div class="panel-body">
            @include('back.sessions.form', ['route' => 'update'])
        </div>
    </div>
@endsection