<?php

  require_once("temple/header.php");

  if($userDao) {
    $userDao->destroyToken();
  }