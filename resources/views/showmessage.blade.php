@extends('layouts.master')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Faustina" rel="stylesheet">
        <div class="col s3 m6 l4 card" id="showmessage">
       <p><b> {{$message->message}} </b></p> <br>
{{$message->created_at->diffForHumans()}} <div class="right-align"> <a href="http://socialreviews.me" class="green-text"><b>Socialreviews.me </b> </a>
       </div>
   
<?php $url = Request::url(); ?>

<style>

#showmessage{
margin:5%;
padding:1%;

font-family: 'Faustina', serif;
font-size:1.5em;
}

</style>

@endsection