<?php
include 'config.php';
session_abort();
session_unset();
session_write_close();
$log = "login.html";
header("Location:$log");
?>