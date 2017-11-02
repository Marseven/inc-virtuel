{!! Form::model($formation, [
                                'class' => 'form-horizontal',
                                'url' => route("formation.".@$route, $formation),
                                'method' => @$route == 'store' ? "Post" : "Put"
                            ]) !!}

    <!-- -----------------------------------
    **Titre
    ------------------------------------- -->

    <div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
        {!! Form::label('titre', 'Titre', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('titre', old('titre'), ['class' => 'form-control']) !!}
            @if( $errors->has('titre'))
                @component('front.components.error')
                {{$errors->first('titre')}}
                @endcomponent
            @endif
        </div>
    </div>


    <!-- -----------------------------------
    **Niveau
    ------------------------------------- -->

    <div class="form-group {!! $errors->has('niveau') ? 'has-error' : '' !!}">
        {!! Form::label('niveau', 'Niveau', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('niveau', old('niveau'), ['class' => 'form-control']) !!}
            @if( $errors->has('niveau'))
                @component('front.components.error')
                {{$errors->first('niveau')}}
                @endcomponent
            @endif
        </div>
    </div>

    <!-- -----------------------------------
    **Description
    ------------------------------------- -->

    <div class="form-group {!! $errors->has('description') ? 'has-error' : '' !!}">
        {!! Form::label('description', 'Description', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::textarea('description', old('description'), ['class' => 'form-control']) !!}
            @if( $errors->has('description'))
                @component('front.components.error')
                {{$errors->first('description')}}
                @endcomponent
            @endif
        </div>
    </div>


    <!-- -----------------------------------
    **Horaire
    ------------------------------------- -->

    <div class="form-group {!! $errors->has('heure_formation') ? 'has-error' : '' !!}">
        {!! Form::label('heure_formation', 'Horaire', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('heure_formation', old('heure_formation'), ['class' => 'form-control']) !!}
            @if( $errors->has('heure_formation'))
                @component('front.components.error')
                {{$errors->first('heure_formation')}}
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