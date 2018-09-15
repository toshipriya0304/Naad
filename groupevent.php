<?php

 // Fetching variables of the form which travels in URL
$eventname = $_POST['eventname'];
$num = $_POST['num'];
$regid = $_POST['regid'];


$conn=mysqli_connect("localhost", "root", "", "naadreg");


if (!$conn)  
   {
        die("Connection failed:".mysqli_connect_error());
   }
$sql = "INSERT INTO eventgroup (eventname, num, regid) VALUES ('$eventname', '$num', '$regid')";

if (mysqli_query($conn, $sql))
 {
    
    echo "<div style='height: 80vh; padding: 30vh 0vh; font-size: 30px;'>You have been registered to the event(s) of yoour choice!<br></div>";
}
else{
    echo mysqli_error($conn);
}
mysqli_close($conn);
?>