<?php
?>
<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="mystyle.css">
    <title>Document</title>
</head>
<body>
    <h2>PHP FORM validation with main controllers</h2>
    <form method="post" action="display.php">
        <!-- input normali -->
        <label for="name"> Enter your name:</label>
        <br>
        <input type="text" id="name" name ="name" value="your name">
        <br>
        <br>
        <label for="pass"> Enter your password:</label>
        <br>
        <input id="pass" name="password" type="password">
        <br>
        <br>
        <!-- text area per i commenti-->
        <label for="comment"> Leave your comment:</label>
        <br>
        <textarea id="comment" name="comment" type="comment" rows="5" cols="40"> </textarea>
        <br>
        <br>
        <!-- selezione con radio-->
        <label for="gender"> choose your gender:</label>
        <br>
        <input id="gender" name="gender" type="radio" value="male"> Male
        <br>
        <input id="gender" name="gender" type="radio" value="female"> Female
        <br>
        <input id="gender" name="gender" type="radio" value="train">  Train
        <br>
        <br>
        <!--checkbox -->
        <label for="top"> choose your topping:</label>
        <br>
        <input id="top" name="top[]" type="checkbox" value="pomodori"> Tomatoes
        <br>
        <input id="top" name="top[]" type="checkbox" value="olive"> Olives
        <br>
        <input id="top" name="top[]" type="checkbox" value="monkeys"> Monkeys
        <br>
        <br>
        <!-- DropDown List-->
        <label for="car"> choose a car:</label>
        <select id="car" name="car">
            <option value="volvo"> Volvo</option>
            <option value="Fiat"> Fiat Panda</option>
            <option value="mazda"> Mazda</option>
            <option value="Bugatti"> Bugatti Veyron</option>
        </select>
        <br>
        <br>
        <!-- listbox con singola selezione -->
        <label for="carList" > choose a car:</label>
        <select id="carList" name="carList" size="4">
            <option value="volvo"> Volvo</option>
            <option value="Fiat"> Fiat Panda</option>
            <option value="mazda"> Mazda</option>
            <option value="Bugatti"> Bugatti Veyron</option>
        </select>
        <br>
        <br>
        <!-- listbox con selezione multipla -->
        <label for="cars"> choose a car:</label>
        <select id="cars" name="cars[]" size="4" multiple>
            <option value="volvo"> Volvo</option>
            <option value="Fiat"> Fiat Panda</option>
            <option value="mazda"> Mazda</option>
            <option value="Bugatti"> Bugatti Veyron</option>
        </select>
        <br>
        <br>
        <input type="submit" value="SUBMIT">

    </form>
</body>

</html>
