<?php

include "../includes/db.php";


if(isset($_POST['action'])){

    if($_POST['action'] == 'add_log'){
        
        if( isset($_POST['Log_Title']) && 
        isset($_POST['Log_Description'])){

            $log_title = $_POST['Log_Title'];
            $Log_Description = $_POST['Log_Description'];

            $query = "INSERT INTO logs_table (logs_title, logs_details)";
            $query .= "VALUES ('$log_title', '$Log_Description')";

            $insert  = mysqli_query ($con,$query);

            if ($insert){
                echo json_encode("1");
            }
        }
    }

    


} ?>