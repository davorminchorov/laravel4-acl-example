@extends("layout")

@section("content")

    {{ Form::open(["class" => "form"]) }}

        <div class="alert">
            @if(Session::get("error"))
                {{ Session::get("error") }}
            @endif
        </div>
        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::text('email', ["class" => "form-control"]) }}
            {{ $errors->first('email', ["class" => "error"]) }}
        </div>


        <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', ["class" => "form-control"]) }}
            {{ $errors->first('password', ["class" => "error"]) }}
        </div>


        <div class="form-group">
            {{ Form::label('password_confirmation', 'Confirm Password') }}
            {{ Form::password('password_confirmation', ["class" => "form-control"]) }}
            {{ $errors->first('password_confirmation', ["class" => "error"]) }}
        </div>

        {{ Form::submit('Reset', ["class" => "btn btn-primary"]) }}

    {{ Form::close() }}

@stop