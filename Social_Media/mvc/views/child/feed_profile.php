<div class="feed">
                            <div class="head">
                                <div class="user">
                                    <div class="profile-photo">
                                        <img src="<?php 
                                        foreach($data["Users"] as $value_user){
                                            if($value_post['id_user']==$value_user['id_user']){
                                                echo $value_user['avatar_url'];
                                            }
                                        }     
                                    ?>" alt="">
                                    </div>
                                    <div class="info">
                                        <h3><?php 
                                        foreach($data["Users"] as $value_user){
                                            if($value_post['id_user']==$value_user['id_user']){
                                                echo $value_user['full_name'];
                                            }
                                        }     
                                    ?></h3>
                                        <small><?php 
                                        echo $value_post['post_time'];
                                             
                                    ?></small>
                                    </div>
                                </div>
                                <span class="edit">
                                    <i class="uil uil-ellipsis-h"></i>
                                </span>
                            </div>
                            <div class="caption">
                                <p><?php echo $value_post['content']; ?> <span class="harsh-tag"></span></p>
                            </div>
                            <div class="photo">
                                <img src="<?php 
                                
                                        echo $value_post['post_url'];
                                   
                            ?>" alt="">
                            </div>
                            <div class="action-buttons">
                                <div class="interaction-buttons" id="">
                                    <!--Tym-->
                                    <span id="<?php
                                    echo $value_post['id_post'];
                                ?>"><i id="<?php //storage id_like
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
                            <div class="like-by">
                                <!--avatar người comment-->
                                <?php 
                                $countAvatar=0;
                                foreach($data["Likes"] as $value_l){
                                //like này có phải thuộc post này không
                                if($value_post['id_post']==$value_l['id_post']){?>
                                <span><img src="<?php
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

                                <p>Liked by <b><?php
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
                            ?></b><b><?php
                                $countLike=0;
                                foreach($data["Likes"] as $value_l){
                                    if($value_post['id_post']==$value_l['id_post']){
                                        $countLike++;
                                    }
                                }
                                if($countLike==1 || $countLike==0){
                                    
                                }
                                else{
                                    echo " and ".($countLike-1)." others";
                                }
                            ?> </b></p>
                            </div>
                            <div class="comments text-muted">View all 850 comments</div>
                            <!--Comment-->
                            <div class="comment-popup">
                                <div class="comment-container">
                                    <div class="comment-write">
                                        <img class="comment-write__avatar profile-photo" src="<?php 
                        foreach ($data["Users"] as $value){
                            if($_SESSION['username']===$value['username']){
                                echo $value['avatar_url'];
                            }
                        }
                    ?>" alt="">
                                        <!--write comment-->
                                        <form action="./mvc/Core/action.php" style="width:100%;"
                                            id="<?php echo $value_post['id_post']  ?>">
                                            <!--<input class="get-post-id" type="hidden" name="postId" value="<?php// echo $value_post['id_post'] ?>" />-->
                                            <input type="text" class="comment-write__input" placeholder="Viết bình luận"
                                                name="comment-input" value="">
                                        </form>

                                    </div>
                                    <div class="comment-list">
                                        <?php foreach($data["Comments"] as $value_comment){
                                        //check comment thuoc post này không
                                        if($value_post['id_post']==$value_comment['id_post']){
                                            ?>

                                        <div class="comment-item">
                                            <img class="comment-item_avatar profile-photo" src="<?php
                                            //check user để lấy avatar cho item
                                                
                                                    foreach($data["Users"] as $value_user)
                                                    if($value_user['id_user']==$value_comment['id_user']){
                                                        echo $value_user['avatar_url'];
                                                    }
                                                
                                            ?>" alt="">
                                            <div class="comment-item_content">
                                                <p class="comment-item_content-title"><?php
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