<?php
session_start();

$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $cookie = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $cookie["path"], $cookie["domain"],
        $cookie["secure"], $cookie["httponly"]
            );
};

session_destroy();

header("Location: index.php");
exit();
?>