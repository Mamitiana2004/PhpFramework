<?php

    $configPath="config/conig.php";
    if(file_exists($configPath)){
        header("location:core");
    }
    else{
        header("location:core/controller/errors/FileNotFound.php?file=config.php");
    }


?>