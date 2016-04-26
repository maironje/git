<?php
	$data = json_decode(file_get_contents("php://input"));
	$serie = mysql_real_escape_string($data->serie);
	$titulo = mysql_real_escape_string($data->titulo);

	
	mysql_connect("localhost","root","");
	mysql_select_db("tabla_contenido");
	mysql_query("INSERT INTO contenido values(null,'$serie','$titulo')");

?>