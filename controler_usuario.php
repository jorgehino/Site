<?php
    include('model/model_usuario.php');//Inclui o arquivo Model_usuario.php
    
    $oquefazer= new ModelUsuario(); //Estancia a Classe

  if(isset($_GET['acao']) or isset($POST['acao'])){ //Verifico se a variavel acão foi criada
    $acao = $_REQUEST['acao']; //Recebe a ação que vem do index/listar
  }else{
    $acao='';
  }

  switch ($acao){ //monto o meu case
    case "listarUsuarios": //Lista os dados da Agencia
        $resultado=$oquefazer->getDados(); //chamo o metodo GetDados do meu model   
        //var_dump($resultado);
        include("view/listar_usuarios.php");//Mostrar os dados em nossa view
    break;
     default:
          echo "Nenhuma opção foi selecionada";
     break;
  }
?>