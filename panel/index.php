<?php

require 'class.db.php';

    /*$query="select * from sip_buddies";
    $sockets = db::getInstance()->getResult($query);

    echo "Resultados: <br/>";
    //var_dump($sockets);*/

    //ROUTES
    $module = (isset($_GET['module']) ? $_GET['module'] : null);
    $view   = (isset($_GET['view'])   ? $_GET['view'] : null);
    $id     = (isset($_GET['id'])     ? $_GET['id'] : null);

    //POST ROUTES
    $type   = (isset($_POST['type'])  ? $_POST['type'] : null);
    $ext1   = (isset($_POST['ext1'])   ? $_POST['ext1'] : null);
    $ext2   = (isset($_POST['ext2'])   ? $_POST['ext2'] : null);

    include 'layout.main.php';


 ?>
