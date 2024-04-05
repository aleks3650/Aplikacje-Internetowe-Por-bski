<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator kredytowy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
</head>
<body style="margin:30px;">    
<div class="container">
        <?php
        session_start();
        $users = array(
            "test" => "test",
            "username1" => "password1",
            "username2" => "password2",
        );

        if(isset($_POST['logout'])) {
            session_destroy();
            header('Location: login.php');
            exit();
        }
        if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
            header('Location: login.php');
            exit();
        }
        ?>

        <h1>Kalkulator kredytowy</h1>
        <form class="pure-form pure-form-stacked" method="post">
            <fieldset>
                <legend>Oblicz kredyt</legend>
                <label for="kwota">Kwota kredytu:</label>
                <input id="kwota" type="number" name="kwota" required>
                <label for="oprocentowanie">Oprocentowanie (w %):</label>
                <input id="oprocentowanie" type="number" name="oprocentowanie" step="0.01" required>
                <label for="okres">Okres spłaty (w latach):</label>
                <input id="okres" type="number" name="okres" required>
                <button type="submit" class="pure-button pure-button-primary">Oblicz</button>
            </fieldset>
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $kwota = $_POST["kwota"];
            $oprocentowanie = $_POST["oprocentowanie"] / 100; 
            $okres = $_POST["okres"] * 12; 
        
            if ($kwota != 0 && $okres != 0 && $oprocentowanie != 0) {
                $rata = ($kwota * ($oprocentowanie / 12)) / (1 - pow(1 + ($oprocentowanie / 12), -$okres));
                $suma = $rata * $okres;
        
                echo "<h2>Podsumowanie</h2>";
                echo "<h3>Miesięczna rata: " . number_format($rata, 2) . " zł</h3>";
                echo "<h3>Całkowita kwota do spłaty: " . number_format($suma, 2) . " zł</h3> ";
            } else {
                echo "<p>Proszę wypełnić wszystkie pola formularza poprwanie.</p>";
            }
        }
        ?>
        
        <form method="post" action="">
            <button type="submit" name="logout" class="pure-button">Wyloguj</button>
        </form>
    </div>
</body>
</html>
