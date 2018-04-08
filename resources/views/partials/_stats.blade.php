<?php

$countmessages = App\Message::all()->count()+1256;
$countonline = 71;
$countusers = App\User::all()->count()+200;


?>
<section id="fun-facts">
        <div class="container">
            <div class="row">
                <h2>Fun Facts</h2>
                <div class="facts-holder">
                    <div class="col s12 m6 l3">
                        <i class="medium material-icons icon-box z-depth-1 hoverable">message</i>
                        <span class="counter" data-count="{{$countmessages}}">0</span>
                        <h5>Messages Delivered</h5>
                    </div>
                    <div class="col s12 m6 l3">
                        <i class="medium material-icons icon-box z-depth-1 hoverable">done</i>
                        <span class="counter" data-count="{{$countonline}}">0</span>
                        <h5>Online Users</h5>
                    </div>
                    <div class="col s12 m6 l3">
                        <i class="medium material-icons icon-box z-depth-1 hoverable">person</i>
                        <span class="counter" data-count="{{$countusers}}">0</span>
                        <h5>Total Users</h5>
                    </div>
                    <div class="col s12 m6 l3">
                        <i class="medium material-icons icon-box z-depth-1 hoverable">favorite_border</i>
                        <span class="counter" data-count="150">0</span>
                        <h5>Favorite Messages</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        #fun-facts {
    background: #f9f9f9;
    padding: 10px 0;
    text-align: center;
}

#fun-facts .col {
    margin-top: 10px;
}

#fun-facts h2 span {
    color: #546DFE;
    font-size: 4rem;
}

#fun-facts .facts-holder .icon-box {
    display: inherit;
    color: #546DFE;
    border-radius: 50%;
    height: 100px;
    width: 100px;
    line-height: 100px;
    margin: 0.82rem auto;
    transition: all .3s ease-in-out;
}

#fun-facts .facts-holder .icon-box:hover {
    background: #546DFE;
    color: #FFFFFF;
    cursor: pointer;
}

#fun-facts .facts-holder span {
    color: #212121;
    font-weight: 700;
}

#fun-facts .facts-holder h5 {
    color: #212121;
}


/*=======================================================
            Services 
========================================================*/

#services {
    background: url(../img/MatBg/Mat1.jpg);
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
    padding: 60px 0;
}

#services img {
    padding-top: 100px;
}

#services .services-content {
    padding: 40px;
}

#services .services-content i {
    color: #546DFE;
}

#services .services-content h2 {
    color: #FFFFFF;
}

#services .services-content h2 span {
    color: #F3432C;
    font-size: 4rem;
}

#services .services-content p {
    color: #FFFFFF;
}
    </style>

<script>
    
    $('.counter').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 8000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });  
  
  

});
</script>