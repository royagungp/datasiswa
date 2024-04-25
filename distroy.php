<?php
session_start();

session_destroy();

header("location:http://localhost/session/form.php");

?>