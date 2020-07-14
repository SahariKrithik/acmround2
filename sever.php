<?php 

	session_start();

	$event_Name = "";
	$participants = '';
	$startTime = "";
	$endTime = "";
	$budget = "";
	$venue = "";

	$db = mysqli_connect('localhost', 'root', '','events'); 
	

	if(isset($_POST['save'])) {
		$event_Name = $_POST['event_Name'];
		$participants = $_POST['participants'];
		$startTime = $_POST['startTime'];
		$endTime = $_POST['endTime'];
		$budget = $_POST['budget'];
		$venue = $_POST['venue'];

		$query = "INSERT INTO event_details(event_Name, participants, startTime, endTime, budget, venue) VALUES ('$event_Name','$participants','$startTime', '$endTime', '$budget', '$venue')";
		mysqli_query($db,$query);
		$_SESSION['msg'] = "Event Data stored";
		header("location: index.html");
	}

	//$results = mysqli_query($db, "SELECT * FROM event_details ");

?>
