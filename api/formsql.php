<?php

 // Fetching variables of the form which travels in URL
$Name = $_POST['Name'];
$School_College = $_POST['School_College'];
$ContactNum = $_POST['ContactNum'];
$Email = $_POST['Email'];
$Branch = $_POST['Branch'];
$CollegeRoll = $_POST['CollegeRoll'];
$Gender = $_POST['Gender'];
$regid="";


$conn=mysqli_connect("localhost", "dhwani", "dhwanibitmesra", "naadreg");



if (!$conn)  
   {
        die("Connection failed:".mysqli_connect_error());
   }
$sql = "INSERT INTO newform (Name, School_College, ContactNum, Email, Branch, Gender, CollegeRoll) VALUES ('$Name','$School_College', '$ContactNum', '$Email', '$Branch', '$Gender', '$CollegeRoll')";


if (mysqli_query($conn, $sql))
 {
    $id = mysqli_insert_id($conn)+10000;
    echo "<div style='height: 80vh; padding: 30vh 0vh; font-size: 30px;'>"."You have registered successfully! Your registration ID is NAAD/18/".$id."<br>"."</div>";
}
else{
    echo mysqli_error($conn);
}
mysqli_close($conn);
?>