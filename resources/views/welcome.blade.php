@extends('layouts.master')
@section('content')

<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

<div  class="home-entry">
  
   @include('partials._typer')
   <a class="z-depth-3 hoverable blue btn-large waves" href="/login"> Login </a>
   <a class="z-depth-3 hoverable green btn-large waves" href="/register"> Register </a>

</div>

<div class="row hide-on-small-only">

<div class="hoverable card z-depth-3 green darken-2 col s3 center-align " id="home-page-section-grid">

  <h5 class="white-text"> Create a free account </h5 class="white-text">
  <br>
   <i class="medium white-text material-icons">create</i>
                  
                
</div>

<div class="hoverable card z-depth-3 blue darken-2 col s3 center-align " id="home-page-section-grid" >
 <h5 class="white-text"> Get Your Personal link </h5 class="white-text">
 <br>
 <i class="medium white-text material-icons">link</i>
 
</div>

<div class=" hoverable card z-depth-3 col s3 orange darken-2 center-align " id="home-page-section-grid" >
 <h5 class="white-text"> Share on social Media </h5 class="white-text">
 <br>
 <i class="medium white-text material-icons">share</i>

</div>
<div class="hoverable card z-depth-3 col s3 cyan darken-2 center-align " id="home-page-section-grid">
 <h5 class="white-text">Get to know about yourself</h5 class="white-text">
 <br>
 <i class="medium white-text material-icons">face</i>

</div>
</div>

<!-- Home page Intro section only on mobile-->

<div class="row hide-on-med-and-up">

<div class="hoverable card z-depth-3 green darken-2 col s3 center-align " id="home-page-section-grid-mobile">

  <h6 class="white-text"> Create a free account </h6 class="white-text">
  <br>
   <i class=" white-text material-icons">create</i>
                  
                
</div>

<div class="hoverable card z-depth-3 blue darken-2 col s3 center-align " id="home-page-section-grid-mobile" >
 <h6 class="white-text"> Get Your Personal link </h6 class="white-text">
 <br>
 <i class=" white-text material-icons">link</i>
 
</div>

<div class=" hoverable card z-depth-3 col s3 orange darken-2 center-align " id="home-page-section-grid-mobile" >
 <h6 class="white-text"> Share on social Media </h6 class="white-text">
 <br>
 <i class=" white-text material-icons">share</i>

</div>
<div class="hoverable card z-depth-3 col s3 cyan darken-2 center-align " id="home-page-section-grid-mobile">
 <h6 class="white-text">Get to know about yourself</h6 class="white-text">
 <br>
 <i class=" white-text material-icons">face</i>

</div>
</div>

<!-- Home page secondary section -->
  @include('partials._stats')


<style>
html, body {
  margin: 0; padding: 0;
}
.home-entry {
  background:  linear-gradient(rgba(255,255,255,.5), rgba(255,255,255,.5)),gray url(https://previews.123rf.com/images/zarja/zarja1208/zarja120800008/14928543-Multitud-de-fondo-sin-fisuras-Foto-de-archivo.jpg) repeat 0 0;
  width: 100%;
  margin: 0;
  text-align: center;
  height: 400px;

  padding-top: 120px;
  box-sizing: border-box;
  -webkit-animation: slide 20s linear infinite;

}

.home-entry h1 {
 
}

@-webkit-keyframes slide {
    from { background-position: 0 0; }
    to { background-position: -400px 0; }
}

h1 {

    z-index: 999;
}

#home-page-section-grid{

    min-height: 190px;
    padding: 10px;
}

#home-page-section-grid-mobile{

    min-height: 170px;
    padding: 10px;
}
</style>

@endsection