<?php
    switch (@$_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $especializacao = $_POST["especializacao"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            
            $sql = "INSERT INTO professores (nome, especializacao, email, telefone) 
                    VALUES ('{$nome}', '{$especializacao}', '{$email}', '{$telefone}')";
            
            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Professor cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=listar-professor';</script>";
            } else {
                print "<script>alert('Não foi possível cadastrar o professor!');</script>";
                print "<script>location.href='?page=listar-professor';</script>";
            }
            break;
            
        case 'editar':
            $nome = $_POST["nome"];
            $especializacao = $_POST["especializacao"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            
            $sql = "UPDATE professores SET 
                    nome='{$nome}',
                    especializacao='{$especializacao}',
                    email='{$email}',
                    telefone='{$telefone}'
                    WHERE id_professor=".$_REQUEST["id_professor"];
            
            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Professor editado com sucesso!');</script>";
                print "<script>location.href='?page=listar-professor';</script>";
            } else {
                print "<script>alert('Não foi possível editar o professor!');</script>";
                print "<script>location.href='?page=listar-professor';</script>";
            }
            break;
            
        case 'excluir':
            $sql = "DELETE FROM professores WHERE id_professor=".$_REQUEST["id_professor"];
            
            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Professor excluído com sucesso!');</script>";
                print "<script>location.href='?page=listar-professor';</script>";
            } else {
                print "<script>alert('Não foi possível excluir o professor!');</script>";
                print "<script>location.href='?page=listar-professor';</script>";
            }
            break;
    }
?>