<?php
require_once('../../../models/Admin.php');

$Admin = new Admin();
$result = $Admin->all();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(mysqli_num_rows($result) > 0) {
        $error = '';
        while($row = mysqli_fetch_assoc($result)) {
            if($_POST["username"] == $row[$Admin->getUser()] && $_POST["password"] == $row[$Admin->getPassword()]) {
                header('location: ./index.php');
            }else {
                $error = "Đăng nhập thất bại";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="shortcut icon" href="https://play-lh.googleusercontent.com/P0QkMWnVe00FSXsSc2OzkHKqGB9JTMm4sur4XRkBBkFEtO7MEQgoxO6s92LHnJcvdgc=w240-h480-rw" type="image/x-icon">
    <script src="https://kit.fontawesome.com/5029888a17.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/admin.css">
</head>

<body>
    <div class="main">
        <div class="content">
            <div class="title">ADMIN</div>
            <form method="post" action="./login.php" class="form">
                <div class="form-login">
                    <input type="text" placeholder=" " class="username" name="username" value="">
                    <label for="username">Username</label>
                </div>
                <div class="form-login">
                    <input type="password" placeholder=" " class="password" name="password" value="">
                    <label for="password">Password</label>
                </div>
                <button class="btn_login" type="submit">ĐĂNG NHẬP</button>
                <span class="error"><?php echo empty($error) ? "" : $error; ?></span>
            </form>
        </div>
    </div>

</body>

</html>