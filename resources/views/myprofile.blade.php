<br>
<br>
<div class="center-align">

<a class="hoverable btn blue waves white-text z-depth-4" href="/{!!Auth::user()->id!!}/editprofile">Edit Profile</a> 
<br><br>
<p> You received  <?= (Auth::user()->points)/5;?> messsages.</p>



</div>

@include('partials._emotionresult')