@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <div class="panel panel-primary" style="border-radius: 0;">
                <div class="panel-heading" style="border-radius: 0;">
                    <div class="panel-title">Comte Utilisateur</div>
                </div>
                <div class="panel-body">
                    {!! Form::model($user, ['class' => 'form-horizontal', 'method' => 'Put', 'url' => route('users.update', $user)]) !!}

                    <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
                        {!! Form::label('nom', 'Nom', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('nom', $user->nom, ['class' => 'form-control', 'disabled', 'autofocus' => 'autofocus']) !!}
                            @if( $errors->has('nom'))
                                @component('front.components.error')
                                {{$errors->first('nom')}}
                                @endcomponent
                            @endif
                        </div>
                    </div>

                    <!-- -----------------------------------
                    **Prenom
                    ------------------------------------- -->
                    <div class="form-group {!! $errors->has('prenom') ? 'has-error' : '' !!}">
                        {!! Form::label('prenom', 'Prenom', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('prenom', $user->prenom, ['class' => 'form-control', 'disabled']) !!}
                            @if( $errors->has('prenom'))
                                @component('front.components.error')
                                {{$errors->first('prenom')}}
                                @endcomponent
                            @endif
                        </div>
                    </div>

                    <!-- -----------------------------------
                    **Email
                    ------------------------------------- -->
                    <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                        {!! Form::label('email', 'Adresse E-mail', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::email('email', $user->email, ['class' => 'form-control', 'disabled']) !!}
                            @if( $errors->has('email'))
                                @component('front.components.error')
                                {{$errors->first('email')}}
                                @endcomponent
                            @endif
                        </div>
                    </div>

                    <!-- -----------------------------------
                    **Téléphone
                    ------------------------------------- -->
                    <div class="form-group {!! $errors->has('telephone') ? 'has-error' : '' !!}">
                        {!! Form::label('telephone', 'Téléphone', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('telephone', $user->telephone, ['class' => 'form-control', 'disabled']) !!}
                            @if( $errors->has('telephone'))
                                @component('front.components.error')
                                {{$errors->first('telephone')}}
                                @endcomponent
                            @endif
                        </div>
                    </div>

                    <!-- -----------------------------------
                    **Quartier
                    ------------------------------------- -->
                    <div class="form-group {!! $errors->has('adresse') ? 'has-error' : '' !!}">
                        {!! Form::label('adresse', 'Quartier', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('adresse', $user->adresse, ['class' => 'form-control', 'disabled']) !!}
                            @if( $errors->has('adresse'))
                                @component('front.components.error')
                                {{$errors->first('adresse')}}
                                @endcomponent
                            @endif
                        </div>
                    </div>

                    <!-- -----------------------------------
                    **Ville
                    ------------------------------------- -->
                    <div class="form-group {!! $errors->has('ville') ? 'has-error' : '' !!}">
                        {!! Form::label('ville', 'Ville', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('ville', $user->ville, ['class' => 'form-control', 'disabled']) !!}
                            @if( $errors->has('ville'))
                                @component('front.components.error')
                                {{$errors->first('ville')}}
                                @endcomponent
                            @endif
                        </div>
                    </div>

                    <!-- -----------------------------------
                    **Pays
                    ------------------------------------- -->
                    <div class="form-group {!! $errors->has('pays') ? 'has-error' : '' !!}">
                        {!! Form::label('pays', 'Pays', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('pays', $user->pays, ['class' => 'form-control', 'disabled']) !!}
                            @if( $errors->has('pays'))
                                @component('front.components.error')
                                {{$errors->first('pays')}}
                                @endcomponent
                            @endif
                        </div>
                    </div>

                    <!-- -----------------------------------
                    **Role
                    ------------------------------------- -->
                    <div class="form-group {!! $errors->has('role') ? 'has-error' : '' !!}">
                        {!! Form::label('role', 'Fonction', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::select('role', [ '' => null,
                                        'editeur' => 'Editeur',
                                        'responsable' => 'Responsable'
                                         ], $user->role, ['class' => 'form-control'])
                              !!}
                            @if( $errors->has('role'))
                                @component('front.components.error')
                                {{$errors->first('role')}}
                                @endcomponent
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection