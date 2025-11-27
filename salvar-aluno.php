<?php
    switch (@$_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $data_nascimento = $_POST["data_nascimento"];
            $endereco = $_POST["endereco"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            
            $sql = "INSERT INTO alunos (nome, data_nascimento, endereco, email, telefone) 
                    VALUES ('{$nome}', '{$data_nascimento}', '{$endereco}', '{$email}', '{$telefone}')";
            
            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Aluno cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=listar-aluno';</script>";
            } else {
                print "<script>alert('Não foi possível cadastrar o aluno!');</script>";
                print "<script>location.href='?page=listar-aluno';</script>";
            }
            break;
            
        case 'editar':
            $nome = $_POST["nome"];
            $data_nascimento = $_POST["data_nascimento"];
            $endereco = $_POST["endereco"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            
            $sql = "UPDATE alunos SET 
                    nome='{$nome}',
                    data_nascimento='{$data_nascimento}',
                    endereco='{$endereco}',
                    email='{$email}',
                    telefone='{$telefone}'
                    WHERE id_aluno=".$_REQUEST["id_aluno"];
            
            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Aluno editado com sucesso!');</script>";
                print "<script>location.href='?page=listar-aluno';</script>";
            } else {
                print "<script>alert('Não foi possível editar o aluno!');</script>";
                print "<script>location.href='?page=listar-aluno';</script>";
            }
            break;
            
        case 'excluir':
            $sql = "DELETE FROM alunos WHERE id_aluno=".$_REQUEST["id_aluno"];
            
            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Aluno excluído com sucesso!');</script>";
                print "<script>location.href='?page=listar-aluno';</script>";
            } else {
                print "<script>alert('Não foi possível excluir o aluno!');</script>";
                print "<script>location.href='?page=listar-aluno';</script>";
            }
            break;
    }
?>