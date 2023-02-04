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
    <link rel="stylesheet" href="./public/css/responsive.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/font/themify-icons-font/themify-icons/themify-icons.css">
</head>

<body>
    <!-- ================ NAVBAR ================= -->
    <nav>
        <div class="container">
            <h2 class="logo js-logo-btn" >
            LIRONG
            </h2>
            <!--Search -->
            <div class="search-bar">
                <i class="uil uil-search"></i>
                <input class="js-search-input" type="search" placeholder="Search..." onkeyup="inputSearch()">
                <div class="search-popup js-search-popup">
                    <?php
                        foreach($data["Users"] as $value){?>
                    <div id="<?php echo $value["id_user"]; ?>" class="js-user-search">
                        <div class="profile-photo js-photo-search">
                            <img src="<?php
                                echo $value['avatar_url'];
                            ?>" alt="">
                        </div>
                        <div class="notification-body">
                            <b class="js-search-full_name"><?php echo $value['full_name']; ?></b>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>

            </div>
            <div class="create" style="position:relative;">
                <label class="btn btn-primary" for="create-post">Create</label>
                <div class="profile-photo action-img" onclick="popupLockOut()">
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
                            echo "http://localhost/Social_Media/index.php?url=home/profile/$id_user";
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
            <!-- ================ LEFT ==================== -->
            <div class="left">
                <a class="profile">
                    <div class="profile-photo action-img">
                        <img src="
                        <?php
                        //profile 
                        foreach ($data["Users"] as $value){
                            if($_SESSION['username']===$value['username']){
                                echo $value['avatar_url'];
                            }
                        }
                    ?>" alt="">
                    </div>
                    <div class="handle">
                        <h4 class="action-fullname"><?php
                        //full_name
                        foreach ($data["Users"] as $value){
                            if($_SESSION['username']===$value['username']){
                                echo $value['full_name'];
                            }
                        }
                    ?></h4>
                        <p class="text-muted">@dayi</p>
                    </div>
                </a>
                <!-- ================ SIDEBAR ==================== -->
                <div class="sidebar">
                    <a class="menu-item active">
                        <span><i class="uil uil-home"></i></span>
                        <h3>Home</h3>
                    </a>
                    <a class="menu-item">
                        <span><i class="uil uil-compass"></i></span>
                        <h3>Explore</h3>
                    </a>
                    <a class="menu-item" id="notifications">
                        <span><i class="uil uil-bell"><small class="notification-count">9+</small></i></span>
                        <h3>Notifications</h3>
                        <!-- ================ Notifications Popup ==================== -->
                        <div class="notifications-popup">
                            <div>
                                <div class="profile-photo">
                                    <img src="" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Anie Benjamin</b> accepted your friend request
                                    <small class="text-muted">2 DAYS AGO</small>
                                </div>
                            </div>
                        </div>
                        <!-- ================ END Notifications Popup ==================== -->
                    </a>
                    <a class="menu-item" id="message-notifications">
                        <span><i class="uil uil-envelope"><small class="notification-count">6+</small></i></span>
                        <h3>Messages</h3>
                    </a>
                    <a class="menu-item">
                        <span><i class="uil uil-bookmark"></i></span>
                        <h3>Bookmarks</h3>
                    </a>
                    <a class="menu-item">
                        <span><i class="uil uil-chart-line"></i></span>
                        <h3>Analytics</h3>
                    </a>
                    <a class="menu-item" id="theme">
                        <span><i class="uil uil-palette"></i></span>
                        <h3>Theme</h3>
                    </a>
                    <a class="menu-item">
                        <span><i class="uil uil-setting"></i></span>
                        <h3>Settings</h3>
                    </a>
                </div>
                <!-- ================ END SIDE BAR ==================== -->
                <label for="create-post" class="btn btn-primary">Create Post</label>
            </div>
            <!-- ================ END LEFT ==================== -->

            <!-- ================ MIDDLE ==================== -->
            <div class="middle">
                <!-- ================ STORY ==================== -->
                <div class="stories">
                    <div class="story">
                        <div class="profile-photo">
                            <img src="" alt="">
                        </div>
                        <p class="name">Your Story</p>
                    </div>
                    <div class="story">
                        <div class="profile-photo">
                            <img src="" alt="">
                        </div>
                        <p class="name">Abaye Kingsley</p>
                    </div>
                    <div class="story">
                        <div class="profile-photo">
                            <img src="" alt="">
                        </div>
                        <p class="name">Gatwech Makuch</p>
                    </div>
                    <div class="story">
                        <div class="profile-photo">
                            <img src="" alt="">
                        </div>
                        <p class="name">Tim Beard</p>
                    </div>
                    <div class="story">
                        <div class="profile-photo">
                            <img src="" alt="">
                        </div>
                        <p class="name">Greyson Latosa</p>
                    </div>
                    <div class="story">
                        <div class="profile-photo">
                            <img src="" alt="">
                        </div>
                        <p class="name">Lana Libie</p>
                    </div>
                </div>
                <!-- ================ END STORY ==================== -->
                <div class="create-post js-open-modal-create-post">
                    <div class="profile-photo action-img">
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
                                //CHeck có phải user không 
                                if($value_post['id_user']==$_SESSION['id_user']){
                                    //feed item
                                    require 'child/feed.php' ;
                                }
                                ///CHeck có phải là bạn bè không
                                else {
                                    foreach($data["Friends"] as $value_f){
                                        if(($value_post['id_user']==$value_f['id_user_send'] && $value_f['id_user_receive']==$_SESSION['id_user'] && $value_f['status']==='success')||($value_post['id_user']==$value_f['id_user_receive'] && $value_f['id_user_send']==$_SESSION['id_user'] && $value_f['status']==='success')){
                                            require 'child/feed.php' ;
                                        }
                                    }
                                }
                            }
                        ?>
                </div>
                <!-- ================ END NEW FEEDS ==================== -->
                <!-- ================ END MIDDLE ==================== -->
            </div>
            <!-- ================ RIGHT ==================== -->
            <div class="right">
                <!-- ================ Messages ==================== -->
                <div class="messages">
                    <div class="heading">
                        <h4>Messages</h4><i class="uil uil-edit"></i>
                    </div>
                    <!-- ================ SEARCH BAR ==================== -->
                    <div class="search-bar">
                        <i class="uil uil-search"></i>
                        <input type="search" placeholder="Search messages..." id="message-search">
                    </div>
                    <!-- ================ MESSAGES CATEGORY ==================== -->
                    <div class="category">
                        <h6 class="active">Primary</h6>
                        <h6>General</h6>
                        <h6 class="message-requests">Requests(7)</h6>
                    </div>
                    <!-- ================ MESSAGE ==================== -->
                    <div class="message">
                        <div class="profile-photo active">
                            <img src="" alt="">
                        </div>
                        <div class="message-body">
                            <h5>Edam Quiten</h5>
                            <p class="text-muted">Just woke up bruh</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-photo">
                            <img src="" alt="">
                        </div>
                        <div class="message-body">
                            <h5>Abaye Kingsley</h5>
                            <p class="text-bold">3 new messages</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-photo active">
                            <img src="" alt="">
                        </div>
                        <div class="message-body">
                            <h5>Gatwech Makuch</h5>
                            <p class="text-muted">ok bro!</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-photo active">
                            <img src="" alt="">
                        </div>
                        <div class="message-body">
                            <h5>Tim Beard</h5>
                            <p class="text-bold">lol that's crazy :</p>
                        </div>
                    </div>
                </div>
                <!-- ================ END Messages ==================== -->
                <!-- ================ FRIEND REQUESTS ==================== -->
                <div class="friend-requests">
                    <h4>Requests</h4>
                    <!--Request item-->
                    <?php foreach($data['Friends'] as $value){
                        if($value['status']==='responding' && $_SESSION['id_user']==$value['id_user_receive']){
                            foreach($data['Users'] as $value_user){
                                if($value['id_user_send']==$value_user['id_user']){
                            ?>
                    <div class="requests js-request" id="<?php echo $value_user['id_user']; ?>">
                        <div class="info">
                            <div class="profile-photo">
                                <img src="<?php 
                                        echo $value_user['avatar_url'];
                                 ?>" alt="">
                            </div>
                            <div>
                                <h5><?php 
                                        echo $value_user['full_name'];
                                 ?></h5>
                                <p class="text-muted">
                                    8 muturad friends
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <button class="btn btn-primary accept-friend-btn" onclick="acc(<?php echo $value_user['id_user']; ?>)">
                                Accept
                            </button>
                            <button class="btn decline-friend-btn" onclick="dec(<?php echo $value_user['id_user']; ?>)">
                                Decline
                            </button>
                        </div>
                    </div>
                    <?php
                    }
                    }
                     }   
                    } ?>

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
        <div id="" class="create-post-modal-container js-post-modal-container">
            <div class="create-post-modal-header">
                <p class="title-post" style="font-size:20px; font-weight:600;">Create Post</p>
                <div class="modal-close js-modal-close">
                    <i class="ti-close ti-close-comment"></i>
                </div>
            </div>
            <div class="create-post-modal-body">
                <div class="post-user ">
                    <img class=" profile-photo action-img" src="<?php 
                        foreach($data["Users"] as $value){
                            if($value['username']==$_SESSION['username']){
                                echo $value['avatar_url'];
                            }
                        }
                    ?>" alt="" class="post-avatar">
                    <p class="post-user__fullname action-fullname">
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
                    <input id="file-upload-input" type="file" name="urlHinh_post" />
                </div>
            </div>
            <div class="create-post-modal-footer">
                <button class="create-post-btn" type="" onclick="createInfoPost()">Post</button>
            </div>
        </div>
    </div>

    <script src="./public/js/press.js"></script>
    <script src="./public/js/main.js"></script>
    <script src="./public/js/input.js"></script>
    <script src="./public/js/popupcmt.js"></script>


</body>

</html>
<?php
}
    else {
        header('Location:http://localhost/Social_Media/index.php?url=login');
    }
?>