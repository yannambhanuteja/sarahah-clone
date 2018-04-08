@extends('layouts.master')

@section('content')


<div class="left-align">

<h4> Welcome  @if(!Auth::user()->name==NULL)
   <b> {{Auth::user()->name}} </b>
 @endif

 </h4>

</div> 

                    @if(Auth::user()->name==NULL)

                    <p> You have Created user name yet.Create your user name.Choose your username wisely {!!url('');!!}/username will be you unique link.</p>
<div class="create-username">
<div class="row center-align"> 
<div class="col s6 offset-s3"> 
                     {{Form::open(array('route'=>'user.update'))}}
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     {{Form::text('name')}}
                     {{Form::submit('create user name',array('class'=>'btn green '))}}

                     {{Form::close()}}
                     </div>
</div>
</div>
                              @if ($errors->any())
    <div class="center-align red-text">
        <ul>
            @foreach ($errors->all() as $error)
                <li> *{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    </div>
    
@endif
@endif

          
                    <br>
                    <?php

                     $user = Auth::user()->name;
                     $user = str_replace(" ","-", $user);

                    ?>
               


<div class="center-align">

 <div class="copy">
       <h5 > Copy the link and share on social Media </h5>
      <form class="copy-link">
           <div class="row">
           <div class="input-field col s11">
      
           <input  type="text" value="{!! url(''); !!}/{{$user}}">
             </div>
             <div class="input-field col s1">
             <button type="button"> <i class="material-icons">content_copy</i></button>
             </div>
             </div>
      </form>

</div>
</div>
<script>
        
(function() {
  var copyButton = document.querySelector('.copy button');
  var copyInput = document.querySelector('.copy input');
  copyButton.addEventListener('click', function(e) {
    e.preventDefault();
    var text = copyInput.select();
    document.execCommand('copy');
  });

  copyInput.addEventListener('click', function() {
    this.select();
  });
})();
</script>
   
   
<style>
button{

    border: none;
    background: none;
}

.copy-link {

    padding: 10px;

}
.create-username{
    border: 1px solid black;
    border-radius: 10px;
    padding: 10px;
    margin-left: 10px;
    margin-right: 10px;
}
</style>

<div class="row">

<div class="col s3"> Share Your Link on Social Media </div>
<div class="col s9">
<div class="fb-share-button" data-href="{!! url(''); !!}/{{$user}}" data-layout="button_count"  data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>
<link rel="me"
  href="https://twitter.com/twitterdev"
>

<a href="https://twitter.com/share?url={!! url(''); !!}/{{$user}}" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
    </a>

<a href="https://plus.google.com/share?url={!! url(''); !!}/{{$user}}" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="googleplus" />
    </a>
    </div>
    </div>

@endsection
