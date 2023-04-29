<!DOCTYPE html>
<html>
    <head>
        <title>Test password</title>
    </head>
    <body>
<?php
if(isset($_POST['tester'])){
    if(strlen($_POST['pwd'])>=5){
        echo'<span style="color:green">Bon Mot de passe</span><br/>
        '.md5($_POST['pwd']).'';
    }else{
        echo'<span style="color:red">Mot de passe faible</span>';
    }
}
?>
<?php
echo date("d/m/Y h:m:s");
?>
<form method="post">
<input type="password" name="pwd" id="pwd">
<input type="submit" name="tester" id="tester" value="Tester">
</form>
</body>
</html>