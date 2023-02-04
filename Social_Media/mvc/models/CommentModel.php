<?php 
    class CommentModel extends DB{
        //Lấy dữ liệu Comment từ database
        public function getListComment(){
            $qr="select * from comments";
            $rows=mysqli_query($this->con,$qr);
            $mang=array();
            while($row = mysqli_fetch_array($rows)){
                $mang[]=$row;
            }
            return json_encode($mang);
        }
        //Add comment
        public function insertComment($id_user,$id_post,$content){
            $sql = "INSERT INTO comments (id_user, id_post,content)
                    VALUES('$id_user', '$id_post', '$content')";
           $result=false;
           if(mysqli_query($this->con,$sql)){
               $result = true;
           }
           return json_encode($result);
        }

        public function editComment($id_comment,$content){
            $sql= "UPDATE comments SET content = '$content' WHERE id_comment='$id_comment'";
        $result=false;
           if(mysqli_query($this->con,$sql)){
               $result = true;
           }
           return json_encode($result);
         }
         public function removeComment($id_comment){
            $sql = "delete from comments
                    where id_post='$id_comment'";
           $result=false;
           if(mysqli_query($this->con,$sql)){
               $result = true;
           }
           return json_encode($result);
         }
    }
?>