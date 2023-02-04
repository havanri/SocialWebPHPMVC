<?php 
    class home extends Controller{
        public $PostModel;
        public $UserModel;
        public $CommentModel;
        public $LikeModel;
        public $FriendModel;

        public function __construct(){

            $this->PostModel = $this->model('PostModel');
            $this->UserModel = $this->model('UserModel');
            $this->CommentModel = $this->model('CommentModel');
            $this->LikeModel = $this->model('LikeModel');
            $this->FriendModel = $this->model('FriendModel');
         // $this->UserModelModel = $this->model('UserModel');

        }
        public function show(){
            //model
            $json_Posts=($this->PostModel)->getListPost();
            $Posts=json_decode($json_Posts,true);

            $json_Users=($this->UserModel)->getListUser();
            $Users=json_decode($json_Users,true);

            $json_Comments=($this->CommentModel)->getListComment();
            $Comments=json_decode($json_Comments,true);
           
            $json_Likes=($this->LikeModel)->getListLike();
            $Likes=json_decode($json_Likes,true);

            $json_Friends=($this->FriendModel)->getListFriend();
            $Friends=json_decode($json_Friends,true);

            //view
            $this->view("home",["Posts"=>$Posts,
                                "Users"=>$Users,
                                "Comments"=>$Comments,
                                "Likes"=>$Likes,
                                "Friends"=>$Friends]);
        }
        public function profile($id_profile){
            //model
            $json_Posts=($this->PostModel)->getListPost();
            $Posts=json_decode($json_Posts,true);

            $json_Users=($this->UserModel)->getListUser();
            $Users=json_decode($json_Users,true);

            $json_Comments=($this->CommentModel)->getListComment();
            $Comments=json_decode($json_Comments,true);
           
            $json_Likes=($this->LikeModel)->getListLike();
            $Likes=json_decode($json_Likes,true);

            $json_Friends=($this->FriendModel)->getListFriend();
            $Friends=json_decode($json_Friends,true);

            //view
            $this->view("profile1",["Posts"=>$Posts,
                                "Users"=>$Users,
                                "Comments"=>$Comments,
                                "Likes"=>$Likes,
                                "id_Profile"=>$id_profile,
                                "Friends"=>$Friends]);
        }
        public function InsertComment(){
            

            $id_user=$_SESSION['id_user'];
            $id_post=$_COOKIE['postID_comment'];
            $content=$_COOKIE['inputComment'];
            $kq = ($this->CommentModel)->insertComment($id_user,$id_post,$content);

            $json_Posts=($this->PostModel)->getListPost();
            $Posts=json_decode($json_Posts,true);

            $json_Users=($this->UserModel)->getListUser();
            $Users=json_decode($json_Users,true);

            $json_Comments=($this->CommentModel)->getListComment();
            $Comments=json_decode($json_Comments,true);

            $json_Likes=($this->LikeModel)->getListLike();
            $Likes=json_decode($json_Likes,true);
            
            $data = json_encode(array(["Likes" => $Likes
                        ,"Users" =>$Users,
                        "Posts"=>$Posts,
                    "id_user"=>$id_user]));
            echo $data;
                    }
        public function EditComment(){
            

                        $id_user=$_SESSION['id_user'];
                        $id_post=$_COOKIE['postID_comment'];
                        $content=$_COOKIE['inputComment'];
                        $kq = ($this->CommentModel)->editComment($id_comment,$content);
            
                        $json_Posts=($this->PostModel)->getListPost();
                        $Posts=json_decode($json_Posts,true);
            
                        $json_Users=($this->UserModel)->getListUser();
                        $Users=json_decode($json_Users,true);
            
                        $json_Comments=($this->CommentModel)->getListComment();
                        $Comments=json_decode($json_Comments,true);
            
                        $json_Likes=($this->LikeModel)->getListLike();
                        $Likes=json_decode($json_Likes,true);
                        
                        $data = json_encode(array(["Likes" => $Likes
                                    ,"Users" =>$Users,
                                    "Posts"=>$Posts,
                                "id_user"=>$id_user]));
                        echo $data;
                                }
        public function RemoveComment(){
            

                                    $id_user=$_SESSION['id_user'];
                                    $id_post=$_COOKIE['postID_comment'];
                                    $content=$_COOKIE['inputComment'];
                                    $kq = ($this->CommentModel)->removeComment($id_comment);
                        
                                    $json_Posts=($this->PostModel)->getListPost();
                                    $Posts=json_decode($json_Posts,true);
                        
                                    $json_Users=($this->UserModel)->getListUser();
                                    $Users=json_decode($json_Users,true);
                        
                                    $json_Comments=($this->CommentModel)->getListComment();
                                    $Comments=json_decode($json_Comments,true);
                        
                                    $json_Likes=($this->LikeModel)->getListLike();
                                    $Likes=json_decode($json_Likes,true);
                                    
                                    $data = json_encode(array(["Likes" => $Likes
                                                ,"Users" =>$Users,
                                                "Posts"=>$Posts,
                                            "id_user"=>$id_user]));
                                    echo $data;
        }                 
        public function InsertPost(){
            //$json_Posts=($this->PostModel)->getListPost();
            //$Posts=json_decode($json_Posts,true);
            $id_user=$_SESSION['id_user'];
            $content=$_COOKIE['inputContentPost'];
            $post_url="./public/image/".$_COOKIE['inputurlHinhtPost'];
            $post_time=$date = date('y-m-d');
            $kq = ($this->PostModel)->insertPost($id_user,$content,$post_url,$post_time);
            if($kq){
                header("Location:http://localhost/Social_Media/index.php?url=home");
            }
            else{
                header("Location:http://localhost/Social_Media/index.php?url=home/profile/1");
            }
            
        }
        public function RemoveLike(){
            $id_user=$_SESSION['id_user'];
            //$id_like=$_COOKIE['id_like'];
            $id_post=$_COOKIE['postID_like'];

            $id_like=$_COOKIE['id_like'];
            $kq = ($this->LikeModel)->removeLike($id_like);

            $json_Likes=($this->LikeModel)->getListLike();
            $Likes=json_decode($json_Likes,true);

            $json_Users=($this->UserModel)->getListUser();
            $Users=json_decode($json_Users,true);

            $json_Posts=($this->PostModel)->getListPost();
            $Posts=json_decode($json_Posts,true);

            $data = json_encode(array(["Likes" => $Likes
                        ,"Users" =>$Users,
                        "Posts"=>$Posts,
                    "id_user"=>$id_user]));
            echo $data;
                    }
            
        
        public function AddLike(){
            $id_user=$_SESSION['id_user'];
            //$id_like=$_COOKIE['id_like'];
            $id_post=$_COOKIE['postID_like'];
            $kq = ($this->LikeModel)->addLike($id_user,$id_post);

            $json_Likes=($this->LikeModel)->getListLike();
            $Likes=json_decode($json_Likes,true);

            $json_Users=($this->UserModel)->getListUser();
            $Users=json_decode($json_Users,true);

            $json_Posts=($this->PostModel)->getListPost();
            $Posts=json_decode($json_Posts,true);

            
    
            $data = json_encode(array(["Likes" => $Likes
                        ,"Users" =>$Users,
                        "Posts"=>$Posts,
                    "id_user"=>$id_user]));
            echo $data;
        }
        public function EditPost(){
            $id_user=$_SESSION['id_user'];
            $id_post = $_COOKIE['id_post'];
            $content=$_COOKIE['inputContentPost'];
            $post_url="./public/image/".$_COOKIE['inputurlHinhtPost'];
            $kq = ($this->PostModel)->editPost($id_post,$content,$post_url);
           
           
            $json_Likes=($this->LikeModel)->getListLike();
            $Likes=json_decode($json_Likes,true);

            $json_Users=($this->UserModel)->getListUser();
            $Users=json_decode($json_Users,true);

            $json_Posts=($this->PostModel)->getListPost();
            $Posts=json_decode($json_Posts,true);

            
    
            $data = json_encode(array(["Likes" => $Likes
                        ,"Users" =>$Users,
                        "Posts"=>$Posts,
                    "id_user"=>$id_user]));
            echo $data;
        }
        public function RemovePost(){
            $id_user=$_SESSION['id_user'];
            //$id_like=$_COOKIE['id_like'];
            $id_post = $_COOKIE['id_post'];

            ($this->PostModel)->removeLike($id_post);
            ($this->PostModel)->removeComment($id_post);
            ($this->PostModel)->removePost($id_post);

            $json_Likes=($this->LikeModel)->getListLike();
            $Likes=json_decode($json_Likes,true);

            $json_Users=($this->UserModel)->getListUser();
            $Users=json_decode($json_Users,true);

            $json_Posts=($this->PostModel)->getListPost();
            $Posts=json_decode($json_Posts,true);

            $data = json_encode(array(["Likes" => $Likes
                        ,"Users" =>$Users,
                        "Posts"=>$Posts,
                    "id_user"=>$id_user]));
            echo $data;

        }

        //fRIEND
        public function AcceptFriend($id_profile){
            //model

            $json_Users=($this->UserModel)->getListUser();
            $Users=json_decode($json_Users,true);
            
            $json_Friends=($this->FriendModel)->getListFriend();
            $Friends=json_decode($json_Friends,true);

            $id_user_send="";
            foreach($Users as $value){
                if($_SESSION['username']===$value['username']){
                    $id_user_send=$value['id_user'];
                }
            }
            foreach($Friends as $value){
                if($id_user_send==$value['id_user_receive'] && $id_profile==$value['id_user_send']){
                    $kq=($this->FriendModel)->updateFriend($value['id_addfriend']);
                }
            }
            //view
            /*$this->view("profile",["Posts"=>$Posts,
                                "Users"=>$Users,
                                "Comments"=>$Comments,
                                "Likes"=>$Likes,
                                "id_Profile"=>$id_profile,
                                "Friends"=>$Friends]);*/
                                header("Location:http://localhost/Social_Media/index.php?url=home");
        }
        public function DeclineFriend($id_profile){
            $json_Users=($this->UserModel)->getListUser();
            $Users=json_decode($json_Users,true);
            
            $json_Friends=($this->FriendModel)->getListFriend();
            $Friends=json_decode($json_Friends,true);

            $id_user_send="";
            foreach($Users as $value){
                if($_SESSION['username']===$value['username']){
                    $id_user_send=$value['id_user'];
                }
            }
            foreach($Friends as $value){
                if(($id_user_send==$value['id_user_receive'] && $id_profile==$value['id_user_send'])||($id_user_send==$value['id_user_send'] && $id_profile==$value['id_user_receive'])){
                    $kq=($this->FriendModel)->removeFriend($value['id_addfriend']);
                }
            }
            //view
            /*$this->view("profile",["Posts"=>$Posts,
                                "Users"=>$Users,
                                "Comments"=>$Comments,
                                "Likes"=>$Likes,
                                "id_Profile"=>$id_profile,
                                "Friends"=>$Friends]);*/
                                header("Location:http://localhost/Social_Media/index.php?url=home");
        }
    }
?>