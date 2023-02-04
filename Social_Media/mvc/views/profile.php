<?php 
    if(isset($_SESSION['username'])){
    foreach($data["Users"] as $value){
        if($value['username']===$_SESSION['username']){
            $_SESSION['id_user']=$value['id_user'];
        }
    }    
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Website</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="stylesheet" href="./public/css/profile_style.css">
    <link rel="stylesheet" href="./public/font/themify-icons-font/themify-icons/themify-icons.css">
</head>

<body>
    <!-- ================ NAVBAR ================= -->
    <nav>
        <div class="container">
            <h2 class="logo js-logo-btn">
                LIRONG
            </h2>
            <div class="search-bar">
                <i class="uil uil-search"></i>
                <input type="search" placeholder="Search...">
            </div>
            <div class="create" style="position:relative;">
                <label class="btn btn-primary" for="create-post">Create</label>
                <div class="profile-photo" onclick="popupLockOut()">
                    <img src="<?php 
                        foreach ($data["Users"] as $value){
                            if($_SESSION['username']===$value['username']){
                                echo $value['avatar_url'];
                            }
                        }
                    ?>" alt="">
                    <ul class="sub-create-avatar">
                        <li><a href="<?php
                        $id_user=$_SESSION['id_user'];
                            echo "http://localhost/Social_Media/index.php?url=profile/show/$id_user";
                        ?>">Xem trang cá nhân</a></li>
                        <li><a href="mvc/Core/LogOut.php">Đăng xuất</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- ================ END NAVBAR ================= -->

    <!-- ================ MAIN =================== -->

    <main>
        <div class="container">
            <div class="head-head">
                <div class="cover-image">
                    <img src="https://scontent.fsgn2-4.fna.fbcdn.net/v/t1.6435-9/46437285_122765515386101_4587430302292377600_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=e3f864&_nc_ohc=u6wU3IHywWoAX9QzSUh&_nc_ht=scontent.fsgn2-4.fna&oh=00_AT9-KKrNIXh4Mm74UepaVQ3FKXFh6GC1voAiCpbB6WASVg&oe=62BF8C04"
                        alt="" class="cover-photo">
                </div>
                <div class="profile-main">
                    <img src="<?php 
                        foreach ($data["Users"] as $value){
                            if($data["id_Profile"]===$value['id_user']){
                                echo $value['avatar_url'];
                            }
                        }
                    ?>" alt="" class="profile-photo photo-main">
                    <div class="info-user">
                        <p class="name" style="font-size:30px; font-weight: 600;"><?php 
                        foreach ($data["Users"] as $value){
                            if($data["id_Profile"]===$value['id_user']){
                                echo $value['full_name'];
                            }
                        }
                    ?></p>
                        <p class="quantity-friends" style="font-size:17px;">58 bạn bè</p>
                        <span style="display: flex;">
                            <span><img
                                    src="https://www.planetware.com/wpimages/2020/02/france-in-pictures-beautiful-places-to-photograph-eiffel-tower.jpg"
                                    alt="" class="profile-photo"></span>
                            <span><img
                                    src="https://www.planetware.com/wpimages/2020/02/france-in-pictures-beautiful-places-to-photograph-eiffel-tower.jpg"
                                    alt="" class="profile-photo"></span>
                        </span>

                    </div>
                    <div id="<?php
                    //check có để ẩn addfriend
                    foreach($data["Users"] as $value){
                        if($_SESSION['username']===$value['username']){
                            if($value['id_user']==$data["id_Profile"]){
                                echo "true";
                            }
                            else {
                                echo"false";
                            }
                        }
                    }
                ?>" class="add-friend js-addfriend">
                        <button id="<?php 
                        echo $data["id_Profile"];
                        ?>" class="add-friend-btn js-addfriend-btn"><?php
                        $addFriendBtn = "";
                        foreach($data["Friends"] as $value){
                            foreach($data["Users"] as $value_u){
                                if($_SESSION['username']===$value_u['username']){
                                    if($value_u['id_user']==$value['id_user_send'] && $value['id_user_receive']===$data["id_Profile"] && $value['status']==="responding"){
                                        $addFriendBtn = "Chờ phản hồi";
                                    }
                                    else if($value_u['id_user']==$value['id_user_receive'] && $value['id_user_send']===$data["id_Profile"] && $value['status']==="responding"){
                                        $addFriendBtn="Chấp nhận";
                                    }
                                    if(($value_u['id_user']==$value['id_user_send'] && $value['id_user_receive']===$data["id_Profile"] && $value['status']==="success")||($value_u['id_user']==$value['id_user_receive'] && $value['id_user_send']===$data["id_Profile"] && $value['status']==="success")){
                                        $addFriendBtn = "Bạn bè";
                                    }
                                }
                            }
                        }
                        if($addFriendBtn==="Chờ phản hồi"){
                            echo $addFriendBtn;
                        }
                        else if($addFriendBtn==="Bạn bè"){
                            echo $addFriendBtn;
                        }
                        else if($addFriendBtn==="Chấp nhận"){
                            echo $addFriendBtn;
                        }         
                        else {
                            echo "Thêm bạn bè";
                        }
                        ?></button>
                    </div>
                </div>
            </div>
            <div class="body">
                <div class="left">
                    <div class="box">
                        <p class="title">Ảnh</p>
                        <div class="list-img">
                            <?php 
                    ////////
                            foreach($data["Posts"] as $value_post){
                                //check post có id trùng với profile 
                                if($data["id_Profile"]==$value_post["id_user"]){
                                ?>

                            <img src="<?php echo $value_post['post_url'] ?>" alt="" class="album-photo">

                            <?php 
                                    } 
                                } 
                            ?>

                        </div>
                    </div>
                    <div class="box">
                        <p class="title">Bạn bè</p>
                        <div class="list-img">
                            <img src="../Social_Media/public/image/ngua.jpg" alt="" class="album-photo">
                            <img src="../Social_Media/public/image/ngua.jpg" alt="" class="album-photo">
                            <img src="../Social_Media/public/image/ngua.jpg" alt="" class="album-photo">
                            <img src="../Social_Media/public/image/ngua.jpg" alt="" class="album-photo">
                            <img src="../Social_Media/public/image/ngua.jpg" alt="" class="album-photo">
                            <img src="../Social_Media/public/image/ngua.jpg" alt="" class="album-photo">
                        </div>
                    </div>

                </div>
                <div class="middle">
                    <!-- ================ END STORY ==================== -->
                    <!-- ================ END STORY ==================== -->
                    <div id="<?php
                    //check có để ẩn create post
                    foreach($data["Users"] as $value){
                        if($_SESSION['username']===$value['username']){
                            if($value['id_user']==$data["id_Profile"]){
                                echo "true";
                            }
                            else {
                                echo"false";
                            }
                        }
                    }
                ?>" class="create-post js-open-modal-create-post">
                        <div class="profile-photo">
                            <img src="<?php 
                        foreach ($data["Users"] as $value){
                            if($_SESSION['username']===$value['username']){
                                echo $value['avatar_url'];
                            }
                        }
                    ?>" alt="">
                        </div>
                        <input type="text" placeholder="What's on your mind, <?php 
                        foreach ($data["Users"] as $value){
                            if($_SESSION['username']===$value['username']){
                                echo $value['full_name'];
                            }
                        }
                    ?>?" id="create-post">
                        <!--<input type="text" value="Post" class="btn btn-primary">-->
                    </div>
                    <!-- ================ NEW FEEDS ==================== -->
                    <div class="feeds">
                        <?php 
                    ////////
                            foreach($data["Posts"] as $value_post){
                                //check post có id trùng với profile 
                                if($data["id_Profile"]==$value_post["id_user"]){
                                    //feed item
                                    require 'child/feed.php' ;
                                }
                            }
                        ?>
                    </div>
                    <!-- ================ END NEW FEEDS ==================== -->
                    <!-- ================ END MIDDLE ==================== -->
                </div>
            </div>

        </div>

    </main>
    <!-- ========================= THEME CUSTOMIZATION ========================= -->
    <div class="modal">
        <div class="modal-container">
            <header class="modal-header">
                <h2>Customize your view</h2>
                <p class="text-muted">Manage your font size, color, and background.</p>
                <div class="modal-close">
                    <i class="uil uil-times"></i>
                </div>
            </header>
            <div class="modal-body">
                <!-- FONT SIZES -->
                <div class="font-size">
                    <h4>Font Size</h4>
                    <div>
                        <h6>Aa</h6>
                        <div class="choose-size">
                            <span class="font-size-1"></span>
                            <span class="font-size-2"></span>
                            <span class="font-size-3"></span>
                            <span class="font-size-4"></span>
                            <span class="font-size-5 active"></span>
                        </div>
                        <h3>Aa</h3>
                    </div>
                </div>
                <!-- PRIMARY COLORS -->
                <div class="color">
                    <h4>Color</h4>
                    <div class="choose-color">
                        <span class="color-1 active"></span>
                        <span class="color-2"></span>
                        <span class="color-3"></span>
                        <span class="color-4"></span>
                        <span class="color-5"></span>
                    </div>
                </div>

                <!-- BACKGROUND COLORS -->
                <div class="background">
                    <h4>Background</h4>
                    <div class="choose-bg">
                        <div class="bg-1 active">
                            <span></span>
                            <h5 for="bg-1">Light</h5>
                        </div>
                        <div class="bg-2">
                            <span></span>
                            <h5 for="bg-2">Dim</h5>
                        </div>
                        <div class="bg-3">
                            <span></span>
                            <h5 for="bg-3">Lights Out</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Modal post-->
    <div class="create-post-modal js-modal-post">
        <form action="./mvc/Core/action.php" class="create-post-modal-container js-post-modal-container" method="get">
            <div class="create-post-modal-header">
                <p style="font-size:20px; font-weight:600;">Create Post</p>
                <div class="modal-close js-modal-close">
                    <i class="ti-close ti-close-comment"></i>
                </div>
            </div>
            <div class="create-post-modal-body">
                <div class="post-user ">
                    <img class=" profile-photo" src="<?php 
                        foreach($data["Users"] as $value){
                            if($value['username']==$_SESSION['username']){
                                echo $value['avatar_url'];
                            }
                        }
                    ?>" alt="" class="post-avatar">
                    <p class="post-user__fullname">
                        <?php 
                        foreach($data["Users"] as $value){
                            if($value['username']==$_SESSION['username']){
                                echo $value['full_name'];
                            }
                        }
                    ?>
                    </p>
                </div>
                <div class="post-content">

                    <textarea class="post-content-textarea" name="content_post"
                        placeholder="Write content........."></textarea>
                </div>
                <div class="post-add-img">
                    <label for="file-upload" class="custom-file-upload">
                        <img class="file-upload-img"
                            src="https://freeiconshop.com/wp-content/uploads/edd/image-outline-filled.png" alt="">
                    </label>
                    <input id="file-upload" type="file" name="urlHinh_post" />
                </div>
            </div>
            <div class="create-post-modal-footer">
                <button class="create-post-btn" type="submit" onclick="createInfoPost()">Post</button>
            </div>
        </form>
    </div>
    <script src="./public/js/press.js"></script>
    <script src="./public/js/main.js"></script>
    <script src="./public/js/input.js"></script>
    <script src="./public/js/popupcmt.js"></script>
    <script src="./public/js/profile_hideCreatPost.js"></script>
    <script src="./public/js/addfriend.js"></script>
</body>

</html>
<?php
}
    else {
        header('Location:http://localhost/Social_Media/index.php?url=login');
    }
?>