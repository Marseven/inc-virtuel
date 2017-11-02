@extends('layouts.back-login')

@section('content')
<div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0">
                    <div class="card border-grey border-lighten-3 m-0">
                        <div class="card-header no-border">
                            <div class="card-title text-xs-center">
                                <div class="p-1"><img src="../../app-assets/images/logo/robust-logo-dark.png" alt="Logo CyberSchool Entrepreunariat"></div>
                            </div>
                            <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Zone d'Administration</span></h6>
                        </div>
                        <div class="card-body collapse in">
                            <p style="text-align: center;">Donnez votre adresse pour pouvoir réinitialiser votre mot de passe.</p>
                            <div class="card-block">
                                <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">E-Mail</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                        <br><br>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Envoyer 
                                            </button>
                                        </div>
                                    </div>
                                </form>                   
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="">
                                <p class="float-sm-left text-xs-center m-0">
                                    <a class="btn btn-link" href="{{ route('login') }}">
                                        Connexion                                    </a>
                                </p>
                                <p class="float-sm-right text-xs-center m-0"><a href="/" class="card-link">Retouner à Page d'accueil</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
      </div>
    </div>

@endsection
