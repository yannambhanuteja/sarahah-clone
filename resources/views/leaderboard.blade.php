@extends('layouts.master')

@section('content')

 <table class="responsive-table bordered striped highlight centered">
        <thead>
          <tr>
            
              <th>User Name</th>
              <th>Messages</th>
          </tr>
        </thead>

        <tbody>
        @foreach($members as $member)
          <tr>
            <td> {{$member->name}}</td>
            <td><?php $msg = $member->points/5; ?> {{$msg}} </b> </td>
           
          </tr>
          @endforeach
        </tbody>
      </table>

@endsection