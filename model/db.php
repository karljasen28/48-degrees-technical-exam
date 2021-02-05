<?php
    session_start();

    // database connection
    function db() {
        return new PDO("mysql:host=localhost;dbname=examination","root","");
    }
?>