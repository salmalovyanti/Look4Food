<?php
session_start();
session_unset();
session_destroy();

header("Location: welcome.html?message=" . urlencode("Logout berhasil!"));
exit();
?>
