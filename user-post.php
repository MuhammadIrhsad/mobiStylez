<?php
    include 'config.php';

    $post=$_POST['postId'];
    
    $query="SELECT * FROM post
    LEFT JOIN user ON post.post_author=user.user_id WHERE post_id={$post}";
    $res=mysqli_query($conn,$query) or die('Query faild');
    $output="";
    if(mysqli_num_rows($res)>0){
        
        while($row=mysqli_fetch_assoc($res)){
            $query4="SELECT * FROM comment WHERE comment_post={$row['post_id']} ORDER BY comment_id DESC";
            $commentOut="";
            $result4=mysqli_query($conn,$query4);
            if(mysqli_num_rows($result4)>0){
                while($r=mysqli_fetch_assoc($result4)){
                   $commentOut.= "<div><p class='mb-0' style=' font-family: 'Raleway' ,sans-serif; font-size: 14px;'><b class='me-1 ral mb-0'><a href='{$hostName}/stylistInfo.php?id={$r['comment_user']}'>{$r['comment_username']}</a></b>{$r['comment_content']}</p>
                        <p style=' font-family: 'Raleway' ,sans-serif; font-size: 9px;'>1 min ago</p>
                       </div>";
                }
            }
            else{
                $commentOut="No Comments..";
            }
            
            $output.="<div class='pop'>

            <div id='image-container'>
                <img id='popImage' class='img-fluid img-thumbnail' src='"."upload/".$row['post_image']."' alt=''>

            </div>
            <div class='body-container'>
                <div class='heading'>
                    <div class='left'>
                        <img src='"."upload/".$row['user_image']."' style='height: 35px; width: 35px; border-radius: 50%;' alt=''>
                        <p>{$row['user_fullname']}</p>
                        <a href='#'>follow</a>

                    </div>
                    <div class='right'>
                        <i class='bi bi-three-dots-vertical text-white'></i>
                        <button id='close-p' style='border: none; outline: none; background:none; font-size: 2rem;'>&times;</button>

                    </div>
                </div>
                <hr>
                <div class='body'>
                    ".$commentOut."
                    
                    
                </div>
                <hr>
                <div class='d-flex justify-content-between '>
                            <div class='input-group m-1 '>
                                <input data-comcont='{$row['post_id']}'  type='text' class='rounded-pill form-control' placeholder='Write your comment..' aria-label='Dollar amount (with dot and two decimal places)'>
                                <span class='input-group-text outline-0 border-0 bg-0 bg-white '>
                                    <button type='submit' data-sendcont='{$row['post_id']}' class='sendComment btn-sm btn-transparent border-0 outline-0 bg-white'  ><i style='font-size:20px' class=' text-danger fa-solid fa-paper-plane'></i></button>
                                </span>
                            </div>

                        </div>

                <hr>
            </div>


            <!-- <h1 class='pop-heading'>Stylist</h1>
    
    
                <p class='pop-detail'>Adaiores laboriosam animi quam? Ea sit quo, voluptatem eius ipsam tenetur similique non, illo sunt.</p>
            -->


        </div> ";
        }
        // $output.="<button class='btn btn-danger my-4' id='loadbtn' data-id='{$values}'>Load More</button>";
        echo $output;
    }
    else{
        echo $output;
    }

?>