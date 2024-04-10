<?php

    $db_name = "movieStar";
    $db_host = "db_movie";
    $db_user = "root";
    $db_pass = "123";

  $conn = new PDO("mysql:dbname=". $db_name .";host=". $db_host, $db_user, $db_pass);

  // Habilitar erros PDO
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);