<?php 
    class LikeModel extends DB{
        //Lấy dữ liệu like từ database
        public function getListLike(){
            $qr="select * from likes";
            $rows=mysqli_query($this->con,$qr);
            $mang=array();
            while($row = mysqli_fetch_array($rows)){
                $mang[]=$row;
            }
            return json_encode($mang);
        }
        //Remove like
        public function removeLike($id_like){
            $sql = "delete from likes
                    where id_like='$id_like'";
           $result=false;
           if(mysqli_query($this->con,$sql)){
               $result = true;
           }
           return json_encode($result);
        }
        //Add like
        public function addLike($id_user,$id_post){
            $sql = "INSERT INTO likes (id_user,id_post)
            VALUES('$id_user','$id_post')";
           $result=false;
           if(mysqli_query($this->con,$sql)){
               $result = true;
           }
           return json_encode($result);
        }
    }
?>