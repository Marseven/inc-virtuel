@extends('Layouts\front')

@section('content')
<div class="breadcrumb-box">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="index.html">Accueil</a> </li>
      <li><a href="#">Utilisateur</a> </li>
      <li class="active">Connexion</li>
    </ul> 
  </div>
</div><!-- .breadcrumb-box -->


<section id="main" class="page">
  <header class="page-header">
    <div class="container">
      <h1 class="title">Connexion</h1>
    </div>  
  </header>
  <div class="container">
    <div class="row">
      <article class="content col-sm-12 col-md-12">
        <div class="bs-docs-section">
          <p></p>
          <div class="">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}" role="form">
              {{ csrf_field() }}
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                  <br>
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="inputPassword3" class="col-sm-2 control-label">Mot de Passe</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword3" placeholder="Mot de Passe" name="password" required>
                  <br>
                   @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <label class="checkbox">
                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Se Souvenir
                </label>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Connexion</button>

                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Mot de Passa Oublié ?
                    </a>
                </div>
              </div>
            </form>
          </div><!-- /example -->
        </div>
      </article>
    </div>
  </div>
</section>
@endsection
