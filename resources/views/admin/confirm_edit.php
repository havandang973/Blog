<?php
require_once('../../../models/Info_post.php');
require_once('../../../models/Post.php');
$Info_post = new Info_post();
$Post = new Post();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["btn_edit_post"])) {
        $data_post = [$_POST['title_post_add'], $_POST['time_post_add'], $_POST['content_post_1'], $_POST['img_post_add'], $_POST['content_post_2']];
        $data_info = [$_POST['title_post_add_home'], $_POST['time_post_add_home']];

        $Post->update($data_post, $_GET['id']);
        $Info_post->update($data_info, $_GET['id']);
    }
}

require_once('./head.php');
?>

<div class="content_add">
    <form action="" class="form_add_post" method="post">
        <?php
        require_once('../../../models/Post.php');
        $Post = new Post();

        $result = $Post->find($_GET['id']);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                    <div class="add_post">
                        <span>Edit Post</span>
                        <div>
                            <label for="">Title</label> <br>
                            <input type="text" name="title_post_add" class="title_post_add" value="' . $row[$Post->getTitle()] . '">
                        </div>
                        <div>
                            <label for="">Time</label> <br>
                            <input type="text" name="time_post_add" class="title_post_add" value="' . $row[$Post->getTime()] . '">
                        </div>
                        <div>
                            <label for="">Content</label> <br>
                            <textarea name="content_post_1" cols="30" rows="10">' . $row[$Post->getContent_1()] . '</textarea>
                        </div>
                        <div>
                            <label for="">Img</label> <br>
                            <input type="text" name="img_post_add" class="img_add" value="' . $row[$Post->getImg()] . '">
                        </div>
                        <div>
                            <label for="">Content</label> <br>
                            <textarea name="content_post_2" cols="30" rows="10">' . $row[$Post->getContent_2()] . '</textarea>
                        </div>
                    </div>';
            }
        }
        ?>
        <?php
        require_once('../../../models/Info_post.php');
        $Info_post = new Info_post();

        $result = $Info_post->find($_GET['id']);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                    <div class="add_home">
                        <span>Edit Home</span>
                        <div>
                            <label for="">Title</label> <br>
                            <input type="text" name="title_post_add_home" class="title_post_add" value="' . $row[$Info_post->getTitle()] . '">
                        </div>
                        <div>
                            <label for="">Time</label> <br>
                            <input type="text" name="time_post_add_home" class="time_post_add_home" value="' . $row[$Info_post->getTime()] . '">
                        </div>
                        <div class="btn_confirm_edit">
                            <a href="./edit.php" class="btn_exit_cfedit">Back</a>
                            <button class="btn_add_post" type="submit" name="btn_edit_post">Save</button>
                        </div>
                    </div>';
            }
        }
        ?>
    </form>
</div>
</div>

</body>

</html>