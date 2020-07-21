<?php
session_start();

require_once('../bd/connexionDB.php');

if (isset($_POST ['user'])){
    $user= (String) trim($_POST['user']);

    $req = $req->fetchALL();

    foreach($req as $r){
        ?>
        <div style="margin-top:20px 0 ; border-bottom: 2px solid #ccc">
            <?= $r ['nom'] . " " . $r["description"] ?>
        </div>
    <?php    
    }
}
?>