<?php
session_start();
session_destroy();

header("Location: /login-session/login.php");
exit();