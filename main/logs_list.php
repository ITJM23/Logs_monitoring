<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logs List</title>

    <link href="includes/Bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="includes/DataTables/datatables.css" rel="stylesheet">
 
    
</head>
<body>
            <h5><a href="index.php">Insert Logs</a></h5>

    <table class="table table-hover table-striped" id="logs_table" style="width:100%;">

    <thead class="bg-light text-uppercase">
        <tr>
            <th>Log Title</th>
            <th>Log Details</th>
        </tr>
    </thead>

    <tbody class="table-bordered"></tbody>

    </table>
    <script src="../main/includes/jquery.js"></script>
    <script src="includes/Bootstrap/js/bootstrap.js"></script>
    <script src="includes/DataTables/datatables.js"></script>

    <script>
        $(document).ready(function(){

            logs_table('logs_table')
        })



        function logs_table(id){

            var Logs_datatable = $('#'+id).DataTable({

                "responsive": true,
                "processing": true,
                "columns":[
                    { data: 'title' },
                    { data: 'details' }
                ],

                "ajax" : {
                    url:"datatables/logs_tbl.php",
                }



            })
        }

    </script>

    
</body>
</html>