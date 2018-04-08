@extends('layouts.app')

@section('content')

@foreach($messages as $message)

{{$message->message}}

@endforeach

@endsection