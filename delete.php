<?php 

include "connection.php"; 

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM `member` WHERE `id`='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        $_SESSION["message"] = "Record deleted successfully.";
        
        header('Location: index.php');

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>