<?php
session_start();
include("conn.php");
unset($_SESSION['username']);
unset($_SESSION['password']);
session_destroy();
?>