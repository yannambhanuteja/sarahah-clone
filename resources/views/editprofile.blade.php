@extends('layouts.master')

@section('content')

 
{{ $Message = Session::get('Message') }}

<div class="edit-profile">




{!! Form::model($user,['route'=>['profile.update',$user->id],'files'=>'true','method'=>'PUT'])  !!}



@if($user->facebook_id==NULL)


             {{Form::label('','')}}
             {{Form::file('image')}}



@endif
<b> {!!Form::label('Allow anonymous users to  message you ?') !!} </b>
 {!!Form::select('anonymous', [ '1' => 'yes', '0' => 'no',

                          

                          ], null, ['class'=>'dropdowns']) !!}
<b>{!!Form::label('Allow other users to see your Emoticons result ? ') !!} </b>
 {!!Form::select('emotion_result', [ '1' => 'yes', '0' => 'no',

                          

                          ], null, ['class'=>'dropdowns']) !!}

  {!!Form::submit('update',array('class'=>'z-depth-4 waves btn blue')) !!}

  {!!Form::close()!!}

  </div>
<style>
.edit-profile{
	padding: 2%;
	margin: 10%;
}
@endsection