<?php 

	require_once("config.php");

	//$sql = new Sql();

	//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	//carrega um usuario
	/*$root = new Usuario();
	$root->loadbyid(4);
	echo $root;*/
	

	//carrega lista
	//$lista = Usuario::getList();

	//echo json_encode($lista);


	//carrega lista por usuario buscando pelo login
	//$search = Usuario::search("r");

	//echo json_encode($search);


	//carrega um usuario usando login e senha
	//$usuario = new Usuario();
	//$usuario->login("johnny","987654");
	//echo $usuario;

	//criando um novo usuario
	//$aluno = new Usuario("aluno","@lun0");
	//$aluno->insert();
	//echo $aluno;


	//alterando um usuario
	$usuario = new Usuario();

	$usuario->loadByid(8);

	$usuario->update('professor','2222222');

	echo $usuario;

 ?>