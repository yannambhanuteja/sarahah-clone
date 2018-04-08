 

  <nav>

    <div class="z-depth-3 cyan nav-wrapper">

     
      <a href="/home" class="hide-on-med-and-down brand-logo"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
     
     
      <a  class="brand-logo center">

        <form action="/search/search" method="POST" role="search" id="search_form">

          {{ csrf_field() }}
       
         
          <input type="search" name="q" placeholder='Search' role="search">

         
          </form>
      </a>
       <a href="#" data-activates="mobile-demo" class="hide-on-large-only button-collapse-mobile">
      <i class="material-icons">
        menu
      </i></a>
         <ul id="nav-mobile" class="right hide-on-med-and-down">

          
 
 

      @if (!Auth::guest())
        <li class="{{ Request::is('profilelink') ? "active":""}}"><a href="/{{Auth::user()->name}}"><i class="fa fa-user" aria-hidden="true"></i> PROFILE</a></li>
        <li class="{{ Request::is('inbox') ? "active":""}}"><a href="/inbox/{{Auth::user()->id}}"><i class="fa fa-inbox" aria-hidden="true"></i> Inbox</a></li>
 <li class="{{ Request::is('sent') ? "active":""}}"><a href="/sent/{{Auth::user()->id}}"><i class="fa fa-inbox" aria-hidden="true"></i> Sent</a></li>

        <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <i class="white-text material-icons">power_settings_new</i> 
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

      @else
       <li><a href="/login">  LOGIN</a></li>
  
        @endif
        

        <li>
    
         
          
      </li>
    
      </ul>

      <!--- Mobile -->

       <ul class="center-align grey lighten-2 side-nav" id="mobile-demo">


       <li>
        <form action="/search/search" method="POST" role="search" id="search_form">

          {{ csrf_field() }}
       
         
          <input type="search" name="q" placeholder='Search' role="search">

         
          </form>
      </li>
       <li>
        <a class="black-text" href="/home"> <i class="black-text fa fa-home" aria-hidden="true"></i>  Home </a>

      @if (!Auth::guest())

        <li class="{{ Request::is('profile') ? "active":""}}"><a class="black-text" href="/{{Auth::user()->name}}"><i class="black-text fa fa-user" aria-hidden="true"></i> PROFILE</a></li>
<li class="{{ Request::is('inbox') ? "active":""}}"><a href="/inbox/{{Auth::user()->id}}"><i class="fa fa-inbox" aria-hidden="true"></i> Inbox</a></li>
<li class="{{ Request::is('sent') ? "active":""}}"><a href="/sent/{{Auth::user()->id}}"><i class="fa fa-inbox" aria-hidden="true"></i> Sent</a></li>

<li>
                                        <a class="black-text" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <i class="black-text material-icons">power_settings_new</i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

      @else
       <li><a class="black-text" href="/login"><i class="black-text fa fa-sign-in" aria-hidden="true"></i>  LOGIN</a></li>

        @endif
      </ul>
    </div>
  </nav>

  </div>

  <style>

  .nav-wrapper{

   height: 40px;


  }

input[type=search] {
-webkit-transition: all 0.4s ease-in-out;
  -moz-transition: all 0.4s ease-in-out;
border-bottom: 0px solid #9e9e9e;
border-bottom: none;
border-radius: 10px;
outline: none;
height: 2.5rem;
width: 100%;
font-size: 1rem;
margin: 0;

padding: 0;
box-shadow: none;
box-sizing: content-box;
transition: all 0.3s;
background: #fff;
width: 270px;

}

textarea:focus, input:focus {
    color: #000;
}


::placeholder {
  color: #000;
  text-align: center;
}

  </style>



  <script>
    $('.button-collapse-4').sideNav({
    menuWidth: 300, // Default is 300
    edge: 'left', // Choose the horizontal origin
    closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
    draggable: true // Choose whether you can drag to open on touch screens
  }
);
</script>
<script >
$(window).scroll(function() {
        if ($(window).scrollTop() > 100) {
          $('.scroller').addClass('stuck');
        } 
        else {
          $('.scroller').removeClass('stuck');
        }
    
      });


  </script>


  <script>
    $('.button-collapse-mobile').sideNav({
    menuWidth: 300, // Default is 300
    edge: 'left', // Choose the horizontal origin
    closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
    draggable: true // Choose whether you can drag to open on touch screens
  }
);
  </script>
