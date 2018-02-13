<?php

$file = fopen("texte.txt", "w+");

fclose($file);

unlink("texte.txt"); //exclui o arquivo