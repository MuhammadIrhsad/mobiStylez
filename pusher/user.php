<?php

$conn = mysqli_connect("localhost", "root", "", "test");
$sql="SELECT * FROM user ORDER BY user_id DESC";
$result=mysqli_query($conn,$sql);
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
    ?>
    <tr>
        <td colspan="3">No Data found</td>
    </tr>
    <?php
}
?>