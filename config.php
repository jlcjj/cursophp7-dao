<?php 

	spl_autoload_register(function($class_name){
		
		//$dirClass = "class";
		//$filename= $dirClass. DIRECTORY_SEPARATOR . $nomeClasse.".php";
		$filename='Class'. DIRECTORY_SEPARATOR .$class_name.".php";
		//if (file_exists($filename)===true) {
		if (file_exists(($filename))) {
			require_once($filename);
		
		}

	});

 ?>