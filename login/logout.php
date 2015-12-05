<?php
session_start();
unset($_SESSION['firstName']);
unset($_SESSION['lastName']);
session_destroy();

header("Location: home.php");
exit;
?>
