<?php
session_start();
unset ( $_SESSION['connected'] );
header ("HTTP/1.1 301 Moved Permanently");
header ("Location: /home.php");
exit();
