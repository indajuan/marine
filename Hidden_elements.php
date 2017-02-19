<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./favicon.ico">

    <title>Entries flagged to be shown or multiple data-actions-box=\"true\"</title>

    <!-- Bootstrap core CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>


  <script src="excellentexport.js"></script>
<script type="text/javascript" src="excellentexport.min.js"></script>


  </head>


  <body>

    <?php
    include_once("header.php");
	?>

<div class="container">
  
  <div class="text-center">
    <h1>Marine</h1>
    <p class="lead">Confirmation of changed values</p>
  </div>
</div>

<div class="container">

	<?php
		if(isset($_POST['submit'])){
		$table = $_POST['table'];
		if($table = 'station'){
			if(!empty($_POST['station_hide'])) {
				include("db.php");
				$id = $_POST['station_hide'];
				$showhide = $_POST['todo'];

				$sql = "UPDATE Stations
				SET Shidden = 1-'$showhide'
				WHERE SID IN ('" . implode("','", $id) ."') 
				;
				";

				if (mysqli_query($conn, $sql)) {
			    echo "<br> <br> Hidden values changed for Station";


				} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}

				$sql = "UPDATE Physical
				SET Phidden = 1-'$showhide'
				WHERE PID IN ('" . implode("','", $id) ."') 
				;
				";

				if (mysqli_query($conn, $sql)) {
			    echo "<br> <br> Hidden values changed for Physical";


				} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}

				$sql = "UPDATE Biological
				SET Bhidden = 1-'$showhide'
				WHERE BID IN ('" . implode("','", $id) ."') 
				;
				";

				if (mysqli_query($conn, $sql)) {
			    echo "<br> <br> Hidden values changed for Biological";

				} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}

			}
				else{
					echo "<br><br><b>No stations selected to modify Stations table and/or Physical and/or Biological.</b> </p>";
				}
}


		if($table = 'physical'){
			if(!empty($_POST['physical_hide'])) {
				include("db.php");
				$id = $_POST['physical_hide'];
				$showhide = $_POST['todo'];

				$sql = "UPDATE Physical
				SET Phidden = 1-'$showhide'
				WHERE PID IN ('" . implode("','", $id) ."') 
				;
				";

				if (mysqli_query($conn, $sql)) {
			    echo "<br> Hidden values changed for Physical";


				} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			}
				else{
					echo "<br><br><b>No stations selected to modify only Physical.</b> </p>";
				}
}

		if($table = 'biological'){
			if(!empty($_POST['biological_hide'])) {
				include("db.php");
				$id = $_POST['biological_hide'];
				$showhide = $_POST['todo'];

				$sql = "UPDATE Biological
				SET Bhidden = 1-'$showhide'
				WHERE BID IN ('" . implode("','", $id) ."') 
				;
				";

				if (mysqli_query($conn, $sql)) {
			    echo "<br> Hidden values changed for Biological";


				} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			}
				else{
					echo "<br><br><b>No stations selected to modify only Biological.</b> </p>";
				}
}

}
	?>


  
</div><!-- /.container -->


  </body>
</html>
