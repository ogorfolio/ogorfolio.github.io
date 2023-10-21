<?php
session_start();

// Sprawdź, czy użytkownik jest zalogowany
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Panel Administracyjny</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Panel Administracyjny</h1>
    </header>

    <nav>
        <ul>
            <li><a href="dodaj-zaufanie.php">Dodaj Element Zaufania</a></li>
            <li><a href="logout.php">Wyloguj</a></li>
        </ul>
    </nav>

    <section id="content">
        <!-- Tutaj umieść zawartość panelu administracyjnego -->
    </section>

    <footer>
        <p>&copy; 2023 Twój Serwis</p>
    </footer>
</body>
</html>
