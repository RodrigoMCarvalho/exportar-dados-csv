<?php

$file = fopen("log.txt", "w+");
fwrite($file, "Teste criando arquivos.")."\r\n";
fclose($file);
echo "Arquivo criado com sucesso!";

