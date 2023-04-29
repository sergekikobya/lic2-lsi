<?php


if(isset($_POST["tester"])){
    $nomCP=$_POST["nomCP"];
if($nomCP=="Benjamin_black"){
    echo '<font color="green"> Bonne reponse</font>';
    
}
else {
    echo '<font color="red"> bad answer</font>';
}

}
?>