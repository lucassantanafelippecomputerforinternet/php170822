<?php 

    session_start();
    include_once('conexao.php');


    $data = $_POST;

    //modificações no banco
    if(!empty($data)){
        //print_r($data); exit;
        //criar contato
        if($data["type"]=="create"){
            //echo "criar dado...";
            $nome = $data["nome"];
            $tarefa = $data["tarefa"];
            $obs = $data["obs"];

            $query = "INSERT INTO lista (nome, tarefa, obs)
            VALUES (:nome, :tarefa, :obs)";
            $resultado = $conexao->prepare($query);
            $resultado->bindParam(":nome",$nome);
            $resultado->bindParam(":tarefa",$tarefa);
            $resultado->bindParam(":obs",$obs);
            try{
                $resultado->execute();
                $_SESSION["msg"] = "Tarefa criada com sucesso";
            } catch(PDOException $th){
                echo $th;
            }
        }
        // echo "chegou aqui";
        header('location:../index.php');

    }else {
        $id;

        if(!empty($_GET)){
            $id = $_GET["id"];
        }
        ///seleção de dados
        //retorna um registro
        if(!empty($id)){
            $query = "SELECT * FROM lista WHERE id = :id";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(":id",$id);
            $stmt->execute();
            $tarefas = $stmt->fetch();
        } else {
            //retorna todos os registros
            $query = "SELECT * FROM lista";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            $tarefas = [];
            $tarefas = $stmt->fetchAll();
        }
    }

    $conexao = null;




?>