<?php

require 'db_config.php';

  $post = $_POST;
     
  $query_tmpl = $mysqli -> prepare("INSERT INTO info SET FirstName = ?, SecondName = ?, Email = ?");
  $query_tmpl -> bind_param("sss", $post['FirstName'], $post['SecondName'], $post['Email']);	 
  $query_tmpl -> execute();

  $result = $query_tmpl;
  $sql = "SELECT * FROM info Order by id desc LIMIT 1"; 
  $result = $mysqli->query($sql);

  $data = $result->fetch_assoc();

echo json_encode($data);