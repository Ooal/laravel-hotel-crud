@extends('layouts.layout1')
@section('content')
  <h1>Stanze</h1>
  <ul>
    @foreach ($stanze as $stanza)
      <li><a href="{{route('show', $stanza -> id)}}">N°-{{$stanza -> room_number}}</a></li>
    @endforeach
  </ul>
  <h2><a href="{{route('create')}}">Nuova Stanza</a></h2>
@endsection
