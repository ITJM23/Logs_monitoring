<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="includes/Bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="../main/includes/jquery.js"></script>

</head>
<body>
    <h5><a href="logs_list.php">Check Table</a></h5>
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


<script src="includes/Bootstrap/js/bootstrap.js"></script>
<script>

$(document).ready(function(){

    $('#Logs_form').submit(function(e) {
    e.preventDefault(); // Prevent the default form submission

    var data = $('#Logs_form').serializeArray();

    data.push(
        {name: 'action', value: 'add_log'}
    )

    // AJAX request
    $.ajax({
        type: 'POST',
        url: 'exec/insert.php',
        data: data,
        dataType: 'json',
        success: function(response) {
            if(response == '1'){
                alert("working");
                console.log('working');
            }
            else{
                alert('nah');
            }
        }
                    
    });



    
    });

   

    


});

</script>




</html>