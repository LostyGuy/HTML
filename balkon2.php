<?php
session_start();
$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balkon-II</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
</head>
<body>

    <div class="container">
        <button>Prosimy o zachowanie porządku na Balkonie II:<br>
            Znoszenie szkła<br>
            Nie pozostawianie śmieci pod ladą
            </button><br>
        <a href="bk2-widow.html"><button>Podział szatni według miejsc</button></a><br>
        <a href="index.html"><button>Cofnij</button></a>
        <a href="<?php echo $isLoggedIn ? 'second_index.html' : 'login.php'; ?>">
        <button><?php echo $isLoggedIn ? 'Powrót do Panelu' : 'Zaloguj się'; ?></button>
</a>


    </div>

</body>
</html>