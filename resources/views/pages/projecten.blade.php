@extends('main')

@section('style')
<link rel="stylesheet" href="/css/team.css">
@endsection

@section('title')
Projecten
@endsection

@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a draggable="false" class="navbar-brand" href="{{url('/')}}">KingsCode</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a draggable="false" class="nav-link" href="{{url('/')}}">Home</a>
      </li>
      <li class="nav-item">
        <a draggable="false" class="nav-link" href="{{url('team')}}">Team</a>
      </li>
      <li class="nav-item active">
        <a draggable="false" class="nav-link" href="{{url('projecten')}}">Projecten <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

@endsection
