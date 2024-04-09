<?php

    $db_name = "php_banco";
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "sEnh@190$";

  $conn = new PDO("mysql:dbname=". $db_name .";host=". $db_host, $db_user, $db_pass);

  // Habilitar erros PDO
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);