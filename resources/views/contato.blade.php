@extends('layout.app')

@section('content')

    <h1> Página de dashboard </h1>
   <ul>
    <h2> Nome: </h2>
    @if(count($pessoa))
        @foreach($pessoa as $person)
            <li>{{$person}}</li>

        @endforeach

    @endif
</ul>
@stop




@section('footer')

<script>alert("hello")</script>

@stop