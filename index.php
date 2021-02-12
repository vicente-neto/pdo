<?php
include "vendor/autoload.php";
use Vicente\Pdo\Scripts\Select;

if(isset($_REQUEST["script"])&&$_REQUEST["script"]=="select"){
    $script = new Select();
    $script->run();
}
if(isset($_REQUEST["script"])&&$_REQUEST["script"]=="insert"){
    $script = new Select();
    $script->run();
}
