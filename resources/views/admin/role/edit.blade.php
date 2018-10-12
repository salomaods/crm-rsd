@extends('layout.app')
@section('content')
<h3>Edit Roles</h3>
<nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route('admin')}}">Voltar</a>
</nav>
<form action="{{route('role.update', $role->id)}}" method="post" role="form">
    {{method_field('PATCH')}}
    {{csrf_field()}}

    <div class="form-group">
        <label for="name"></label>
        <input type="text" class="form-control" name="name" id="" placeholder="Name of Role" value="{{$role->name}}">
    </div>

    <div class="form-group">
            <label for="display_name"></label>
            <input type="text" class="form-control" name="display_name" id="" placeholder="Display Name" value="{{$role->display_name}}">
    </div>

    <div class="form-group">
            <label for="description"></label>
            <input type="text" class="form-control" name="description" id="" placeholder="Description" value="{{$role->description}}">
    </div>

    <div class="form-group">
            <h3>Permission</h3>
            @foreach($permissions as $permission)
            <input type="checkbox"{{in_array($permission->id, $role_permissions)?"checked":""}} name="permission[]" value="{{$permission->id}}"> {{$permission->name}} <br>
            @endforeach
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection