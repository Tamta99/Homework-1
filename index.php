<?php
require_once 'Request.php';
require_once 'Response.php';


    $mytext = "Homework 1" ;

        $getResponse = getResponse($mytext, 200, 'application/json');

        echo $getResponse . "\n" . "\n";
?>