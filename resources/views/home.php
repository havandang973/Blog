<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="icon" type="image/png" href="https://tapchibitcoin.io/wp-content/uploads/2017/12/favico.png">
    <script src="https://kit.fontawesome.com/5029888a17.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/index_client.css">
</head>

<body>
    <div class="head">
        <div class="content_head">
            <div class="logo_head">
                <a href="">
                    <img src="https://global-uploads.webflow.com/5e157548d6f7910beea4e2d6/63d3b61e2146472489101c0b_Screen%20Shot%202023-01-27%20at%201.22.09%20AM.png" alt="" class="img_logo">
                </a>
            </div>
            <h2 class="title_head">THE NOTORIOUS SNACKY</h2>
            <h4 class="name_head">BY HA VAN</h4>
            <h3 class="story_head">Blog mang lại cái nhìn tổng quan về lĩnh vực tiền mã hóa, forex và tiến bộ công nghệ blockchain trên toàn cầu.</h3>
            <div class="info_head">
                <a href="" class="rss">RSS</a>
                <a href="https://www.facebook.com/vandangha9703" class="facebook">Facebook</a>
                <a href="https://github.com/havandang973" class="">Github</a>
                <a href="https://read.webuild.community/page/1" class="">Một số blog hay nên đọc</a>
                <a href="" class="donate">
                    <i class="fa-solid fa-mug-saucer fa-bounce"></i>
                    Buy me a coffee
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main">
            <?php
            require_once('../../models/Info_post.php');
            $Info_post = new Info_post();
            $result = $Info_post->all();
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '
                        <div class="home_list_item">
                            <span class="home_date_indicator" name="home_date_indicator">' . $row[$Info_post->getTime()] . '</span>
                            <br>
                            <a href="post.php?id='.$row[$Info_post->getId()].'" name="home_title_post">' . $row[$Info_post->getTitle()] . '</a>
                        </div>';
                }
            }
            ?>
            <!-- <div class="home_list_item">
                <span class="home_date_indicator" name="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="../includes/post.php" name="home_title_post">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div> -->
            <!-- <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Coffee Talk: Nghĩa Trần - tác giả Proxyman: Từ side project thành full-time business</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Chuyển số Float thành Int dùng các phép bitwise</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Chuyển số Float thành Int dùng các phép bitwise</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Coffee Talk: Nghĩa Trần - tác giả Proxyman: Từ side project thành full-time business</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Chuyển số Float thành Int dùng các phép bitwise</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                rust, gokey
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Coffee Talk: Nghĩa Trần - tác giả Proxyman: Từ side project thành full-time business</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Coffee Talk: Nghĩa Trần - tác giả Proxyman: Từ side project thành full-time business</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Coffee Talk: Nghĩa Trần - tác giả Proxyman: Từ side project thành full-time business</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Deep Learning? Machine Learning? Học như thế nào?</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Coffee Talk: Nghĩa Trần - tác giả Proxyman: Từ side project thành full-time business</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div>
            <div class="home_list_item">
                <span class="home_date_indicator">10-03-2023</span>
                "rust, gokey"
                <br>
                <a href="">Nhật ký phát triển GoxKey - Tuần 7</a>
            </div> -->
        </div>
    </div>
</body>

</html>