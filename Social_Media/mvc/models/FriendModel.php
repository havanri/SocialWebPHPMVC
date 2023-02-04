<?php 
    class FriendModel extends DB{
        //Lấy dữ liệu like từ database
        public function getListFriend(){
            $qr="select * from addfriend";
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
        public function addFriend($id_user_send,$id_user_receive,$status){
            $sql = "INSERT INTO addfriend (id_user_send,id_user_receive,status)
            VALUES('$id_user_send','$id_user_receive','$status')";
           $result=false;
           if(mysqli_query($this->con,$sql)){
               $result = true;
           }
           return json_encode($result);
        }
        public function updateFriend($id_addfriend){
            $sql = "UPDATE addfriend set status='success'  where id_addfriend ='$id_addfriend'";
           $result=false;
           if(mysqli_query($this->con,$sql)){
               $result = true;
           }
           return json_encode($result);
        }
        public function removeFriend($id_addfriend){
            $sql = "delete from addfriend
            where id_addfriend='$id_addfriend'";
            $result=false;
            if(mysqli_query($this->con,$sql)){
                $result = true;
            }
            return json_encode($result);
        }
    }
?>