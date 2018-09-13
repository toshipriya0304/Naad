<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "naadreg";

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$Name = $_POST['Name'];
$School_College = $_POST['School_College'];
$ContactNum = $_POST['ContactNum'];
$Email = $_POST['Email'];
$Branch = $_POST['Branch'];
$CollegeRoll = $_POST['CollegeRoll'];
$Gender = $_POST['Gender'];
}

$conn=mysqli_connect("localhost", "root", "", "naadreg");


if (!$conn)  
   {
        die("Connection failed:".mysqli_connect_error());
        }
else
$sql = "INSERT INTO form (Name, School_College, ContactNum, Email, Branch, CollegeRoll, Gender).VALUES ('$_POST[Name]','$_POST[School_College]','$_POST[ContactNum]','$_POST[Email]','$_POST[Branch]','$_POST[CollegeRoll]','$_POST[Gender]')";


if (mysqli_query($conn, $sql)) {
    echo "You have registered successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>