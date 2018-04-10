<?php
session_start();
session_destroy();
header("Location: /Project/index.php");
?>