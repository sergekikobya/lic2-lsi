<!Doctype html>
<html>
    <head>
        <title>Exercice include</title>
    </head>
    <body>
        <table style="width:100%;">
            <tr style="background-color:yellow;">
                <td colspan="2"><?php require("head.php");?></td>
            </tr>
            <tr>
                <td style="background-color:#006600;"><?php include("menu.php");?></td>
                <td><?php include("corps.php");?></td>
            </tr>
        </table>
    </body>
</html>