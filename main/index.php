<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    
    <script src="../main/includes/jquery.js"></script>

</head>
<body>
    <form id="Logs_form" action="k.php" method="post">
    <label for="Log_Title">Title:</label>
    <input type="text" id="Log_Title" name="Log_Title">

    <br>

    <label for="Log_Description">Description:</label>
    <input type="text" id="Log_Description" name="Log_Description">

    <br>

    <input type="submit" value="Submit">
</form>

<p id="form_info"> --- </p>
    
</body>

<script>

$(document).ready(function(){

    $('#Logs_form').submit(function(e) {
    e.preventDefault(); // Prevent the default form submission

    var data = $('#loginForm').serializeArray()

    console.log(data);
    //$('#form_info').html(data);
    //alert(data);
    });

   

    


});

</script>




</html>