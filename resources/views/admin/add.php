<?php
require_once('../../../models/Info_post.php');
require_once('../../../models/Post.php');

$Info_post = new Info_post();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["btn_add_post"])) {
        if (!empty($_POST["time_post_add_home"]) && !empty($_POST['title_post_add_home'])) {
            $time = [$_POST["title_post_add_home"], $_POST['time_post_add_home']];
            $Info_post->insert($time);
        }
    }
}

$Post = new Post();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["btn_add_post"])) {
        if (!empty($_POST["title_post_add"]) && !empty($_POST["time_post_add"])) {
            $post = [$_POST["title_post_add"], $_POST["time_post_add"], $_POST["content_post_1"], $_POST["img_post_add"], $_POST["content_post_2"]];
            $Post->insert($post);
        }
    }
}


require_once('./head.php');
?>
<div class="content_add">
    <form action="./add.php" class="form_add_post" method="post">
        <div class="add_post">
            <span>Add Post</span>
            <div>
                <label for="">Title</label> <br>
                <input type="text" name="title_post_add" class="title_post_add" placeholder=" ">
            </div>
            <div>
                <label for="">Time</label> <br>
                <input type="text" name="time_post_add" class="title_post_add">
            </div>
            <div>
                <label for="">Content</label> <br>
                <textarea name="content_post_1" cols="30" rows="10"></textarea>
            </div>
            <div>
                <label for="">Img</label> <br>
                <input type="text" name="img_post_add" class="img_add">
            </div>
            <div>
                <label for="">Content</label> <br>
                <textarea name="content_post_2" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="add_home">
            <span>Add Home</span>
            <div>
                <label for="">Title</label> <br>
                <input type="text" name="title_post_add_home" class="title_post_add">
            </div>
            <div>
                <label for="">Time</label> <br>
                <input type="text" name="time_post_add_home" class="time_post_add_home">
            </div>
            <button class="btn_add_post" type="submit" name="btn_add_post">ADD</button>
        </div>
</div>
</div>
</div>
</body>

</html>