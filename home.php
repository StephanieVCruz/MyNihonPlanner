<?php
	include "db_connect.php";
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>MyNihonPlanner - Your Japan Intinerary Assistant!</title>

<!--CSS Styles-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/materialize.css">
<link rel="stylesheet" href="css/styles.css">
<!--End CSS Styles-->

</head>

<body class="light-blue lighten-3">
    <!-- Navigator -->
  <nav class="light-blue lighten-3 z-depth-0" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><img id="logo" src="images/logo.svg" alt="logo" style="height: 80px; margin-top: 1rem;"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Login</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Login</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>



	<!--Main Content-->
	<div class="section" style="padding-top: 3rem;">
	<div class="container">
	<div class="row">

		<!--Sidebar where user will describe their trip specifications-->
		<div class="col s12 l4">
    <form action="activities.php" method="post" id="plannerForm">
		<!--Will insert questions here-->
		<h6 class="animated bounce"><span class="white-text">Tell me about your visit!</span></h6>
		<br>
		<br>
		I'll be in Japan for...
		<!--Start seasons-->
		    <p>
			  <input type="radio" class="with-gap" name="season" id="all" value="all"  />
			  <label for="all">Show me year round activties!</label>
   			</p>
  		    <p>
			  <input type="radio" class="with-gap" name="season" id="winter" value="winter"  />
			  <label for="winter">Winter</label>
   			</p>
  		    <p>
			  <input type="radio" class="with-gap" name="season" id="spring" value="spring"  />
			  <label for="spring">Spring</label>
   			</p>
  		    <p>
			  <input type="radio" class="with-gap" name="season" id="summer" value="summer"  />
			  <label for="summer">Summer</label>
   			</p>
  		    <p>
			  <input type="radio" class="with-gap" name="season" id="fall" value="fall"  />
			  <label for="fall">Fall</label>
   			</p>
		
		What would you like to do?
		
		<!--Options menu-->
    <p>
     <input type="checkbox" class="filled-in" name="outdoors" id="outdoors" value="outdoors" />
     <label for="outdoors">Something outdoors.</label>
   </p>
   <p>
     <input type="checkbox" class="filled-in" name="indoors" id="indoors" value="indoors" />
     <label for="indoors">Stay inside or shop.</label>
   </p>
     <input type="checkbox" class="filled-in" name="events" id="events" value="events" />
     <label for="events">See which events or festivals are going on.</label>
    </form>
 		</div>


		<!--Suggestions will appear here once user submits data-->
		<div class="col s12 l8 center" id="suggestions">
		<!--Will insert code when user submits here-->
		<span class="white-text"><h6 class="animated bounce">Suggestions will appear here!
		<br>
		Just complete the form!
		</h6>
		</span>
		</div>
	
	</div>
	</div>
	</div>
	</div>

<!--Scripts-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
<script type="text/javascript" src="js/init.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
 <script>
     $(document).ready(function() {
        $('select').material_select();
    });
  </script>


<!--End Scripts-->

</body>
</html>
