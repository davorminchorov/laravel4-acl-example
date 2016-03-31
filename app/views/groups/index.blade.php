@extends("layout")

@section("content")

    <h1>User Groups</h1>

    @if(count($groups))

        <table class="table">
            <tr>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            @foreach($groups as $group)
                <tr>
                    <td>{{ $group->name }}</td>
                    <td>
                        <a href="{{ URL::route("groups/edit") }}?id={{ $group->id  }}">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>

                    </td>

                    <td>
                        <a href="{{ URL::route("groups/delete") }}?id={{ $group->id  }}"
                           class="confirm "
                           data-confirm="Are you sure you want to delete this group?">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                    </td>
                </tr>

            @endforeach

        </table>
    @else
        <p>There are no groups. </p>
    @endif

    <a href="{{ URL::route("groups/add") }}"><span class="glyphicon glyphicon-plus"></span> Add a new group</a>

@stop