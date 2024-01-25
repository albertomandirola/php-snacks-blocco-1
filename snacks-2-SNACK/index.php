<?php
// Verifing that form's part have been compiled 
if(isset($_GET['name']) && isset($_GET['mail'])){
    // Create variable whose value is the name insert by the user
    $name = $_GET['name'];
    // Create variable whose value is the mail insert by the user
    $mail = $_GET['mail'];
    // Create variable whose value is the age insert by the user
    $age = $_GET['age'];

// Verifing that form's part have been compiled correctly with a series of control. 
    if(strlen($name) > 3 && filter_var($mail, FILTER_VALIDATE_EMAIL) && is_numeric($age) ){
        echo "Accesso riuscito";
    } 
    else {
        echo "Accesso negato";
    }
}
else {
    echo "Inserisci i tuoi dati:";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="GET">
        <label for="name">Inserisci il tuo nome:</label>
        <input type="text" name="name" id="name" placeholder="name">
        <label for="mail">Inserisci il tuo indirizzo email:</label>
        <input type="text" name="mail" id="mail" placeholder="mail">
        <label for="age">Inserisci la tua età:</label>
        <input type="text" name="age" id="age" placeholder="age">
        <button type="submit">Invia </button>

    </form>
</body>
</html>