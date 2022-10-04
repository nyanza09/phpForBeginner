<?php
session_start();
echo $_SESSION['user']. "\n";
echo "<a href=\"sessionDestroy.php\">session destroy</a>";
?>