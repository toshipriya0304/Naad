<?php
$id = "";
try{
    $id = explode("/", $_POST['regid'])[2] - 10000;
}
catch(Exception $e){
    die("Incorrect regid entered");
}



$conn=mysqli_connect("localhost", "root", "", "naadreg");


if (!$conn)  
   {
        die("Connection failed:".mysqli_connect_error());
   }

$sql = "SELECT * FROM newform WHERE id='".(string)$id."' AND Email='".$_POST['Email']."'";

$result = mysqli_query($conn, $sql);

$result = mysqli_num_rows($result);

if($result > 0){
    foreach(explode(",", $_POST['eventList']) as $event) {
        $sql = "INSERT INTO eventgroup VALUES ('$id', '$event', '$_POST[num]')";
        if(!mysqli_query($conn, $sql)){
            echo mysqli_error($conn);
        }
    }
    echo "Successfully";
}
else{
    echo "No such Registration Id/ Email Id combination found.";
}

?>