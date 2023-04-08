<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="shortcut icon" href="https://play-lh.googleusercontent.com/P0QkMWnVe00FSXsSc2OzkHKqGB9JTMm4sur4XRkBBkFEtO7MEQgoxO6s92LHnJcvdgc=w240-h480-rw" type="image/x-icon">
    <script src="https://kit.fontawesome.com/5029888a17.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/index_admin.css">
</head>
<body>
    <div class="background">
        <div class="box_top"></div>
        <div class="box_bottom"></div>
    </div>
    <div class="body">
        <div class="nav_left">
            <div class="content_nav">
                <a href="./index.php" class="title_nav"><img src="https://play-lh.googleusercontent.com/P0QkMWnVe00FSXsSc2OzkHKqGB9JTMm4sur4XRkBBkFEtO7MEQgoxO6s92LHnJcvdgc=w240-h480-rw" alt="" class="img_nav"></a>
                <ul class="navbar">
                    <a href="../admin/dashboard.php" class="nav_link">
                        <li class="nav_item">
                            <i class="fa-solid fa-table-columns"></i>
                            <span>Dashboard</span>
                        </li>
                    </a>
                    <a href="../admin/add.php" class="nav_link">
                        <li class="nav_item">
                            <i class="fa-solid fa-plus"></i>
                            <span>Add</span>
                        </li>
                    </a>
                    <a href="../admin/edit.php" class="nav_link">
                        <li class="nav_item">
                            <i class="fa-solid fa-pen-to-square"></i>
                            <span>Edit</span>
                        </li>
                    </a>
                    <a href="../admin/delete.php" class="nav_link">
                        <li class="nav_item">
                            <i class="fa-solid fa-trash"></i>
                            <span>Delete</span>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="head">
                <div class="info_admin">
                    <img src="data:image/jpeg;base64,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" alt="" class="img_admin">
                    <span class="name_admin">Admin</span>
                </div>
                <form class="icon_head" method="post" action="../admin/logout.php">
                    <i class="fa-solid fa-gear"></i>
                    <button type="submit" name="logout" class="btn_logout" title="Đăng xuất">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </button>
                </form>
            </div>
