<?php
    include 'config.php';
    session_start();

    if(isset($_POST['page_no'])){
        $page=$_POST['page_no'];

    }
    else{
        $page=0;
    }
    
    $limit=4;
    $query="SELECT * FROM post
    LEFT JOIN user ON post.post_author=user.user_id ORDER BY post.post_id DESC LIMIT {$page},{$limit}";
    $res=mysqli_query($conn,$query) or die('Query faild');
    $output="";
    if(mysqli_num_rows($res)>0){
        
        while($row=mysqli_fetch_assoc($res)){
            //for follow btn
            if(isset($_SESSION['id'])){
                if($row['user_id']!=$_SESSION['id']){

                    $query2="SELECT * FROM follow WHERE following_id={$row['user_id']} AND follower_id={$_SESSION['id']}";
                    $result2=mysqli_query($conn,$query2);
                    if(mysqli_num_rows($result2)>0){
                        $followBtn="<button class='btn-sm btn-primary follow' data-id='{$row['user_id']}' >following</button>";
                    }else{

                        $followBtn="<button class='btn-sm btn-danger follow' data-id='{$row['user_id']}' >follow</button>";
                    }
                    

                }
                else{
                    $followBtn="";
                }
            }
            else
            {
                $followBtn="<button class='btn-sm btn-danger follow' >follow</button>";
                
            }
            //for like btn
            if(isset($_SESSION['id'])){
                    $query3="SELECT * FROM post_like WHERE like_post={$row['post_id']} AND like_user={$_SESSION['id']}";
                    $result3=mysqli_query($conn,$query3);
                    if(mysqli_num_rows($result3)>0){
                        $likeBtn="<i class='fa-solid fa-heart'></i>";
                    }else{
                        $likeBtn="<i class='fa-regular fa-heart'></i>";
                    }
                    

               
            }
            else
            {
                $likeBtn="<i class='fa-regular fa-heart'></i>";
                
            }
            $sql="SELECT * FROM post_like WHERE like_post={$row['post_id']}";
            $totalLIkes=mysqli_num_rows(mysqli_query($conn,$sql));
            //comment section
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
            $values=$limit+$page;
            $output.="<div class='col-sm-12 my-5 border  rounded ' data-postid={$row['post_id']} style='box-shadow:1px 1px 5px rgb(149, 140, 140);'>
            <!-- Post_TitleBar -->
            <div class='post-title-bar d-flex justify-content-evenly'>
                <div id='user-profile' class=' ms-1 d-flex align-items-center ' style='width: 50%;'>
                    <div class='user-image' style='width: 40px; height: 40px;'>
                        <img src='{$hostName}/upload/{$row['user_image']}' class=' rounded-circle' style='width: 100%; height:100%' alt=''>
                    </div>
                    <div id='user-name' class='mx-1 pt-4' style='font-size: 14px;'>
                        <a href='{$hostName}stylistInfo.php?id={$row['user_id']}' class='w-100 mb-0  ' style='font-size:1.2rem; font-family:'Raleway';'>{$row['user_fullname']}</a>
                        <p><i class='fa fa-star me-1 text-warning'></i><span>4.5</span> </p>
                    </div>".$followBtn."

                </div>
                <div class='edit-icon my-auto text-end' style='width: 40%;'>
                    <button style='background: none; outline: none ;border:none;'>

                        <i class='bi bi-three-dots-vertical'></i>
                    </button>
                </div>

            </div>
            <div id='postText' class='text-start p-3 ral' style='font-size:18px'>{$row['post_description']}</div>

            <!-- Post_Image -->
            <div class='col-12 '>
                <img style='width: 100%;' src='{$hostName}/upload/{$row['post_image']} ' alt=' '>

            </div>
            <!-- Post Bottom -->
            <div class='bottom-icons d-flex justify-content-between' style=' width: 100%;'>
                            <div class='text-start m-2'>
                                <div class='btn-sm btn-transparent text-danger d-inline likeBtn' style='font-size: 25px;' data-likeid='{$row['post_id']}'>".$likeBtn."</div>
                                <div class='btn-sm btn-transparent d-inline' style='font-size: 25px;' id='commentBtn'><a href='#commentInput'><i class='bi bi-chat-dots'></i></a></div>
                                <p class='m-0'  style='font-size: 14px; font-family: 'Raleway' ,sans-serif;'><b data-totallike={$row['post_id']}>".$totalLIkes." likes</b></p>
                                <!-- <a class='text-dark ' style='font-size: 12px; '>we all comments</a> -->
                                <div data-comsec='{$row['post_id']}'></div style='min-height:10px; overflow:auto; '>
                                ".$commentOut."</div>
                            <p class=' m-2 '><i class='fas fa-brush'></i></p>


                        </div>
                        <div class='d-flex justify-content-between '>
                            <div class='input-group m-1 '>
                                <input data-comcont='{$row['post_id']}'  type='text' class='rounded-pill form-control' placeholder='Write your comment..' aria-label='Dollar amount (with dot and two decimal places)'>
                                <span class='input-group-text outline-0 border-0 bg-0 bg-white '>
                                    <button type='submit' data-sendcont='{$row['post_id']}' class='sendComment btn-sm btn-transparent border-0 outline-0 bg-white'  ><i style='font-size:20px' class=' text-danger fa-solid fa-paper-plane'></i></button>
                                </span>
                            </div>

                        </div>

        </div> ";
        }
        $output.="<button class='btn btn-danger my-4' id='loadbtn' data-id='{$values}'>Load More</button>";
        echo $output;
    }
    else{
        echo $output;
    }

?>