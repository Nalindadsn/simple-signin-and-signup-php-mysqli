<?php
include './phpHandlers/config.php';
session_start();
session_destroy();
header("location:home.php");
?>