<?php 
    class profile extends Controller{
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
        public function show($id_profile){
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
            $this->view("profile",["Posts"=>$Posts,
                                "Users"=>$Users,
                                "Comments"=>$Comments,
                                "Likes"=>$Likes,
                                "id_Profile"=>$id_profile,
                                "Friends"=>$Friends]);
        }
        public function addFriend($id_profile){
            //model

            $json_Users=($this->UserModel)->getListUser();
            $Users=json_decode($json_Users,true);
            
            $json_Friends=($this->FriendModel)->getListFriend();
            $Friends=json_decode($json_Friends,true);

            $id_user_send;
            foreach($Users as $value){
                if($_SESSION['username']===$value['username']){
                    $id_user_send=$value['id_user'];
                }
            }
            $status="responding";

            $kq=($this->FriendModel)->addFriend($id_user_send,$id_profile,$status);

            //view
            /*$this->view("profile",["Posts"=>$Posts,
                                "Users"=>$Users,
                                "Comments"=>$Comments,
                                "Likes"=>$Likes,
                                "id_Profile"=>$id_profile,
                                "Friends"=>$Friends]);*/
                                header("Location:http://localhost/Social_Media/index.php?url=home/profile/$id_profile");
        }
        
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
                                header("Location:http://localhost/Social_Media/index.php?url=home/profile/$id_profile");
        }
        public function RemoveFriend($id_profile){
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
                                header("Location:http://localhost/Social_Media/index.php?url=home/profile/$id_profile");
        }
    }
?>