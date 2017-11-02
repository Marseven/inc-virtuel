@extends('layouts.front')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            @if (session('confirmation-success'))
                @component('front.components.alert')
                    @slot('type')
                        success
                    @endslot
                {!! session('confirmation-success') !!}
                @endcomponent
            @endif

            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Création du compte</div>
                </div>
                        <!-- -----------------------------------

                <div class="panel-body">
                    {!! Form::open(['url' => route('register'), 'class' => 'form-horizontal']) !!}

                        **Nom
                        --------------------------------------->
                        <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
                            {!! Form::label('nom', 'Nom', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('nom', null, ['class' => 'form-control', 'autofocus' => 'autofocus']) !!}
                                @if( $errors->has('nom'))
                                    @component('front.components.error')
                                    {{$errors->first('nom')}}
                                    @endcomponent
                                @endif
                            </div>
                        </div>
                        <!-------------------------------------
                        **Prenom
                        --------------------------------------->
                        <div class="form-group {!! $errors->has('prenom') ? 'has-error' : '' !!}">
                            {!! Form::label('prenom', 'Prenom', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('prenom', null, ['class' => 'form-control']) !!}
                                {{ $errors->first('prenom') }}
                            </div>
                        </div>

                        <!-------------------------------------
                        * Pseudo
                        --------------------------------------->
                        <div class="form-group {!! $errors->has('pseudo') ? 'has-error' : '' !!}">
                            {!! Form::label('pseudo', 'Pseudo', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('pseudo', null, ['class' => 'form-control']) !!}
                                @if( $errors->has('pseudo'))
                                    @component('front.components.error')
                                    {{$errors->first('pseudo')}}
                                    @endcomponent
                                @endif
                            </div>
                        </div>

                        <!-------------------------------------
                        * Date de naissance
                        --------------------------------------->
                        <div class="form-group {!! $errors->has('date_naissance') ? 'has-error' : '' !!}">
                            {!! Form::label('date_naissance', 'Date de Naissance', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::date('date_naissance', null, ['class' => 'form-control']) !!}
                                @if( $errors->has('date_naissance'))
                                    @component('front.components.error')
                                    {{$errors->first('date_naissance')}}
                                    @endcomponent
                                @endif
                            </div>
                        </div>

                        <!-------------------------------------
                        * Adresse mail
                        --------------------------------------->
                        <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                            {!! Form::label('email', 'E mail', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::email('email', null, ['class' => 'form-control']) !!}
                                @if( $errors->has('email'))
                                    @component('front.components.error')
                                    {{$errors->first('email')}}
                                    @endcomponent
                                @endif
                            </div>
                        </div>
                        <!-------------------------------------
                         * Téléphone
                         --------------------------------------->
                        <div class="form-group  {!! $errors->has('telephone') ? 'has-error' : '' !!}">
                            {!! Form::label('telephone', 'Numéro de téléphone', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::tel('telephone', null, ['class' => 'form-control']) !!}
                                @if( $errors->has('telephone'))
                                    @component('front.components.error')
                                    {{$errors->first('telephone')}}
                                    @endcomponent
                                @endif
                            </div>
                        </div>

                        <!-------------------------------------
                         * Adresse
                         --------------------------------------->
                        <div class="form-group  {!! $errors->has('adresse') ? 'has-error' : '' !!}">
                            {!! Form::label('adresse', 'Quartier', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::tel('adresse', null, ['class' => 'form-control']) !!}
                                @if( $errors->has('adresse'))
                                    @component('front.components.error')
                                    {{$errors->first('adresse')}}
                                    @endcomponent
                                @endif
                            </div>
                        </div>
                        <!-------------------------------------
                        *Ville
                        --------------------------------------->
                        <div class="form-group {!! $errors->has('ville') ? 'has-error' : '' !!}">
                            {!! Form::label('ville', 'Ville', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('ville', null, ['class' => 'form-control']) !!}
                                @if( $errors->has('ville'))
                                    @component('front.components.error')
                                    {{$errors->first('ville')}}
                                    @endcomponent
                                @endif
                            </div>
                        </div>
                        <!-------------------------------------
                        *Pays
                        --------------------------------------->
                        <div class="form-group {!! $errors->has('pays') ? 'has-error' : '' !!}">
                            {!! Form::label('pays', 'Pays', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('pays', null, ['class' => 'form-control']) !!}
                                @if( $errors->has('pays'))
                                    @component('front.components.error')
                                    {{$errors->first('pays')}}
                                    @endcomponent
                                @endif
                            </div>
                        </div>
                        <!-------------------------------------
                        **Mot de passe
                        --------------------------------------->
                        <div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
                            {!! Form::label('password', 'Mot de passe', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password', ['class' => 'form-control']) !!}
                                @if( $errors->has('password'))
                                    @component('front.components.error')
                                    {{$errors->first('password')}}
                                    @endcomponent
                                @endif
                            </div>
                        </div>

                        <div class="form-group {!! $errors->has('password_confirm') ? 'has-error' : '' !!}">
                            {!! Form::label('password_confirmation', 'Confirmer le mot de passe', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                                @if( $errors->has('password_confirmation'))
                                    @component('front.components.error')
                                    {{$errors->first('password_confirmation')}}
                                    @endcomponent
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Save', ['class' => 'btn btn-info']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
