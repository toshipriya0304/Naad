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
    foreach(explode(",", $_POST['eventList']) as $event) {
        $sql = "SELECT * FROM eventsolo WHERE eventname='$event' AND regid='$id'";
        $result = mysqli_query($conn, $sql);
        $result = mysqli_num_rows($result);
        if($result > 0){

        }
        else{
            $sql = "INSERT INTO eventsolo VALUES ('$event', '$id')";
            if(!mysqli_query($conn, $sql)){
                echo mysqli_error($conn);
            }
        }
    }
    echo "You have successfully registered for the specified events.";
}
else{
    echo "No such Registration Id/Email Id combination found.";
}

?>