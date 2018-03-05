<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: admin.php"); // Redirecting To admin login page
}
?>