<?php
// Inicjuj sesję
session_start();

// Zniszcz sesję, co oznacza wylogowanie użytkownika
session_destroy();

// Przekieruj użytkownika na stronę logowania lub inną stronę, na którą chcesz przekierować po wylogowaniu
header('Location: login.php');
?>
