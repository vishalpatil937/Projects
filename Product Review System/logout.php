<?php
session_start();

unset($_SESSION['user_id']);
session_destroy();
include'inter1home.php';


?>
