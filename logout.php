<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
session_destroy();
echo '<script type="text/javascript">';
echo 'alert("Logged out Successfully!");';
echo 'window.location.href = "login1.php";'; // Redirect to another_page
echo '</script>';
exit;
?>