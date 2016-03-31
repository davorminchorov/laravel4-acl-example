
<div class="col-md-6">

    <h4>Assign users</h4>

    <div class="assign">
        @foreach($users as $user)
            <div class="form-group">
                {{ Form::checkbox("user_id[]", $user->id, $group->users->contains($user->id)) }}
                {{ $user->username }}
            </div>

        @endforeach
    </div>
</div>