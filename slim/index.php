<?php

require("vendor/autoload.php");

$oApp = new \Slim\Slim();

$oApp->get("/", function(){
    echo "Hello World!";
});