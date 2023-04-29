<!DOCTYPE html>
<html>
    <head>
    <title>Exercices PHP</title>
    </head>
   <body>
    <?php
    $quartiers = array('Les Volcans', 'Katoyi', 'Katindo', 'Birere', 'Keshyero', 'Lac-vert', 'Ndosho');
    //Boucle Foreach pour afficher les items du tableau
    echo'<ol>';
    foreach($quartiers as $elements){
        echo '<li>'.$elements.'</li>';
    }
    echo'</ol>';
    ?>
   </body>
</html>