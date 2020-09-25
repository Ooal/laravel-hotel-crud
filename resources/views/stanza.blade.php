@extends('layouts.layout1')
@section('content')
  <h1>N°-{{$stanza -> room_number}}</h1>
  <p>  Floor : {{$stanza -> floor }}</p>
  <p>  N°-Beds : {{$stanza -> beds }}</p>
  <h2><a href="{{route('index')}}">Stanze</a></h2>
@endsection
