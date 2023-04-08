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