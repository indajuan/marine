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

    <title>Tools</title>

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<?php
    include_once("header.php");
	?>

	
<div class="container">
  
  <div class="text-center">
    <h1>Station data</h1>
    <br>
    <table class="table table-bordered">
		<thead>
			<tr>
				<th>Station 1</th>
				<th>
				</th>
				<th>Station 2</th><th></th></tr>
		</thead>
		<tbody>
			<tr>
				<?php
				include 'db.php';
				$result = $connection->query("select * from stations join physical on stations.name = physical.name join physical on stations.name = physical.name");
				$result = $connection->query("select * from stations limit 2");
	   
				while($row = $result->fetch_assoc()) {
					echo "<td>Pstationname</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td>";
					echo "<td>Pstationname</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td></tr>";
					echo "<td>Longitude</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td>";
					echo "<td>Longitude</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td></tr>";
					echo "<tr><td>Sequence</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td>";
					echo "<td>Sequence</td>"; 
					echo "<td>" . htmlentities($row['Sname']) . "</td></tr>";
					echo "<tr><td>Latitude</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td>";
					echo "<td>Latitude</td>"; 
					echo "<td>" . htmlentities($row['Sname']) . "</td></tr>";
					echo "<tr><td>Stratummin</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td>";
					echo "<td>Stratummin</td>"; 
					echo "<td>" . htmlentities($row['Sname']) . "</td></tr>";
					echo "<tr><td>Depth</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td>";
					echo "<td>Depth</td>"; 
					echo "<td>" . htmlentities($row['Sname']) . "</td></tr>";
					echo "<tr><td>Bstratummax</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td>";
					echo "<td>Bstratummax</td>"; 
					echo "<td>" . htmlentities($row['Sname']) . "</td></tr>";
					echo "<tr><td>Temperature</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td>";
					echo "<td>Temperature</td>"; 
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

    <title>Tools</title>

    <!-- Bootstrap core CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
       <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

  </head>

  <body>
	
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
            <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Marine</a>
            </div>
            <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                            <li><a href="./home.php">Home</a></li>
                            <li><a href="./compare.php">Tools</a></li>
                            <li><a href="./insertstationform.php">Admin</a></li>
                            <li><a href="./map.php">Map</a></li>
                    </ul>
            </div><!--/.nav-collapse -->
    </div>
</div>
	
<div class="container">
  
  <div class="text-center">
    <h1>Station data</h1>
    <br>
    <table class="table">
	<thead><tr><th></th></tr></thead>
	<tbody><tr><td><div class="btn-group">
          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
            Station 1
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#">Choice1</a></li>
            <li><a href="#">Choice2</a></li>
            <li><a href="#">Choice3</a></li>
            <li class="divider"></li>
            <li><a href="#">Choice..</a></li>
          </ul>
        </div></td><td><div class="btn-group">
          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
            Station 2
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#">Choice1</a></li>
            <li><a href="#">Choice2</a></li>
            <li><a href="#">Choice3</a></li>
            <li class="divider"></li>
            <li><a href="#">Choice..</a></li>
          </ul>
        </div></td></tr></tbody>
	</table>
    <br>
    <table class="table table-bordered">
		<thead>
			<tr>
				<th>Station 1</th>
				<th>
				</th>
				<th>Station 2</th><th></th></tr>
		</thead>
		<tbody>
			<tr>
				<?php
				include 'db.php';
				$result = $connection->query("select * from stations join physical on stations.name = physical.name join physical on stations.name = physical.name");
				$result = $connection->query("select * from stations limit 2");
	   
				while($row = $result->fetch_assoc()) {
					echo "<td>Pstationname</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td>";
					echo "<td>Pstationname</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td></tr>";
					echo "<td>Longitude</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td>";
					echo "<td>Longitude</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td></tr>";
					echo "<tr><td>Sequence</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td>";
					echo "<td>Sequence</td>"; 
					echo "<td>" . htmlentities($row['Sname']) . "</td></tr>";
					echo "<tr><td>Latitude</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td>";
					echo "<td>Latitude</td>"; 
					echo "<td>" . htmlentities($row['Sname']) . "</td></tr>";
					echo "<tr><td>Stratummin</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td>";
					echo "<td>Stratummin</td>"; 
					echo "<td>" . htmlentities($row['Sname']) . "</td></tr>";
					echo "<tr><td>Depth</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td>";
					echo "<td>Depth</td>"; 
					echo "<td>" . htmlentities($row['Sname']) . "</td></tr>";
					echo "<tr><td>Bstratummax</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td>";
					echo "<td>Bstratummax</td>"; 
					echo "<td>" . htmlentities($row['Sname']) . "</td></tr>";
					echo "<tr><td>Temperature</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td>";
					echo "<td>Temperature</td>"; 
					echo "<td>" . htmlentities($row['Sname']) . "</td></tr>";
					echo "<tr><td>Salinity</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td>";
					echo "<td>Salinity</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td></tr>";
					echo "<tr><td>B_x</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td>";
					echo "<td>B_x</td>"; 
					echo "<td>" . htmlentities($row['Sname']) . "</td></tr>";
					echo "<tr><td>Oxygen</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td>";
					echo "<td>Oxygen</td>"; 
					echo "<td>" . htmlentities($row['Sname']) . "</td></tr>";
					echo "<tr><td>B_y</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td>";
					echo "<td>B_y</td>"; 
					echo "<td>" . htmlentities($row['Sname']) . "</td></tr>";
					echo "<tr><td>Fluorescence</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td>";
					echo "<td>Fluorescence</td>"; 
					echo "<td>" . htmlentities($row['Sname']) . "</td></tr>";
					echo "<tr><td>Larvastage</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td>";
					echo "<td>Larvastage</td>"; 
					echo "<td>" . htmlentities($row['Sname']) . "</td></tr>";
					echo "<tr><td>Species</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td>";
					echo "<td>Species</td>"; 
					echo "<td>" . htmlentities($row['Sname']) . "</td></tr>";
					echo "<tr><td>Abundance</td>";
					echo "<td>" . htmlentities($row['Sname']) . "</td>";
					echo "<td>Abundance</td>"; 
					echo "<td>" . htmlentities($row['Sname']) . "</td></tr>";
				}
				?>
			</tr>
	   </tbody>
	   
    </table>
  </div>
  
</div><!-- /.container -->


  </body>
</html>
