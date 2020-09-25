<?php
    
  function connect () {
    $host = "localhost";
    $user = "root";
    $pass = null;
    $db = "examples";
    
    // Create the connection
    $conn = new PDO("mysql:host={$host};dbname={$db}", $user, $pass);

    return $conn;
  }