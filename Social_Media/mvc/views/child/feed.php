<div id="<?php echo $value_post['id_post']; ?>" class="feed js-feed">
    <div class="head">
        <div class="user">
            <div class="profile-photo">
                <img id="<?php foreach($data["Users"] as $value_user){
                    if($value_post['id_user']==$value_user['id_user']){
                        echo $value_user['id_user'];
                    }
                }  ?>" class="action-img js-feed-img" src="<?php 
                                        foreach($data["Users"] as $value_user){
                                           if($value_post['id_user']==$value_user['id_user']){
                                                echo $value_user['avatar_url'];
                                            }
                                        }     
                                    ?>" alt="">
            </div>
            <div class="info">
                <h3 class="action-fullname js-feed-name"><?php 
                                        foreach($data["Users"] as $value_user){
                                            if($value_post['id_user']==$value_user['id_user']){
                                                echo $value_user['full_name'];
                                            }
                                        }     
                                    ?></h3>
                <small><?php            //post time
                                        //mktime(hour, minute, second, month, day, year)
                                        $date1 = strtotime(date("Y-m-d"));
                                        $date2 = strtotime($value_post['post_time']);
                                        $hourDiff=round(abs($date1 - $date2) / (60*60),0);
                                        if($hourDiff>=720){
                                            echo "khoảng ".$hourDiff=round(abs($date1 - $date2) / (60*60*24*30),0)." tháng trước";
                                        }
                                        else if($hourDiff>=24){
                                            echo $hourDiff=round(abs($date1 - $date2) / (60*60*24),0)." ngày trước";
                                        }
                                        else if($hourDiff<=1){
                                            echo "Vừa lúc nãy";
                                        }
                                        else {
                                            echo $hourDiff=round(abs($date1 - $date2) / (60*60),0)." giờ trước";
                                        }

                                        
                                        //echo $datetime =date("Y-m-d H:i:s", $time);
                                        
                                             
                                    ?></small>
            </div>
        </div>
        <span class="edit <?php 
            if($_SESSION['id_user']!=$value_post['id_user']){
                echo "hide";
            }  ?>">
            <i style="position:relative;" class="uil uil-ellipsis-h js-editPost-icon">
                <div class="edit-popup">
                    <p class="edit-post-btn js-edit__post-btn">Chỉnh sửa bài viết</p>
                    <p class="remove-post-btn js-remove__post-btn">Xóa bài viết</p>
                    <p>Báo cáo bài viết</p>
                </div>
            </i>
        </span>
    </div>
    <div class="caption">
        <p id="<?php echo $value_post['id_post']; ?>" class="js-content-post"><?php echo $value_post['content']; ?>
            <span class="harsh-tag"></span>
        </p>
    </div>
    <div class="photo">
        <img class="js-urlHinh-post" src="<?php 
                                
                                        echo $value_post['post_url'];
                                   
                            ?>" alt="">
    </div>
    <div class="action-buttons">
        <div class="interaction-buttons" id="">
            <!--Tym-->
            <span id="<?php
                                    echo $value_post['id_post'];
                                ?>">
                <i id="<?php //storage id_like
                                    foreach($data["Likes"] as $value){
                                        //check trùng post
                                        if($value_post['id_post']==$value['id_post']){
                                            //check trùng id_user
                                            foreach($data["Users"] as $value_user){
                                                //check lấy id người dùng trong phiên làm việc
                                                if($_SESSION['username']===$value_user['username']){
                                                    if($value_user['id_user']==$value['id_user']){
                                                        echo $value['id_like'];
                                                        break;
                                                    }
                                                } 
                                            }
                                        }
                                    }
                                ?>" class="uil uil-heart js-heart-btn <?php
                                    foreach($data["Likes"] as $value_like){
                                        //check trùng post
                                        if($value_post['id_post']==$value_like['id_post']){
                                            foreach($data["Users"] as $value){
                                                if($_SESSION['username']===$value['username']){
                                                    if($value['id_user']==$value_like['id_user']){
                                                        echo "setColor-pink";
                                                    }
                                                } 
                                            }
                                        }
                                    }
                                ?>"></i></span>
            <span><i class="uil uil-comment-dots js-comment-btn"></i></span>
            <span><i class="uil uil-share"></i></span>
        </div>
        <div class="bookmark">
            <span><i class="uil uil-bookmark-full"></i></span>
        </div>
    </div>
    <div id="<?php echo $value_post['id_post']; ?>" class="like-by js-avatar-like">
        <!--avatar người like-->
        <?php 
                                $countAvatar=0;
                                foreach($data["Likes"] as $value_l){
                                //like này có phải thuộc post này không
                                if($value_post['id_post']==$value_l['id_post']){?>
        <span id="<?php
                                    
                                    foreach($data["Users"] as $value_u){
                                        //check id để lấy ảnh avatar
                                        if($value_l['id_user']==$value_u['id_user']){
                                           echo $value_u['id_user'];
                                        }
                                    }
                            ?>" class="js-avatar-like-like"><img src="<?php
                                    $countAvatar=$countAvatar+1;
                                    foreach($data["Users"] as $value_u){
                                        //check id để lấy ảnh avatar
                                        if($value_l['id_user']==$value_u['id_user']){
                                           echo $value_u['avatar_url'];
                                        }
                                    }
                            ?>" alt=""></span>
        <?php }
                                    if($countAvatar==3){
                                        break;
                                    } 
                                }
                            ?>

        <p class="js-vv">Liked by <b><?php
                                foreach($data["Likes"] as $value_l){
                                    if($value_post['id_post']==$value_l['id_post']){
                                        foreach($data["Users"] as $value_u){
                                            if($value_l['id_user']==$value_u['id_user']){
                                                echo $value_u['full_name'];
                                                break;
                                            }
                                        }
                                        break;
                                    }
                                }
                            ?></b><b class="js-count-like"><?php
                                $countLike=0;
                                foreach($data["Likes"] as $value_l){
                                    if($value_post['id_post']==$value_l['id_post']){
                                        $countLike++;
                                    }
                                }
                                if($countLike ==0){
                                    echo "0";
                                }
                                else if($countLike==1){
                                    
                                }
                                else{
                                    echo " and ".($countLike-1)." others";
                                }
                            ?> </b></p>
    </div>
    <div class="comments text-muted">View all <?php
                                $countLike=0;
                                foreach($data["Comments"] as $value_l){
                                    if($value_post['id_post']==$value_l['id_post']){
                                        $countLike++;
                                    }
                                }
                                echo $countLike;
                            ?> comments</div>
    <!--Comment-->
    <div class="comment-popup">
        <div class="comment-container">
            <div class="comment-write">
                <img class="comment-write__avatar profile-photo action-img" src="<?php 
                        foreach ($data["Users"] as $value){
                            if($_SESSION['username']===$value['username']){
                                echo $value['avatar_url'];
                            }
                        }
                    ?>" alt="">
                <!--write comment-->
                <!--<form action="" style="width:100%;" id="<?php //echo $value_post['id_post']  ?>">-->
                <!--<input class="get-post-id" type="hidden" name="postId" value="<?php// echo $value_post['id_post'] ?>" />-->
                <input id="<?php echo $value_post['id_post'];?>" type="text" class="comment-write__input"
                    placeholder="Viết bình luận" name="comment-input" value="">
                <!--</form>-->


            </div>
            <div class="comment-write__edit js-comment-edit">
                <img class="comment-write__avatar profile-photo action-img" src="<?php 
                        foreach ($data["Users"] as $value){
                            if($_SESSION['username']===$value['username']){
                                echo $value['avatar_url'];
                            }
                        }
                    ?>" alt="">
                <!--write comment-->
                <!--<form action="" style="width:100%;" id="<?php //echo $value_post['id_post']  ?>">-->
                <!--<input class="get-post-id" type="hidden" name="postId" value="<?php// echo $value_post['id_post'] ?>" />-->
                <input id="<?php echo $value_post['id_post'];?>" type="text" class="comment-write__input__edit"
                    placeholder="Viết bình luận" name="comment-input" value="">
                <!--</form>-->


            </div>
            <div id="<?php echo $value_post['id_post']; ?>" class="comment-list js-comment-list">
                <?php foreach($data["Comments"] as $value_comment){
                                        //check comment thuoc post này không
                                        if($value_post['id_post']==$value_comment['id_post']){
                                            ?>

                <div class="comment-item js-comment-item">
                    <img class="comment-item_avatar profile-photo action-img" src="<?php
                                            //check user để lấy avatar cho item
                                                
                                                    foreach($data["Users"] as $value_user)
                                                    if($value_user['id_user']==$value_comment['id_user']){
                                                        echo $value_user['avatar_url'];
                                                    }
                                                
                                            ?>" alt="">
                    <div class="comment-item_content">
                        <p class="comment-item_content-title action-fullname"><?php
                                             //check user để lấy fullname cho item       
                                                    foreach($data["Users"] as $value_user)
                                                    if($value_user['id_user']==$value_comment['id_user']){
                                                        echo $value_user['full_name'];
                                                    }
                                                
                                            ?></p>
                        <p class="comment-item_content-desc"><?php
                                                    //Nội dụng comment
                                                    echo $value_comment['content'];
                                                
                                            ?></p>
                    </div>
                    <i style="position:relative;" class="uil uil-ellipsis-h js-menuComment-icon">
                        <div class="menuComment">
                            <p class="edit-comment-btn js-edit__comment-btn">Chỉnh sửa bình luận</p>
                            <p class="remove-comment-btn js-remove__comment-btn">Xóa bình luận</p>
                        </div>
                    </i>
                </div>
                <?php
                                        }
                                    }
                                    ?>

            </div>
        </div>
    </div>
    <!--End comment-->
</div>