@extends("layout")

@section("content")
    <div class="row col-md-6">
        <h1>Login!</h1>

        @if( $errors->any())
            <div class="alert alert-danger">
                <p>
                    {{ $errors->first('username') }}
                </p>
                <p>
                    {{ $errors->first('password') }}
                </p>
            </div>

        @endif
        {{ Form::open() }}


        <div class="form-group">

            {{ Form::label('username', 'Username') }}
            {{ Form::text('username', Input::old('username'), ["class" => "form-control"]) }}
        </div>
        <div class="form-group">

            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', ["class" => "form-control"]) }}
        </div>
        <div class="form-group">

            {{ Form::submit('Login', ['class' => 'btn btn-primary btn-block btn-lg']) }}
        </div>


        {{ Form::close() }}
    </div>


@stop