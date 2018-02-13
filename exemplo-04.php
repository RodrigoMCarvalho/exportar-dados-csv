<?php

if (!is_dir("pasta")) {
	mkdir('pasta');
}
foreach (scandir("pasta") as $arquivo ) {   //scanea os arquivos e subpastas e transforma em array
	if (!in_array($arquivo, array(".",".."))) {  //se nao for . ou ..
		unlink("pasta/".$arquivo);
	}
}
