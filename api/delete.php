<?php

 require 'db_config.php';

 $id  = $_POST["id"];

 $query_tmpl = $mysqli -> prepare("delete from info where id=?");
 $query_tmpl -> bind_param("i", $id);
 $query_tmpl -> execute();
 
 $result =($query_tmpl);

 echo json_encode([$id]);
