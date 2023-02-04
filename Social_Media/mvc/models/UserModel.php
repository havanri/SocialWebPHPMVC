<?php 
    class UserModel extends DB{
        public function getListUser(){
            $qr="select * from users";
            $rows=mysqli_query($this->con,$qr);
            $mang=array();
            while($row = mysqli_fetch_array($rows)){
                $mang[]=$row;
            }
            return json_encode($mang);
        }
    }
?>