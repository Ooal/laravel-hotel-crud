@extends('layouts.layout1')
@section('content')
  <h1><a href="{{route('index')}}">Stanze</a></h1>
  <div class="login-box">
    <h1>NEW STANZA</h1>
    <form action="{{route('store')}}" method="post">
      @csrf
      @method('POST')

      <div class="user-box">
        <input type="text" name="room_number" value="">
        <label for="room_number">room_number</label>
      </div>
      <div class="user-box">
        <input type="text" name="floor" value="">
        <label for="floor">floor</label>
      </div>
      <div class="user-box">
        <input type="text" name="beds" value="">
        <label for="beds">beds</label>
      </div>
      <button type="submit">Crea Nuova</button>
    </form>
  </div>

@endsection
