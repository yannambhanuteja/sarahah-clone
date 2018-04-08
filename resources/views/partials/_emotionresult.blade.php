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



 if(sizeof($angry)==1)
 {
 	$angrysize = 0;
 	
 }
 else
 {
 	
 	
 	$angrysize = sizeof($angry)-2;
 }

 if(sizeof($haha)==1)
 {
 	$hahasize = 0;
 }
 else
 {
 	$hahasize = sizeof($haha)-2;
 }
 if(sizeof($like)==1)
 {
 	$likesize = 0;
 }
 else
 {
 	$likesize = sizeof($like)-2;
 }
if(sizeof($love)==1)
 {
 	$lovesize = 0;
 }
 else
 {
 	$lovesize = sizeof($love)-2;
 }
if(sizeof($sad)==1)
 {
 	$sadsize = 0;
 }
 else
 {
 	$sadsize = sizeof($sad)-2;
 }
 if(sizeof($wow)==1)
 {
 	$wowsize = 0;
 }
 else
 {
 	$wowsize = sizeof($wow)-2;
 }
 if(sizeof($yay)==1)
 {
 	$yaysize = 0;
 }
 else
 {
 	$yaysize = sizeof($yay)-2;
 }
 $total =  $angrysize+$hahasize+$likesize+$lovesize+$sadsize+$wowsize+$yaysize;

 
if($angrysize==0)
{

	$angryper = '0';
}
else
 $angryper = round($angrysize/$total*100,2);
if($hahasize==0)
{

	$hahaper = '0';
}
else
 $hahaper = round($hahasize/$total*100,2);

if($likesize==0)
{

	$likeper = '0';
}
else
 $likeper = round($likesize/$total*100,2);
if($lovesize==0)
{

	$loveper = '0';
}
else
 $loveper = round($lovesize/$total*100,2);

if($sadsize==0)
{

	$sadper = '0';
}
else
 $sadper = round($sadsize/$total*100,2);
if($wowsize==0)
{

	$wowper = '0';
}
else
 $wowper = round($wowsize/$total*100,2);
if($yaysize==0)
{

	$yayper = '0';
}
else
 $yayper = round($yaysize/$total*100,2);
 
?>

@if($users->emotion_result=='1'|| Auth::user()->id == $users->id )

<div class="center-align row">
<div class="col s3">

<img src="/emotions/angry.png" class="responsive-img circle" id="emotions"> <br> <b>{{$angryper.'%'}}</b></div> 
<div class="col s3">
<img src="/emotions/haha.png" class="responsive-img circle" id="emotions"><br> <b>{{$hahaper.'%'}} </b></div>

<div class="col s3">
<img src="/emotions/like.png" class="responsive-img circle" id="emotions"> <br> <b>{{$likeper.'%'}} </b></div>
<div class="col s3">
<img src="/emotions/love.png" class="responsive-img circle" id="emotions"> <br> <b>{{$loveper.'%'}} </b></div>
<div class="col s3">
<img src="/emotions/sad.png" class="responsive-img circle" id="emotions"> <br> <b>{{$sadper.'%'}} </b></div>
<div class="col s3">
<img src="/emotions/wow.png" class="responsive-img circle" id="emotions"> <br> <b>{{$wowper.'%'}} </b></div>
<div class="col s3">
<img src="/emotions/yay.png" class="responsive-img circle" id="emotions"> <br> <b>{{$yayper.'%'}}</b></div> 
<div class="col s3">



</div>
@else 

<div class="center-align">You already submitted your Emotion.But this user has hidden emotion result.</div>
@endif
<style>
	#emotions{
		width: 50px;
		height: 70px;
	}
</style>