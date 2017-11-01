@extends('main')

@section('style')
<link rel="stylesheet" href="/css/welcome.css">
<!-- jQuery Plugin -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.min.js"></script>

<!-- Preloader -->
<script type="text/javascript">
    //<![CDATA[
        $(window).on('load', function() { // makes sure the whole site is loaded
            $('#status').delay(6050).fadeOut();
            $('#loadtext').delay(6050).fadeOut(); // will first fade out the loading animation
            $('#preloader').delay(6050).fadeOut('slow', function() {
      $('body').removeClass('loading');}); // will fade out the white DIV that covers the website.

          })
    //]]>
</script>

@endsection

@section('title')
Home
@endsection

@section('content')

<div id="preloader">
  <div id="status"><img id="loader" src="/img/loader/loader.gif" alt="" width="20%"></div>
<p align="center"><script language="JavaScript1.1" src="/js/randomload.js">
</script></p>
</div>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a draggable="false" class="navbar-brand" href="{{url('/')}}">KingsCode</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a draggable="false" class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a draggable="false" class="nav-link" href="{{url('team')}}">Team</a>
      </li>
      <li class="nav-item">
        <a draggable="false" class="nav-link" href="{{url('projecten')}}">Projecten</a>
      </li>
    </ul>
  </div>
</nav>

<div class="jumbotron">
  <video id="bg-video" autoplay="true" loop="loop" preload="metadata" muted="muted">
    <source src="/vid/header.mp4" type="video/mp4" />
  </video>
  <div class="center jumbovidtext text-center">
    <h1 class="txtjumbo  d-none d-sm-none d-md-block d-xl-block">KingsCode</h1>
    <p class="txtjumbo  d-none d-sm-none d-md-block d-xl-block">Code fit for a King!</p>
  </div>
</div>

<main>
<div class="container text-center">
  <h3 class="d-block d-sm-block d-md-none d-xl-none">KingsCode</h3><br>
  <div class="row">
    <div class="col-sm-4 ">
      <a draggable="false" href="http://www.yarnobachmann.nl/" target="_blank">
      <img draggable="false" id="yarno" src="/img/test1.jpeg" class="img-responsive morph pic" style="width:100%" alt="Image">
      </a>
      <h3 class="spacing-top-h3">Yarno</h3>
    </div>
    <div class="col-sm-4">

    </div>
    <div class="col-sm-4">
      <a draggable="false" href="http://collinsportfolio.ga/" target="_blank">
      <img draggable="false" id="collin" src="/img/test2.jpg" class="img-responsive morph pic" style="width:100%" alt="Image">
      </a>
      <h3 class="spacing-top-h3">Collin</h3>
    </div>
  </div>
</div><br>
<hr>
<div class="container text-center">
  <h4>Over Kings Code</h4><br>
  <div class="row">
    <p>KingsCode is een bedrijf die website maakt voor iedereen die er behoefte aan heeft dus ben jij een zzp'er en wil jij een website? Dan ben jij op het juiste adres. Wij maken elke website met hoofdgedachte mobile responsive</p>
  </div>
</div><br>
</main>
<footer class="container-fluid text-center">
  <h1>Kingscode</h1>
</footer>

@endsection
