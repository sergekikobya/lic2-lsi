<!DOCTYPE html>
<html>
    <head>
        <title>Exercices Fonction PHP</title>
</head>
<body>
<form method="post">
<Label>entrer un nombre:</label>
<input type="number"name="n" id="n" min="0"max="10">
<input type="submit"name="go" id="go"value="Go">
</form>
<?php
function chiffrelettre($c){
    switch($c){
        case 0: return'zero';
        case 1: return'un';
        case 2: return'deux';
        case 3: return'trois';
        case 4: return'quatre';
        case 5: return'cinq';
        case 6: return'six';
        case 7: return'sept';
        case 8: return'huit';
        case 9: return'neuf';
        case 10: return'dix';
        default:return'erreur';
    }
}
if(isset($_POST['go'])){
    $n= $_POST['n'];
    echo chiffrelettre($n);
}

