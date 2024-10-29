<?php

session_start();
session_unset();
session_destroy();

header("location: Lat3_4d.php");
exit();

?>