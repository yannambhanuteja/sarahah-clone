@extends('layouts.master')

@section('content')
<style>

#showmessage{
margin:5%;
padding:1%;

font-family: 'Faustina', serif;
font-size:1.2em;
}

</style>

      <ul class="grey  lighten-2 center-align tabs">
        <li class="tab col s6"><a class="black-text active" href="#inbox">  <i class="material-icons">email</i></a></li>
        <li class="tab col s6"><a class="black-text " href="#fav">  <i class="red-text material-icons">favorite</i></a></li>
        <li class="blue indicator "> </li>
        
      </ul>
   
    <div id="inbox" class="col s12">
      
      <h3 class="center-align"> Inbox(<b>{{$messages->count()}}</b>) </h3>
<div class="col s12 card" id="showmessage">
@foreach($messages as $message)


  
       <p><b> {{$message->message}} </b></p> <br>
{{$message->created_at->diffForHumans()}} <div class="right-align"> <a href="{!! url(''); !!}" class="green-text"><b>{!! url(''); !!} </b> </a></div>
@if($message->favorite==0)
{!!Form::open(array('route'=>'message.favour'))!!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<button type="submit" class="pink-text" href="/favourite"> <i class="material-icons">favorite_border </i></button>
{{Form::hidden('messageid',$message->id)}}
{!!Form::close()!!}

@else

{!!Form::open(array('route'=>'message.unfavour'))!!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<button type="submit" class="pink-text" href="/favourite"> <i class="material-icons">favorite </i></button>
{{Form::hidden('messageid',$message->id)}}
{!!Form::close()!!}
@endif
{!!Form::open(array('route'=>'message.delete'))!!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<button type="submit" class="red-text" href="/delete"> <i class="material-icons">delete</i></button>
{{Form::hidden('messageid',$message->id)}}
{!!Form::close()!!}
       


<hr>

@endforeach
  </div>
</div>

    <div id="fav" class="col s12">
      

      <h3 class="center-align"> Favorites(<b>{{$fav->count()}}</b>) </h3>
<div class="col s12 card" id="showmessage">
@foreach($fav as $message)


  
       <p><b> {{$message->message}} </b></p> <br>
{{$message->created_at->diffForHumans()}} <div class="right-align"> <a href="http://socialreviews.me" class="green-text"><b>Socialreviews.me </b> </a></div>
@if($message->favorite==0)
{!!Form::open(array('route'=>'message.favour'))!!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<button type="submit" class="pink-text" href="/favourite"> <i class="material-icons">favorite_border </i></button>
{{Form::hidden('messageid',$message->id)}}
{!!Form::close()!!}

@else

{!!Form::open(array('route'=>'message.unfavour'))!!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<button type="submit" class="pink-text" href="/favourite"> <i class="material-icons">favorite </i></button>
{{Form::hidden('messageid',$message->id)}}
{!!Form::close()!!}
@endif
{!!Form::open(array('route'=>'message.delete'))!!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<button type="submit" class="red-text" href="/delete"> <i class="material-icons">delete</i></button>
{{Form::hidden('messageid',$message->id)}}
{!!Form::close()!!}
       


<hr>
@endforeach
    </div>
   </div>
 
  
<style>
  .row{

    padding: 10px;
    margin-left: 10%;
    margin-right: 10%;
  }

  button{

    border:none;
      background: none;
  }
</style>
@endsection