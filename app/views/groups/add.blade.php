@extends("layout")

@section("content")

    <h1>Add a new user group</h1>
    <div class="row col-md-6">
        {{ Form::open(['route' => 'groups/add', "autocomplete" => "off"]) }}

        {{ Form::field([
                "name" => "name",
                "label" => "Group name",
                "form" => $form,
                "placeholder" => "New group"
        ]) }}
        <div class="form-group">
            {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
        </div>

        {{ Form::close() }}
    </div>


@stop

@section("footer")
    @parent
    <script src="//polyfill.io"></script>
@stop