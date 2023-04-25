<!DOCTYPE html>
<html>
    <head>
        <title>Exercices PHP</title>
</head>
</body>
<?php 
/*
//Exe-1: echo
echo"<font color='blue'><h1>
<u>WELCOME TO LIC2-LSI</h1></u></font>";?>
*/

/*
//Exe-2: variables
$a = 30;
$b = 121;
$c = $a+$b;
echo $a.' + '.$b.' = '.$c;
*/

/*
//Exe-3: utilisation constante
$usd = 350;
define("TAUX",2300);
$fc = $usd * TAUX;
echo 'Si le Taux est de '.TAUX.', '.$usd.' $ = '.$fc.' FC';
*/

//Exe4: Conditions
/*
$pourc = 58;
if($pourc<50){
    echo'Il est ajourné';
    }elseif($pourc>50 AND $pourc<70){
        echo'Il a satisfait';
    }elseif($pourc>70 AND $pourc<80){
        echo'Il a distingué';
    }elseif($pourc>=80 AND $pourc<100){
        echo'Grande distinction';
    }else{
        echo'Erreur';
    }
*/

/*
//Exe5: Switch
$sexe = 'M';
switch($sexe){
    case'M':
        echo'Vous etes un Homme';
    break;
    case'F':
        echo'Vous etes une Femme';
    break;
    default:
    echo'Erreur';
}
*/
/*
//Exe6: Boucle
$nom = 'SADIKI OMAR';
//a) avec WHILE
$i=0;
echo'<ol>';
while($i<10){
    echo '<li>'.$nom.'</li>';
    $i++;
}
echo'</ol>';
//b) avec FOR
for($a=0;$a<10;$a++){
    echo $nom.'<br/>';
}
*/

//Exe-7: Formulaire
?>

<?php
if(isset($_POST['tester'])){
    $nom = $_POST['nom'];
    echo'Bienvenue '.$nom;
}
?>
<form method="POST" action="">
    <input type="text" name="nom" id="nom"
    placeholder="Entrer votre Nom">
    <input type="submit" name="tester" id="tester"
    value="Tester">
</form>


</body>
</html>