<?php
    include "../includes/db.php";

    $query ="SELECT logs_title, logs_details FROM logs_table";

    $fetch = mysqli_query($con,$query);

    if ($fetch) {
        while($row = mysqli_fetch_assoc($fetch)){
            $title = $row ['logs_title'];
            $details = $row ['logs_details'];

            $logs_array[] = array(
                "title" => $title,
                "details" => $details
            );

            


            
            
        }

    }

    //print_r($logs_array);
    $logs_result = array(
        "data" => $logs_array
    );


    echo json_encode($logs_result);
    
?>