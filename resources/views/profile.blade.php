@extends('layouts.master')

 @section('content')
 <div class="center-align">
 <h4 > {{$users->name}} </h4>
 <center>
 @if($users->facebook_id)
 <img class="circle responsive-img materialboxed" src="https://graph.facebook.com/v2.6/{{$users->facebook_id}}/picture?height=320&width=320" /> 
 @else
@if($users->avatar)
  <img class="circle responsive-img materialboxed" id="avatar" src="/users/{{$users->avatar}}" /> 
@endif
  <style>
    #avatar{
      height: 320px;
      width: 320px;
    }
  </style>
@endif
 </center>
</div>

@if(Auth::check() && Auth::user()->id == $users->id)


@include('myprofile')
@else
@if(Auth::check())
<div class="center-align">
{!! Form::open(array('route'=>'message.store')) !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">

 
 {{Form::textarea('message')}}
  {{Form::submit('send',array('class'=>'btn blue white-text z-depth-3'))}}
  
  {{Form::hidden('user_to',$users->id)}}
{{Form::close()}}
</div>
@elseif($users->anonymous=='1')
<div class="center-align">
{!! Form::open(array('route'=>'message.store')) !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">

 
 {{Form::textarea('message')}}
  {{Form::submit('send',array('class'=>'btn blue white-text z-depth-3'))}}
  
  {{Form::hidden('user_to',$users->id)}}
{{Form::close()}}
</div>

<div class="center-align"><b> Please Login To submit emoticon to this user.yet your identity will not be revealed. </b></div>
@else
 
 <p> you cant send this user a messages without Logging in and still after login your identity will no be revealed.</p>
 @endif

@endif

@if(Auth::check() && Auth::user()->id!=$users->id)
<script type="text/javascript" src="http://oscaruhp.github.io/FaceMocion/js/prism.js"></script>

<script type="text/javascript" src="http://oscaruhp.github.io/FaceMocion/faceMocion.js"></script>
<link rel="stylesheet" type="text/css" href="http://oscaruhp.github.io/FaceMocion/faceMocion.css">
 <div class="center-align"> 
<?php 
 $angry_array = $users->angry;
 $angry = explode(',',$angry_array);

 $haha_array = $users->haha;
 $haha = explode(',',$haha_array);

 $like_array = $users->like;
 $like = explode(',',$like_array);

  $love_array = $users->love;
 $love = explode(',',$love_array);

  $sad_array = $users->sad;
 $sad = explode(',',$sad_array);

  $wow_array = $users->wow;
 $wow = explode(',',$wow_array);

  $yay_array = $users->yay;
 $yay = explode(',',$yay_array);
?>
@if(
    in_array(Auth::user()->id, $angry)||
    in_array(Auth::user()->id, $haha)||
    in_array(Auth::user()->id, $like)||
    in_array(Auth::user()->id, $love)||
    in_array(Auth::user()->id, $sad)||
    in_array(Auth::user()->id, $wow)||
    in_array(Auth::user()->id, $yay)

    )



    @include('partials._emotionresult')

@else
<div class="center-align row">

<div class="col s3"> 
   {!! Form::open(array('route'=>'angry.store')) !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">



 {{Form::hidden('user_from',Auth::user()->id)}}
 {{Form::hidden('user_to',$users->id)}}
 {{Form::hidden('angry','angry')}}
 
  {{ Form::image(url('/emotions/angry.png'), 'submit',array('class'=>'responsive-img emotions_pic')) }}
  
{{Form::close()}}
</div>
<div class="col s3"> 
{!! Form::open(array('route'=>'haha.store')) !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">



 {{Form::hidden('user_from',Auth::user()->id)}}
 {{Form::hidden('haha','haha')}}
 {{Form::hidden('user_to',$users->id)}}
 
  {{ Form::image(url('/emotions/haha.png'), 'submit',array('class'=>'responsive-img emotions_pic')) }}
  
{{Form::close()}}
</div>
<div class="col s3"> 
{!! Form::open(array('route'=>'like.store')) !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">



 {{Form::hidden('user_from',Auth::user()->id)}}
 {{Form::hidden('like','like')}}
 {{Form::hidden('user_to',$users->id)}}
  {{ Form::image(url('/emotions/like.png'), 'submit',array('class'=>'responsive-img emotions_pic')) }}
  
{{Form::close()}}
</div>
<div class="col s3"> 
{!! Form::open(array('route'=>'love.store')) !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">



 {{Form::hidden('user_from',Auth::user()->id)}}
 {{Form::hidden('love','love')}}
 {{Form::hidden('user_to',$users->id)}}
  {{ Form::image(url('/emotions/love.png'), 'submit',array('class'=>'responsive-img emotions_pic')) }}
  
{{Form::close()}}

</div>
<div class="col s3"> 
{!! Form::open(array('route'=>'sad.store')) !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">



 {{Form::hidden('user_from',Auth::user()->id)}}
 {{Form::hidden('sad','sad')}}
 {{Form::hidden('user_to',$users->id)}}
 
  {{ Form::image(url('/emotions/sad.png'), 'submit',array('class'=>'responsive-img emotions_pic')) }}
  
{{Form::close()}}


</div>
<div class="col s3"> 
{!! Form::open(array('route'=>'wow.store')) !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">

{{Form::hidden('user_to',$users->id)}}

 {{Form::hidden('user_from',Auth::user()->id)}}
 {{Form::hidden('wow','wow')}}
 
  {{ Form::image(url('/emotions/wow.png'), 'submit',array('class'=>'responsive-img emotions_pic')) }}
  
{{Form::close()}}
</div>
<div class="col s3"> 
{!! Form::open(array('route'=>'yay.store')) !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">


{{Form::hidden('user_to',$users->id)}}
 {{Form::hidden('user_from',Auth::user()->id)}}
 {{Form::hidden('yay','yay')}}
 
  {{ Form::image(url('/emotions/yay.png'), 'submit',array('class'=>'responsive-img emotions_pic')) }}
  
{{Form::close()}}

 </div>
</div>
@endif

@endif
<style>
textarea {

    width: 350px;
    height: 200px;
    
    margin:20px;
}

textarea:hover, input:hover, textarea:active, input:active, textarea:focus, input:focus {
        outline:0px !important;
    }
.emotions_pic{

  width: 50px;
  height: 70px;
}
@endsection
