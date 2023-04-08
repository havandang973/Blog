<?php
require_once('./head.php');

?>

<div class="content_edit">
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Time</th>
            <th>Content</th>
            <th>Img</th>
            <th>Content</th>
            <th>Edit</th>
        </tr>
        <?php
        require('../../../models/Post.php');

        $Post = new Post();
        $result = $Post->all();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo
                '<tr>
                    <td>' . $row[$Post->getId()] . '</td>
                    <td>' . $row[$Post->getTitle()] . '</td>
                    <td>' . $row[$Post->getTime()] . '</td>
                    <td>' . $row[$Post->getContent_1()] . '</td>
                    <td>' . $row[$Post->getImg()] . '</td>
                    <td>' . $row[$Post->getContent_2()] . '</td>
                    <td>
                        <form action="" method="post">
                            <a href="confirm_edit.php?id=' . $row[$Post->getId()] . '" class="link_edit"><i class="fa-solid fa-pen-to-square"></i></a>
                        </form>
                    </td>
                </tr>';
            }
        }
        ?>
    </table>
</div>
</div>
</div>
</body>

</html>