{!! Form::model($session, [
                                'class' => 'form-horizontal',
                                'url' => route("session.".@$route, $session),
                                'method' => @$route == 'store' ? "Post" : "Put"
                            ]) !!}
        <!-- -----------------------------------
        **Durée
        ------------------------------------- -->
        <div class="form-group {!! $errors->has('duree') ? 'has-error' : '' !!}">
            {!! Form::label('duree', 'Durée', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('duree', null, ['class' => 'form-control']) !!}
                @if( $errors->has('duree'))
                    @component('front.components.error')
                    {{$errors->first('duree')}}
                    @endcomponent
                @endif
            </div>
        </div>


        <!-- -----------------------------------
        **Date de début
        ------------------------------------- -->

        <div class="form-group {!! $errors->has('debut') ? 'has-error' : '' !!}">
            {!! Form::label('debut', 'Date de début', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('debut', null, ['class' => 'form-control']) !!}
                @if( $errors->has('debut'))
                    @component('front.components.error')
                    {{$errors->first('debut')}}
                    @endcomponent
                @endif
            </div>
        </div>

        <!-- -----------------------------------
            **Date de fin
         ------------------------------------- -->

        <div class="form-group {!! $errors->has('fin') ? 'has-error' : '' !!}">
            {!! Form::label('fin', 'Date de fin', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('fin', null, ['class' => 'form-control']) !!}
                @if( $errors->has('fin'))
                    @component('front.components.error')
                    {{$errors->first('fin')}}
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