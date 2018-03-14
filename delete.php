<?php 
    start_session();
    require_once "Firm.php";
    $new_firm = $_SESSION['new_firm'];
    Firm::delete_Register($new_firm);
?>
