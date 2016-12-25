<?php

  require 'db_config.php';

  $id  = $_POST["id"];
  $post = $_POST;

  $query_tmpl = $mysqli -> prepare("UPDATE info SET FirstName = ?, SecondName = ?, Email = ? WHERE id = ?");
  $query_tmpl -> bind_param("sssi", $post['FirstName'], $post['SecondName'], $post['Email'], $id);
  $query_tmpl -> execute();

  $result = $query_tmpl;

  $query_tmpl = $mysqli -> prepare("SELECT * FROM info WHERE id = ?");
  $query_tmpl -> bind_param("i", $id);
  
  $query_tmpl -> execute();
  $result = $query_tmpl;

  $data = $query_tmpl -> fetch();

 echo json_encode($data);

