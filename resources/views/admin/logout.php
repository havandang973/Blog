<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['logout'])) {
        header('location: ./login.php');
    }
}
?>
