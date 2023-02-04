<?php 
    class PostModel extends DB{
        public function getListPost(){
            $qr="select * from posts";
            $rows=mysqli_query($this->con,$qr);
            $mang=array();
            while($row = mysqli_fetch_array($rows)){
                $mang[]=$row;

            }
            return json_encode($mang);
        }
        public function insertPost($id_user,$content,$post_url,$post_time){
            $sql = "INSERT INTO posts (id_user,content,post_url,post_time)
                    VALUES('$id_user','$content','$post_url','$post_time')";
           $result=false;
           if(mysqli_query($this->con,$sql)){
               $result = true;
           }
           return json_encode($result);
        }
        //Edit 
        public function editPost($id_post,$content,$post_url){
            $sql= "UPDATE posts SET content = '$content', post_url = '$post_url' WHERE id_post='$id_post'";
        $result=false;
           if(mysqli_query($this->con,$sql)){
               $result = true;
           }
           return json_encode($result);
         }
         //========Remove Post==========
        public function removePost($id_post){
            $sql = "delete from posts
                    where id_post='$id_post'";
           $result=false;
           if(mysqli_query($this->con,$sql)){
               $result = true;
           }
           return json_encode($result);
         }
         public function removeLike($id_post){
            $sql = "delete from likes
                    where id_post='$id_post'";
           $result=false;
           if(mysqli_query($this->con,$sql)){
               $result = true;
           }
           return json_encode($result);
         }
         public function removeComment($id_post){
            $sql = "delete from comments
                    where id_post='$id_post'";
           $result=false;
           if(mysqli_query($this->con,$sql)){
               $result = true;
           }
           return json_encode($result);
         }
    }
?>