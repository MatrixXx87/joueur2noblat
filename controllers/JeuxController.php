<?php

function pagejeuxAction () {
    session_start();
    
    require ('views/listejeux/jeux.php');
}

