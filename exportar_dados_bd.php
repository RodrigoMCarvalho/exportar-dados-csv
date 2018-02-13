<?php

require_once ("config.php");

$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

$headers = array();
foreach ($usuarios[0] as $key => $value) {
	array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");
fwrite($file, implode(",", $headers)."\r\n"); //adiciona as vírgulas

foreach ($usuarios as $linhas) {
	$data=array();
	foreach ($linhas as $key => $campos) {
		array_push($data, $campos);
	}                                                //Fim Foreach de Colunas
	fwrite($file, implode(",", $data)."\r\n");
}                                                    //Fim Foreach de Linhas

fclose($file);