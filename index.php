<?php
include "vendor/autoload.php";
use Vicente\Pdo\Scripts\Select;

if(isset($_REQUEST["script"])&&$_REQUEST["script"]=="select"){
    $script = new Select();
    $script->run();
}else{
    echo "not script!";
}
