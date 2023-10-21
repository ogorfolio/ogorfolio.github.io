<?php
// Sprawdź, czy użytkownik jest zalogowany
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Odbierz dane z formularza
    $username = $_POST['username'];
    $image = $_FILES['image'];

    // Sprawdź, czy plik obrazu został przesłany
    if ($image['error'] === UPLOAD_ERR_OK) {
        // Zapisz plik obrazu
        $imagePath = 'images/' . $image['name'];
        move_uploaded_file($image['tmp_name'], $imagePath);

        // Wczytaj istniejące dane z pliku JSON
        $zaufanieData = json_decode(file_get_contents('zaufanie.json'), true);

        // Dodaj nowy element "Zaufanie"
        $newZaufanieItem = [
            'username' => $username,
            'image' => $imagePath
        ];

        $zaufanieData[] = $newZaufanieItem;

        // Zapisz zaktualizowane dane do pliku JSON
        file_put_contents('zaufanie.json', json_encode($zaufanieData, JSON_PRETTY_PRINT));

        // Przekieruj użytkownika na stronę panelu administracyjnego
        header('Location: admin-panel.php');
    } else {
        echo 'Wystąpił błąd podczas przesyłania pliku obrazu.';
    }
}
?>
