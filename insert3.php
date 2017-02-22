<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Insert physical data</title>
        <meta name="description" content="">
        <meta name="author" content="">
    </head>


    <body>

        <?php include_once("header.php");?>

        <?php
        $servername = "localhost";
        $username="root";

        $password="LIMS.2017.Uppsala";
        $dbname = "marine";
        $thetable="physical";

        $Pstationname=$_POST['station_forphysical'];
        $Pdepth=$_POST['Pdepth'];
        $Ptemperature=$_POST['Ptemperature'];
        $Psalinity=$_POST['Psalinity'];
        $Poxygen=$_POST['Poxygen'];
        $Pfluorescence=$_POST['Pfluorescence'];

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO $thetable (Pstationname,Pdepth,Ptemperature,Psalinity,Poxygen,Pfluorescence,Phidden)
        VALUES ('$Pstationname[0]',$Pdepth,$Ptemperature,$Psalinity,$Poxygen,$Pfluorescence,0)";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);

        ?>

    </body> 
</html>
