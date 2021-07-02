<?php

    $conn = new mysqli("localhost", "root", "", "HOTEL");

    if(!$conn){
        die("Could not connect to the server :-(".mysqli_connect_error());
    }
    else{
        echo " Connected. .!\r\n ";
        if(isset($_POST["submit"])){
            $name = mysqli_real_escape_string($conn, $_POST["hname"]);
            $location = mysqli_real_escape_string($conn, $_POST["location"]);
            $ac = mysqli_real_escape_string($conn, $_POST["roomac"]);
            $nonac = mysqli_real_escape_string($conn, $_POST["roomnonac"]);
            $acrate = mysqli_real_escape_string($conn, $_POST["acrates"]);
            $nonacrate = mysqli_real_escape_string($conn, $_POST["nonrates"]);

            

            $sql = "INSERT INTO NEW(NAME, LOCATION, AC, NONAC, RATE_AC, RATE_NONAC) VALUES('$name','$location','$ac','$nonac','$acrate','$nonacrate')";

            $result = mysqli_query($conn, $sql);

            if(!$result){
                echo '<br><br>'."Error..:-( TRY AGAIN ";
            }
            else{
                echo '<br><br>',"HOTEL ".$name." IS SUCCESSFULLY INCLUDED";
                
            }
        }
    }


?>

<html>
  <div style=" background-color: hotpink;
                padding: 20px;
                width: 100%;" >
        <h2><a href="main.html">home</a></h2>
        </div>
  </html>
