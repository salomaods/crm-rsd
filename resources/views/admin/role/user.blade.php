@extends('layout.app')

@section('content')
<h3>User Roles</h3>
<nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="">Criar</a>
</nav>
<table class = "table table-bordered">
    <tr> 
            <th> Name: </th>
            <th> Roles: </th>
            <th> Action: </th>
    </tr>

    @forelse($users as $user)
        <tr> 
            <td>{{$user->name}}</td>
            <td>
                @foreach($user->roles as $role)
                    {{$role->name}}
                @endforeach
            </td>
            <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal-{{$user->id}}">Edit</button>                  
<!-- MODAL -->
<div class="modal fade" id="exampleModal-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{$user->name}} Role edit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('user.update', $user->id)}}" method="post" role="form" id="role-form-{{$user->id}}">
            {{csrf_field()}}
            {{method_field('PATCH')}}
              <div class="form-group">

                <select name="roles[]" multiple>
                    @foreach($allRoles as $role)
                        <option value="{{$role->id}}">{{$role->name}}</option>
                     @endforeach

                </select>
              </div>
              {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="$('#role-form-{{$user->id}}').submit()">Save changes</button>
        </div>
      </div>
    </div>
</div>
            </td>
        </tr>
        @empty
        <tr> 
                <th>No Roles</th>
        </tr>
    @endforelse
</table>
@endsection