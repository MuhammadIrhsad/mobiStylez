<?php
     include "config.php";
     
     $user=$_POST['cur_user'];
     
    
     $sql="SELECT * FROM service WHERE s_user={$user}";
     $res=mysqli_query($conn,$sql);
     $output="<div class='row d-flex align-items-center justify-content-around' style='width: 100%;'>
         <div class='m-2' style='width:120px; cursor:pointer'  data-bs-toggle='modal' data-bs-target='#scheduleModal'>
             <div class='btn-sm btn-danger'>Schedule</div>
         </div>
         <div id='add-service' class='m-2 ' style='width: 120px; cursor:pointer;color:rgb(0, 0, 0,.5);' disabled data-bs-toggle='modal' data-bs-target='#serviceModal' >
             <div class='btn-sm btn-primary'>
                 Add Service
             </div>
         </div>
     </div>";
     if(mysqli_num_rows($res)>0){
         
        while($row=mysqli_fetch_assoc($res)){
             $output.="<div class='card m-2' style='width: 18rem;'>
                <img class='card-img-top' src='upload/{$row['s_image']}' alt='Card image cap'>
                <div class='card-body text-center'>
                <h5 class='card-title'><b>{$row['s_title']}</b></h5>
                <p disabled class='my-4 btn btn-success'>Price: {$row['s_cost']}$</p>
                <a href='booking.php?id={$row['s_id']}' class='btn btn-danger'>Book Now</a>
                </div>
                </div>";
         }
     }
    echo $output;
?>
