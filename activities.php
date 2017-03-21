<?php
	include "db_connect.php";
	session_start();
	
	//Setting selection variables false **So that suggestions field stays empty**
	$outdoors = false;
	$indoors = false;
	$events = false;
	
	$season = '';
	
	/*
	$all = false;
	$winter = false;
	$springs = false;
	$summer = false;
	$fall = false;
	*/
	//Conditions if user clicks checkbox variable will be true
	if(isset($_POST['outdoors'])){
		$outdoors = $_POST['outdoors'];
		$outdoors = true;
	}
	
	if(isset($_POST['indoors'])){
		$indoors = $_POST['indoors'];
		$indoors = true;
	}	
	
	if(isset($_POST['events'])){
		$events = $_POST['events'];
		$events = true;
	}
	
	//Seasons
	if(isset($_POST['season'])){
		$season = $_POST['season'];
	}
	
	//Setting what to display depending on what is checked or filled
	
	/*Year Round*/
	$yearRound = "SELECT id, activity_name, image, description, alt FROM planner";
	$displayYearRound = $mysqli->query($yearRound);
	
	$yearIE = "SELECT id, activity_name, image, description, alt FROM planner WHERE category IN ('Indoors','Events') ";
	$displayYearIE = $mysqli->query($yearIE);
	
	$yearOE = "SELECT id, activity_name, image, description, alt FROM planner WHERE category IN ('Outdoors','Events') ";
	$displayYearOE = $mysqli->query($yearOE);
	
	$yearOI = "SELECT id, activity_name, image, description, alt FROM planner WHERE category IN ('Outdoors','Indoors') ";
	$displayYearOI = $mysqli->query($yearOI);
	
	
	
	/*Individual Seasons*/
	$springSeason = "SELECT id, activity_name, image, description, alt FROM planner WHERE season = 'Spring' ";
	$displaySpring = $mysqli->query($springSeason);
	
	$fallSeason = "SELECT id, activity_name, image, description, alt FROM planner WHERE season = 'Fall' ";
	$displayFall = $mysqli->query($fallSeason);
	
	$winterSeason = "SELECT id, activity_name, image, description, alt FROM planner WHERE season = 'Winter' ";
	$displayWinter = $mysqli->query($winterSeason);
	
	$summerSeason = "SELECT id, activity_name, image, description, alt FROM planner WHERE season = 'Summer' ";
	$displaySummer = $mysqli->query($summerSeason);
	
	/* Seasons + Outdoors*/
	$springOutdoors = "SELECT id, activity_name, image, description, alt FROM planner WHERE season = 'Spring' AND category = 'Outdoors' ";
	$displaySpringOutdoors = $mysqli->query($springOutdoors);
	
	$fallOutdoors = "SELECT id, activity_name, image, description, alt FROM planner WHERE season = 'Fall' AND category = 'Outdoors' ";
	$displayFallOutdoors = $mysqli->query($fallOutdoors);
	
	$winterOutdoors = "SELECT id, activity_name, image, description, alt FROM planner WHERE season = 'Winter' AND category = 'Outdoors' ";
	$displayWinterOutdoors = $mysqli->query($winterOutdoors);
	
	$summerOutdoors = "SELECT id, activity_name, image, description, alt FROM planner WHERE season = 'Summer' AND category = 'Outdoors' ";
	$displaySummerOutdoors = $mysqli->query($summerOutdoors);	
	
	/* Seasons + Indoors*/
	$springIndoors = "SELECT id, activity_name, image, description, alt FROM planner WHERE season = 'Spring' AND category = 'Indoors' ";
	$displaySpringIndoors = $mysqli->query($springIndoors);

	$fallIndoors = "SELECT id, activity_name, image, description, alt FROM planner WHERE season = 'Fall' AND category = 'Indoors' ";
	$displayFallIndoors = $mysqli->query($fallIndoors);
	
	$summerIndoors = "SELECT id, activity_name, image, description, alt FROM planner WHERE season = 'Summer' AND category = 'Indoors' ";
	$displaySummerIndoors = $mysqli->query($summerIndoors);

	$winterIndoors = "SELECT id, activity_name, image, description, alt FROM planner WHERE season = 'Winter' AND category = 'Indoors' ";
	$displayWinterIndoors = $mysqli->query($winterIndoors);
	
	/*Seasons + Events*/
	$springEvents = "SELECT id, activity_name, image, description, alt FROM planner WHERE season = 'Spring' AND category = 'Events' ";
	$displaySpringEvents = $mysqli->query($springEvents);
	
	$fallEvents = "SELECT id, activity_name, image, description, alt FROM planner WHERE season = 'Fall' AND category = 'Events' ";
	$displayFallEvents = $mysqli->query($fallEvents);

	$summerEvents = "SELECT id, activity_name, image, description, alt FROM planner WHERE season = 'Summer' AND category = 'Events' ";
	$displaySummerEvents = $mysqli->query($summerEvents);
	
	$winterEvents = "SELECT id, activity_name, image, description, alt FROM planner WHERE season = 'Winter' AND category = 'Events' ";
	$displayWinterEvents = $mysqli->query($winterEvents);
	
	/*Seasons + Multiple*/
	$springOE = "SELECT id, activity_name, image, description, alt FROM planner WHERE season = 'Spring' AND category IN ('Outdoors','Events') ";
	$displaySpringOE = $mysqli->query($springOE);
	
	/*Only checkboxes*/
	$onlyOutdoors = "SELECT id, activity_name, image, description, alt FROM planner WHERE category = 'Outdoors'";
	$displayOutdoors = $mysqli->query($onlyOutdoors);
	
	$onlyIndoors = "SELECT id, activity_name, image, description, alt FROM planner WHERE category = 'Indoors'";
	$displayIndoors = $mysqli->query($onlyIndoors);
	
	$onlyEvents = "SELECT id, activity_name, image, description, alt FROM planner WHERE category = 'Events'";
	$displayEvents = $mysqli->query($onlyEvents);

	
	//Setting conditions for displaying activities
	
		/*All Results*/
		if($season == 'all' && $outdoors == false && $indoors == false && $events == false){
	 	while($row = $displayYearRound->fetch_array(MYSQLI_ASSOC)){
			echo "<h3>".$row['activity_name']."</h3>";
			echo "<img src=".$row['image']." alt=".$row['alt'].">";
			echo "<p>".$row['description']."</p>";
				}
	 }			
	 
	 else if($season == '' && $outdoors == true && $indoors == true && $events == true){
	 	while($row = $displayYearRound->fetch_array(MYSQLI_ASSOC)){
			echo "<h3>".$row['activity_name']."</h3>";
			echo "<img src=".$row['image']." alt=".$row['alt'].">";
			echo "<p>".$row['description']."</p>";
				}
	 }	
	 
	 else if($season == 'all' && $outdoors == true && $indoors == true && $events == true){
	 	while($row = $displayYearRound->fetch_array(MYSQLI_ASSOC)){
			echo "<h3>".$row['activity_name']."</h3>";
			echo "<img src=".$row['image']." alt=".$row['alt'].">";
			echo "<p>".$row['description']."</p>";
				}
	 }	
			
	/* Display Only Outdoors*/
	else if($season == 'all' && $outdoors == true){
			while($row = $displayOutdoors->fetch_array(MYSQLI_ASSOC)){
			echo "<h3>".$row['activity_name']."</h3>";
			echo "<img src=".$row['image']." alt=".$row['alt'].">";
			echo "<p>".$row['description']."</p>";
		}
	}
	
		else if($outdoors == true && $season == ''){
		while($row = $displayOutdoors->fetch_array(MYSQLI_ASSOC)){
			echo "<h3>".$row['activity_name']."</h3>";
			echo "<img src=".$row['image']." alt=".$row['alt'].">";
			echo "<p>".$row['description']."</p>";
				}
			} 
			
		
			
		
	else if($season == 'all' && $outdoors == false && $indoors == true && $events == false){
		while($row = $displayIndoors->fetch_array(MYSQLI_ASSOC)){
			echo "<h3>".$row['activity_name']."</h3>";
			echo "<img src=".$row['image']." alt=".$row['alt'].">";
			echo "<p>".$row['description']."</p>";
				}
			}
			
	else if($season == 'all' && $outdoors == false && $indoors == false && $events == true){
		while($row = $displayEvents->fetch_array(MYSQLI_ASSOC)){
			echo "<h3>".$row['activity_name']."</h3>";
			echo "<img src=".$row['image']." alt=".$row['alt'].">";
			echo "<p>".$row['description']."</p>";
				}
			}
	/*Multiple Checkboxes with all year*/
		else if($season == 'all' && $outdoors == false && $indoors == true && $events == true){
		while($row = $displayYearIE->fetch_array(MYSQLI_ASSOC)){
			echo "<h3>".$row['activity_name']."</h3>";
			echo "<img src=".$row['image']." alt=".$row['alt'].">";
			echo "<p>".$row['description']."</p>";
				}
			}
		else if($season == 'all' && $outdoors == true && $indoors == true && $events == false){
		while($row = $displayYearOI->fetch_array(MYSQLI_ASSOC)){
			echo "<h3>".$row['activity_name']."</h3>";
			echo "<img src=".$row['image']." alt=".$row['alt'].">";
			echo "<p>".$row['description']."</p>";
				}
			}

		else if($season == 'all' && $outdoors == true && $indoors == false && $events == true){
		while($row = $displayYearOE->fetch_array(MYSQLI_ASSOC)){
			echo "<h3>".$row['activity_name']."</h3>";
			echo "<img src=".$row['image']." alt=".$row['alt'].">";
			echo "<p>".$row['description']."</p>";
				}
			}
			
		else if($indoors == true && $season == ''){
		while($row = $displayIndoors->fetch_array(MYSQLI_ASSOC)){
			echo "<h3>".$row['activity_name']."</h3>";
			echo "<img src=".$row['image']." alt=".$row['alt'].">";
			echo "<p>".$row['description']."</p>";
				}
			} 
		
	else if($events == true && $season == ''){
		while($row = $displayEvents->fetch_array(MYSQLI_ASSOC)){
			echo "<h3>".$row['activity_name']."</h3>";
			echo "<img src=".$row['image']." alt=".$row['alt'].">";
			echo "<p>".$row['description']."</p>";
				}
			} 
	 
	 else if($season == 'spring'){
	 	while($row = $displaySpring->fetch_array(MYSQLI_ASSOC)){
			echo "<h3>".$row['activity_name']."</h3>";
			echo "<img src=".$row['image']." alt=".$row['alt'].">";
			echo "<p>".$row['description']."</p>";
				}
	 }

	else if($season == 'spring' && $outdoors == true){
	 	while($row = $displaySpringOutdoors->fetch_array(MYSQLI_ASSOC)){
			echo "<h3>".$row['activity_name']."</h3>";
			echo "<img src=".$row['image']." alt=".$row['alt'].">";
			echo "<p>".$row['description']."</p>";
				}
	 }
	 
	else if($season == 'spring' && $indoors == true){
	 	while($row = $displaySpringIndoors->fetch_array(MYSQLI_ASSOC)){
			echo "<h3>".$row['activity_name']."</h3>";
			echo "<img src=".$row['image']." alt=".$row['alt'].">";
			echo "<p>".$row['description']."</p>";
				}
	 }
	 
	else if($season == 'spring' && $events == true  ){
	 	while($row = $displaySpringEvents->fetch_array(MYSQLI_ASSOC)){
			echo "<h3>".$row['activity_name']."</h3>";
			echo "<img src=".$row['image']." alt=".$row['alt'].">";
			echo "<p>".$row['description']."</p>";
				}
	 }

	 else if($season == 'fall'){
	 	while($row = $displayFall->fetch_array(MYSQLI_ASSOC)){
			echo "<h3>".$row['activity_name']."</h3>";
			echo "<img src=".$row['image']." alt=".$row['alt'].">";
			echo "<p>".$row['description']."</p>";
				}
	 }
?>
