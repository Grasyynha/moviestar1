<?php

  require_once("globals.php");
  require_once("db.php");
  require_once("models/Movie.php");
  require_once("models/Message.php");
  require_once("dao/UserDAO.php");
  require_once("dao/MovieDAO.php");

  $message = new Message($conn, $BASE_URL);
  $userDao = new UserDAO($conn, $BASE_URL);
  $movieDao = new MovieDAO($conn, $BASE_URL);


  // Recebendo o tipo do formulario
  $type = filter_input(INPUT_POST, "type");

  // Resgata dados do usuario
  $userData = $userDao->verifyToken();

  if($type === "create") {

  }   