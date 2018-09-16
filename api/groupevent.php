<?php
$id = "";
try{
    $id = explode("/", $_POST['regid'])[2] - 10000;
}
catch(Exception $e){
    die("Incorrect regid entered");
}



$conn=mysqli_connect("localhost", "dhwani", "dhwanibitmesra", "naadreg");


if (!$conn)  
   {
        die("Connection failed:".mysqli_connect_error());
   }

$sql = "SELECT * FROM newform WHERE id='".(string)$id."' AND Email='".$_POST['Email']."'";

$result = mysqli_query($conn, $sql);

$result = mysqli_num_rows($result);

if($result > 0){
    $sql = "SELECT * FROM eventgroup WHERE regid='$id' AND eventname='$_POST[event]'";
    $result = mysqli_query($conn, $sql);
    $result = mysqli_num_rows($result);
    if($result > 0){
        echo "The team leader is already registered for this event.";
    }
    else{
        $event = $_POST['event'];
        $sql = "INSERT INTO eventgroup VALUES ('$id', '$event', '$_POST[num]')";
        if(!mysqli_query($conn, $sql)){
            echo mysqli_error($conn);
        }
        echo "You have successfully registered your group for the event '".$event."'. Please mail the registration Ids of each team member to dhwani.bitmesra@gmail.com.";
    }
}
else{
    echo "No such Registration Id/Email Id combination found.";
}

?>