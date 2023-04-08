<?php 
require_once('../../models/Post.php');

$Post = new Post();
$result = $Post->findTitle($_GET['id']);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo $row[$Post->getTitle()];
    }
}
?>