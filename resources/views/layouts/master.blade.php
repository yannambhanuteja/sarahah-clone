<!DOCTYPE html>
<html lang="en" class="no-js">

	<head>

	    <title>@yield('title')</title>

		@include('partials._scripts')

		@include('includes.head')

		


		

		
		
		@include('partials._topnav')

		
	
	</head>

	<body>
	 	<div id="demo-content">

		<div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

		</div>


<main>



                      
			
			@yield('content')

	
  </main>                 


		
</body>
	@include('includes.footer')
 

</html>