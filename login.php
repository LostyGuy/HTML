<?php
session_start();

// Redirect to another page if already logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: second_index.html");
    exit;
}

// Get login and password from POST request
$login = isset($_POST['login']) ? $_POST['login'] : '';
$passwd = isset($_POST['passwd']) ? $_POST['passwd'] : '';

// Check credentials
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($login === "zgadnij" && $passwd === "prywatne") {
        // Set session variable to indicate the user is logged in
        $_SESSION['loggedin'] = true;
        header("Location: second_index.html");
        exit;
    } else {
        echo "<script>alert('Niepoprawny login lub hasło');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poradnik Pracowniczy</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
</head>
<body>
    <div class="container">
        <img id="logo" src="img\TeatrLogo.jpg" alt="Teatr Wielki">
        <h1>Witaj Pracowniku</h1>
        <p>WZaloguj się</p>
        <div class="buttons">
            <form method="POST">
                <label for="login">Login:</label>
                <input type="text" id="login" name="login" required><br><br>

                <label for="passwd">Password:</label>
                <input type="password" id="passwd" name="passwd" required><br><br>

                <input type="submit" value="Zaloguj się">
            </form>
        </div>
        <p style="font-size: 10px; margin: auto;">Stworzone przez Księgę Skarg i Zażaleń</p>
        <p style="font-size: 10px; margin: auto;">
            <a href="login.php">Zaloguj się</a>
        </p>
    </div>
</body>
</html>
