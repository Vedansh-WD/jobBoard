<?php
session_start();

session_unset();
session_destroy();

header("location: https://hirenet.orgfree.com");
exit;
?>