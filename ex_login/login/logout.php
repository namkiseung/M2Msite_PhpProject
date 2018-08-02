<?php
session_start();

unset($_SESSION["userid"]);
unset($_SESSION["name"]);
unset($_SESSION["nick"]);
unset($_SESSION["level"]);
header("Location:http://localhost/M2M/M2Msite/home.php")
?>