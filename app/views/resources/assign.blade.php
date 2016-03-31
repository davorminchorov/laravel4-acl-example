
<div class="col-md-6">

    <h4>Assign resources</h4>

    <div class="assign">
        @foreach($resources as $resource)
            <div class="form-group">
                {{ Form::checkbox("resource_id[]", $resource->id, $group->resources->contains($resource->id)) }}
                {{ $resource->name }}
            </div>

        @endforeach
    </div>
</div>