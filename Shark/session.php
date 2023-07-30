<?php

session_start();

$_SESSION['username']="admin";

echo $_SESSION['username'];

session_unset();

?>