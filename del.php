<?php 

include "db_conn.php"; 

if (isset($_GET['id'])) {

    $receiver = $_GET['id'];

    $sql = "DELETE FROM `expense` WHERE `receiver`='$receiver'";

     $result = $conn->query($sql);

     if ($result == TRUE) {
header('location:display.php');
        //echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>

