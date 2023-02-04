<?php 
    include 'DB_session.php';
    session_start();
    
    $ss_user = $_GET['username'];
    $ss_pass= $_GET['password'];
    //check connection
    if(isset($_SESSION['username'])){
        header("Location:http://localhost/Social_Media/index.php?url=home");
        return;
    }
    
    //lấy dữ liệu user
    $qr="select * from users";
            $rows=mysqli_query($con,$qr);
            $mang=array();
            while($row = mysqli_fetch_array($rows)){
                $mang[]=$row;
            }
    $json = json_encode($mang);
    $listUser = json_decode($json,true);
    foreach($listUser as $value){
        if($ss_user===$value['username']){
            if (password_verify($ss_pass, $value['password'])) {
                $_SESSION['username'] = $value['username'];
        // chạy vô trang chủ
                header("Location:http://localhost/Social_Media/index.php?url=home");
                //echo 'Password is valid!';
            } else {
                header("Location:http://localhost/Social_Media/index.php?url=login");
                //echo 'Invalid password.';
            }
        }
    }         
    /*$str = "select * from users";
    $result=mysqli_query($con,$str);
    $num_row=$result->num_rows;
    if($num_row==1){
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        // chạy vô trang chủ
        header("Location:http://localhost/Social_Media/index.php?url=home");
    }
    else {  
        //về login lại
        header("Location:http://localhost/Social_Media/index.php?url=login");
    }*/
?>