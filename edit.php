<?php
    session_start();
    require_once "src/Firm.php";
    $new_fantasy_name = $_POST['new_fantasy_name'];
    $new_social_reason = $_POST['new_social_reason'];
    $new_email = $_POST['new_email'];
    $new_phone = $_POST['new_phone'];
    $new_cnpj = $_POST['new_cnpj'];
    $id = $_SESSION['id'];
    $new_firm = $_SESSION['new_firm'];
    $updated_new_firm = array("$id","$new_fantasy_name","$new_social_reason","$new_email","$new_phone","$new_cnpj");
    Firm::edit_Register($new_firm,$updated_new_firm);
?>
