<?php session_start();
    if(isset($_SESSION['username'])){
        header("Location:http://localhost/Social_Media/index.php?url=home");
        return;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/Login_style.css">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <div class="container-login">
            
            <form action="./mvc/Core/action.php" class="form-login" method="get">
                <input type="text" class="form-control" placeholder="Email hoặc số điện thoại" name="username">
                <input type="password" class="form-control" placeholder="Mật khẩu" name="password" >
                <button type="submit" class="btn-login" name="submit">
                    Đăng nhập
                </button>
                <button class="btn-signup">Tạo tài khoản mới</button>
            </form>
        </div>
    </div>
</body>
</html>