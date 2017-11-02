{!! Form::model($formateur, [
                                'class' => 'form-horizontal',
                                'url' => route("formateur.".@$route, $formateur),
                                'method' => @$route == 'store' ? "Post" : "Put"
                            ]) !!}

    <!-- -----------------------------------
    **Nom
    ------------------------------------- -->

    <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
        {!! Form::label('nom', 'Nom', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('nom', old('nom'), ['class' => 'form-control', 'autofocus']) !!}
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
            {!! Form::text('prenom', old('prenom'), ['class' => 'form-control']) !!}
            @if( $errors->has('prenom'))
                @component('front.components.error')
                {{$errors->first('prenom')}}
                @endcomponent
            @endif
        </div>
    </div>

    <!-- -----------------------------------
    **Adresse E-mail
    ------------------------------------- -->

    <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
        {!! Form::label('email', 'Adresse E-mail', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
            @if( $errors->has('email'))
                @component('front.components.error')
                {{$errors->first('email')}}
                @endcomponent
            @endif
        </div>
    </div>

    <!-- -----------------------------------
        **Adresse
        ------------------------------------- -->

    <div class="form-group {!! $errors->has('adresse') ? 'has-error' : '' !!}">
        {!! Form::label('adresse', 'Adresse', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('adresse', old('adresse'), ['class' => 'form-control']) !!}
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
            {!! Form::text('ville', old('ville'), ['class' => 'form-control']) !!}
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
            {!! Form::text('pays', old('pays'), ['class' => 'form-control']) !!}
            @if( $errors->has('pays'))
                @component('front.components.error')
                {{$errors->first('pays')}}
                @endcomponent
            @endif
        </div>
    </div>


    <!-- -----------------------------------
    **Nationalité
    ------------------------------------- -->

    <div class="form-group {!! $errors->has('nationalite') ? 'has-error' : '' !!}">
        {!! Form::label('nationalite', 'Nationalité', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('nationalite', old('nationalite'), ['class' => 'form-control']) !!}
            @if( $errors->has('nationalite'))
                @component('front.components.error')
                {{$errors->first('nationalite')}}
                @endcomponent
            @endif
        </div>
    </div>

    <!-- -----------------------------------
    **Grade
    ------------------------------------- -->

    <div class="form-group {!! $errors->has('grade') ? 'has-error' : '' !!}">
        {!! Form::label('grade', 'Grade', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('grade', old('grade'), ['class' => 'form-control']) !!}
            @if( $errors->has('grade'))
                @component('front.components.error')
                {{$errors->first('grade')}}
                @endcomponent
            @endif
        </div>
    </div>

    <!-- -----------------------------------
    **Spécialité
    ------------------------------------- -->

    <div class="form-group {!! $errors->has('specialite') ? 'has-error' : '' !!}">
        {!! Form::label('specialite', 'Spécialité', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('specialite', old('specialite'), ['class' => 'form-control']) !!}
            @if( $errors->has('specialite'))
                @component('front.components.error')
                {{$errors->first('specialite')}}
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