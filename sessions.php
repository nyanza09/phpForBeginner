<?php
session_start();
$name = 'nabeel';
$_SESSION['user']= $name;

echo "<a href=\"controller/sessionviewer.php\">session view</a>";
?>