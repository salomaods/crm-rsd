@extends('adminLayout.app')
@section('content')

<table class = "table table-bordered">
    <tr> 
            <th> Name: </th>
            <th> Display: </th>
            <th> Description: </th>
            <th> Action: </th>
    </tr>

    @forelse($roles as $role)
        <tr> 
                <td>{{$role->name}}</td>
                <td>{{$role->display_name}}</td>
                <td>{{$role->description}}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{route('role.edit', $role->id)}}">Edit</a>
                    <form action="{{route('role.destroy', $role->id)}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                    </form>
                </td>
        </tr>
        @empty
        <tr> 
                <th>No Roles</th>
        </tr>
    @endforelse
</table>
@endsection