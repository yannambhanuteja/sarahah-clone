@extends('layouts.master')
@section('title', 'Search Results')
@section('content')
<div class="container">
    @if(isset($details))
        <p class="center-align"> The Search results for your query "<b> {{ $query }} </b>" are :</p>
    <h2 class="center-align">users Results</h2>
    <h4 class="center-align">Found  "{{ $users->count()}}" results</h4>
    <table class="table centered striped bordered table-striped">
        <thead>
            <tr>
                <th>photo </th>
                <th>User Name</th>

                
            </tr>
        </thead>
        <tbody >
            @foreach($details as $users)

            <tr>
<td class="center-align">@if($users->facebook_id)
 <img class="circle responsive-img materialboxed" src="https://graph.facebook.com/v2.6/{{$users->facebook_id}}/picture?height=64&width=64" /> 
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
@endif </td>
                <td ><a href="{!! url(''); !!}/{{$users->name}}"> {{$users->name}} </a></td>
               
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    @else
    <p> No Results Found </p> 
    @endif


</div>



@endsection