<?php
    require_once "src/Firm.php";
    $fantasy_name = $_POST['fantasy_name'];
    $social_reason = $_POST['social_reason'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $cnpj = $_POST['cnpj'];
    $file = fopen('hist_firm.txt','r');
    $id = 0;
    while(! feof($file)){ 
        fgets($file);
        $id++;                
    }
    echo $id;
    $new_firm = array("$id","$fantasy_name","$social_reason","$email","$phone","$cnpj");
    Firm::new_Register($new_firm);
    echo "<h1>Empresa cadastrada com sucesso !</h1>";
?>