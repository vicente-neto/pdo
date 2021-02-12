<?php
include "vendor/autoload.php";
use Vicente\Pdo\Scripts\Insert;

if(isset($_REQUEST["name"])){
    $script = new Insert();
    $script->run($_REQUEST["name"]);
}
