<!DOCTYPE html>
<html>
    <head>
        <title>Exercices Fonction PHP</title>
</head>
<body>
    <?php
    /*
    function add2nbre($a,$b){
        return $a+$b;
    }
    $n1=50;$n2=2020;
    echo $n1.' + '.$n2.' = '.add2nbre($n1,$n2);
    */
?>

<?php
function plusGrand($x,$y){
    if($x>$y){
        return $x;
    }else{
        return $y;
    }
}

if(isset($_POST['tester'])){
    $n1=$_POST['n1']; $n2=$_POST['n2'];
    if($n1==$n2){
        echo'Les 2 nombres sont egaux!';
    }else{
        echo'Le plus grand nombre entre '.$n1.' et '.$n2.' 
        est '.plusGrand($n1,$n2);
    }   
}
?>

<form method="Post">
<table>
    <tr>
        <td>1<sup>er</sup> Nombre</td>
        <td>:</td>
        <td><input type="text" name="n1" id="n1"></td>
    </tr>
    <tr>
        <td>2<sup>em</sup> Nombre</td>
        <td>:</td>
        <td><input type="text" name="n2" id="n2"></td>
    </tr>
    <tr><td colspan="3"><input type="submit" 
    value="Tester plus grand" name="tester" id="tester">
</table>
</form>
</body>
</html>