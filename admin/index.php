<?php
    include "../database/connection.php";
    include "../partials/header.php";
    
    if (!isAdminLogin()){
        header("location:login.php");        
    }    
?>