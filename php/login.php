<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
</head>
<body style="margin:30px;">
    <div class="container">
        <h1>Logowanie</h1>
        <form class="pure-form" method="post">
            <fieldset>
                <legend>Logowanie</legend>
                <label for="username">Nazwa użytkownika:</label>
                <input id="username" type="text" name="username" required>
                <label for="password">Hasło:</label>
                <input id="password" type="password" name="password" required>
                <button type="submit" class="pure-button pure-button-primary">Zaloguj</button>
            </fieldset>
        </form>
        
        <?php
        session_start();
        $users = array(
            "test" => "test",
            "username1" => "password1",
            "username2" => "password2",
        );

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];

            if (isset($users[$username]) && $users[$username] === $password) {
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header('Location: index.php');
                exit();
            } else {
                echo "<p>Niepoprawna nazwa użytkownika lub hasło.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
