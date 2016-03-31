@extends("layout")

@section("content")

    {{ Form::open() }}
    <div class="alert alert-danger">
        @if (Session::get('error'))
            {{ Session::get('error') }} <br/>
        @endif
    </div>


    <div class="alert alert-info">
        @if (Session::get('status'))
            {{ Session::get('status') }} <br/>
        @endif
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email', Input::old('email', ["class" => "form-control"])) }}
    </div>

    {{ Form::submit('Reset', ["class" => "btn btn-primary"]) }}

    {{ Form::close() }}

@stop