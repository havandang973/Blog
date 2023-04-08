<?php
require_once('../../../models/Info_post.php');
require_once('../../../models/Post.php');

$Post = new Post();
$Info_post = new Info_post();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['btn_delete_yes'])) {
        $Info_post->delete($_GET['id']);
        $Post->delete($_GET['id']);
        header('location: ./delete.php');
    }
}

require_once('./head.php');
?>
<div class="main_delete">
    <form action="" class="form_delete" method="post">
        <h4>Bạn có chắc chắn muốn xóa?</h4>
        <button type="submit" class="btn_delete_yes" name="btn_delete_yes">Yes</button>
        <a href="./delete.php" class="btn_delete_no">No</a>
    </form>
</div>
</div>
</div>

</body>

</html>