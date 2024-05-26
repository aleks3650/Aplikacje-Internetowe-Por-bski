<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Kredytowy</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXf/jnFgYWt/xP8KOOEjJxndL4IK3hENt0BPsTndyVYrь" crossorigin="anonymous">
</head>
<body style="margin: 30px;display: flex; justify-content: center; background: rgb(223, 223, 223);">
    <div class="pure-g">
        <div class="pure-u-1 pure-u-md-1-2">
            <h2>Kalkulator Kredytowy</h2>
            <form class="pure-form pure-form-stacked" action="#" method="post">
                <fieldset>
                    <label for="kwota">Kwota kredytu:</label>
                    <input class="pure-input-1" type="number" name="kwota" id="kwota" required>

                    <label for="oprocentowanie">Oprocentowanie (roczne):</label>
                    <input class="pure-input-1" type="number" name="oprocentowanie" id="oprocentowanie" required>

                    <label for="okres">Okres spłaty (w latach):</label>
                    <input class="pure-input-1" type="number" name="okres" id="okres" required>

                    <button type="submit" class="pure-button pure-button-primary">Oblicz</button>
                </fieldset>
            </form>
        </div>
        <div class="pure-u-1 pure-u-md-1-2">
            {if isset($rata)}
                <p>Miesięczna rata: {$rata}</p>
            {/if}
        </div>
    </div>
</body>
</html>
