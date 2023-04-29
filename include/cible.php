<?php
if(isset($_GET['lang']) AND ($_GET['lang']=='fr')){
    echo'<h1>Bienvenue</h1>';
}else{
    echo'<h1>Welcome</h1>';
}

?>