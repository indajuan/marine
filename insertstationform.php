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

    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  
  </head>

  <body>
	<?php
    include_once("header.php");
	?>

	
<div class="container">
  
  <div class="text-center">
    <h1>New Station data</h1>
    <br>
	<form action="insertstation.php" method="post">
            <table class="table-condensed" align="center">
                <thead><tr><th></th></tr></thead>
                <tbody align="right"><tr><td>Station Name:</td><td><input type="text" name="name"></td></tr>
                <tr><td>Station Sequence:</td><td><input type="text" name="sequence"></td></tr>
                <tr><td>Station Longitude:</td><td><input type="text" name="longitude"></td></tr>
                <tr><td>Station Latitude:</td><td><input type="text" name="latitude"></td></tr></tbody>
            </table>
            <input type="Submit">
	</form>
    <br>
    
        <table class="table-condensed" align="center">
            <thead><tr><th></th></tr></thead>
            <tbody align="left">
                <tr><td>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Name</label>
                    </div>
                </td></tr>
                <tr><td>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Sequence</label>
                    </div>
                </td></tr>
                <tr><td>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Longitude</label>
                    </div>
                </td></tr>
                <tr><td>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Latitude</label>
                    </div>
                </td></tr>
            </tbody>
        </table>

  </div>
  
</div><!-- /.container -->


  </body>
</html>
