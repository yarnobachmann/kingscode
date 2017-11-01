@extends('main')

@section('style')
<link rel="stylesheet" href="/css/team.css">
@endsection

@section('title')
Team
@endsection

@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a draggable="false" class="navbar-brand" href="{{url('/')}}">KingsCode</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a draggable="false" class="nav-link" href="{{url('/')}}">Home </a>
      </li>
      <li class="nav-item  active">
        <a draggable="false" class="nav-link" href="{{url('team')}}">Team<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a draggable="false" class="nav-link" href="{{url('projecten')}}">Projecten</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="row yarno-border">
    <div class="col-sm-6 text-left">
      <a draggable="false" href="http://www.yarnobachmann.nl/" target="_blank">
      <img draggable="false" id="yarno" src="/img/test1.jpeg" class="img-responsive" style="width:100%" alt="Image">
      </a>

    </div>
    <div class="col-sm-6 text-right d-none d-sm-none d-md-block d-xl-block">
      <h3 class="spacing-top-h3">Yarno</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <a class="btn btn-primary spacing-bottom-btn" href="#">portfolio</a>
    </div>
    <div class="col-sm-6 text-left d-block d-sm-block d-md-none d-xl-none">
      <h3 class="spacing-top-h3">yarno</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <a class="btn btn-primary spacing-bottom-btn" href="#">portfolio</a>
    </div>
  </div>
  <br>
  <div class="row collin-border">
    <div class="col-sm-6 text-right d-block d-sm-block d-md-none d-xl-none">
      <a draggable="false" href="http://collinsportfolio.ga/" target="_blank">
      <img draggable="false" id="collin" src="/img/test2.jpg" class="img-responsive" style="width:100%" alt="Image">
      </a>

    </div>
    <div class="col-sm-6 text-left">
      <h3 class="spacing-top-h3">Collin</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <a class="btn btn-primary spacing-bottom-btn" href="#">portfolio</a>
    </div>
    <div class="col-sm-6 text-right d-none d-sm-none d-md-block d-xl-block">
      <a draggable="false" href="http://collinsportfolio.ga/" target="_blank">
      <img draggable="false" id="collin" src="/img/test2.jpg" class="img-responsive" style="width:100%" alt="Image">
      </a>
    </div>

  </div>
</div>

<footer class="container-fluid text-center">
  <h1>Kingscode</h1>
</footer>
@endsection
