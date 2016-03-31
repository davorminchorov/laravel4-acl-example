@extends("layout")

@section("content")
    <div class="row col-md-6">

        <h1>Edit existing group: {{ $group->name }}</h1>

        {{ Form::open(['url' => URL::full(), "autocomplete" => "off"]) }}

        {{ Form::field([
                "name" => "name",
                "label" => "Group name",
                "form" => $form,
                "placeholder" => "",
                "value" => $group->name
        ]) }}


            @include("users/assign")
            @include("resources/assign")


        <div class="form-group">
            {{ Form::submit('Save', ['class' => 'btn btn-primary btn-lg btn-block']) }}
        </div>

        {{ Form::close() }}
    </div>


@stop

@section("footer")
    @parent
    <script src="//polyfill.io"></script>
@stop