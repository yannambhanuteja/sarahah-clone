@extends('layouts.master')

@section('content')

      <ul class="grey  lighten-2 center-align tabs">
        <li class="tab col s6"><a class="black-text active" href="#sent">  <i class="material-icons">email</i></a></li>
        
        
      </ul>
   
    <div id="sent" class="col s12">
    	
    	<h3 class="center-align"> Sent(<b>{{$messages->count()}}</b>) </h3>
<div class="col s3 m6 l4 card" id="showmessage">
@foreach($messages as $message)
 
       <p><b> {{$message->message}} </b></p> <br>
{{$message->created_at->diffForHumans()}} <div class="right-align"> <a href="http://socialreviews.me" class="green-text"><b>Socialreviews.me </b> </a>
       </div>
<hr>
@endforeach
    </div>
    
   </div>
 
  
<style>

#showmessage{
margin:5%;
padding:1%;

font-family: 'Faustina', serif;
font-size:1.2em;
}

</style>
@endsection