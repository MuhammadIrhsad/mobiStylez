<?php

use Symfony\Component\VarDumper\Cloner\Data;

$conn = mysqli_connect("localhost", "root", "", "test");
$sql = "SELECT * FROM user ORDER BY user_id DESC";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Push notification</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6" style="margin-top: 80px; margin-bottom: 50px;">
                <table class="table table-border table-hover"  border="1px;">
                    <thead > 
                        <tr>
                            <th>User_id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                        </tr>
                    </thead>
                    <tbody id="ud">
                    <?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                  <td><?php  echo $row['user_id'] ;?></td>
                                  <td><?php  echo $row['f_name'] ;?></td>
                                  <td><?php  echo $row['l_name'] ;?></td>
                                </tr>
                        <?php
                            }
                        }else{
                            echo "No Data";
                        }
                        ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="../js/jquery-3.6.0.js"></script>
    <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('e0ffe076e64df8486c12', {
      cluster: 'ap2'
    });

    var channel = pusher.subscribe('mobiStylez');
    channel.bind('add-user', function(data) {
        $.ajax({
        url:"user.php",
        type:"GET",
        success:function(data){
            // $("$message").prepend(data);
            // alert("This is the message from the user"+data);
            $("#ud").html(data);
        }
    });
    });
    
  </script>
</body>

</html>