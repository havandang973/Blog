<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php require_once("./gettitle.php");?></title>
    <link rel="icon" type="image/png" href="https://tapchibitcoin.io/wp-content/uploads/2017/12/favico.png">
    <script src="https://kit.fontawesome.com/5029888a17.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/post.css">
</head>

<body>
    <?php
    require_once('../../models/Post.php');

    $Post = new Post();
    $result = $Post->find($_GET['id']);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
                <div class="head_post">
                    <div class="logo_post">
                        <a href="./index.php" class=""><img src="https://global-uploads.webflow.com/5e157548d6f7910beea4e2d6/63d3b61e2146472489101c0b_Screen%20Shot%202023-01-27%20at%201.22.09%20AM.png" alt="" class="img_logo_post"></a>
                        <a href="./index.php" class="title_logo"><span class="">the notorious snacky</span></a>
                    </div>
                </div>
                <div class="container_post">
                    <form action="" class="form_post" method="post">
                        <a href="./index.php" class="link_home">
                            <i class="fa-solid fa-arrow-left fa-flip"></i>
                            Quay về trang chủ
                        </a> <br>
                        <span class="title_post" name="title_post">' . $row[$Post->getTitle()] . '</span>
                        <span class="date_post">' . $row[$Post->getTime()] . '</span>
                        <p class="content_post">' . $row[$Post->getContent_1()] . '</p>
                        <img src="'. $row[$Post->getImg()] .'" alt="" class="img_post">
                        <p class="content_post">' . $row[$Post->getContent_2()] . '</p>
                        <div class="other_tag">
                            <b>Tags:</b>
                            <a href="" class="topic_tag">bitcoin</a>
                            <a href="" class="topic_tag">aliniex</a>
                            <a href="" class="topic_tag">binance</a>
                        </div>
                    </form>
                </div>
                <div class="footer_post">
                    <div class="info_footer_post">
                        <span class="powered">Powered by</span>
                        <i class="fa-solid fa-mug-saucer"></i>
                        <a href="">ristretto.rs</a>
                    </div>
                </div>';
        }
    }
    ?>
</body>
</html>