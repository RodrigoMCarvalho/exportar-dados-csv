<?php

$filename = "usuarios.csv";

if (file_exists($filename)) {
	$file = fopen($filename, "r");  
	$headers = explode(",", fgets($file));		//FGETS pega somente a primeira linha do arquivo.
	
	$data = array();

	while ($row = fgets($file)) {   //enquanto tiver linhas no arquivo, sera gravada na $row
		//var_dump($row);
		$linha = array();
		$rowData = explode(",", $row);
		for ($i=0; $i < count($headers); $i++) {   //verificar as colunas
			$linha[$headers[$i]] = $rowData[$i];
		}

		array_push($data, $linha);
	}

	fclose($file);

	echo json_encode($data);
}