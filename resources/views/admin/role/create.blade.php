@extends('adminLayout.app')
@section('content')
    <form action="{{route('role.store')}}" method="post" role="form">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name"></label>
            <input type="text" class="form-control" name="name" id="" placeholder="Name of Role">
        </div>

        <div class="form-group">
                <label for="display_name"></label>
                <input type="text" class="form-control" name="display_name" id="" placeholder="Display Name">
        </div>

        <div class="form-group">
                <label for="description"></label>
                <input type="text" class="form-control" name="description" id="" placeholder="Description">
        </div>

        <div class="form-group">
               <h3>Permission</h3>
               @foreach($permissions as $permission)
                <input type="checkbox" name="permission[]" value="{{$permission->id}}"> {{$permission->name}} <br>
               @endforeach
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection