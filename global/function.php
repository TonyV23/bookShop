<?php
    function isAdminLogin(){
        if (isset($_SESSION["id"]))
            return true;
        else 
            return false;
    }