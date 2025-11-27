<?php
    switch (@$_REQUEST["acao"]) {
        case 'cadastrar':
            $nome_curso = $_POST["nome_curso"];
            $descricao = $_POST["descricao"];
            $duracao = $_POST["duracao"];
            $creditos = $_POST["creditos"];
            
            $sql = "INSERT INTO cursos (nome_curso, descricao, duracao, creditos) 
                    VALUES ('{$nome_curso}', '{$descricao}', '{$duracao}', '{$creditos}')";
            
            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Curso cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=listar-curso';</script>";
            } else {
                print "<script>alert('Não foi possível cadastrar o curso!');</script>";
                print "<script>location.href='?page=listar-curso';</script>";
            }
            break;
            
        case 'editar':
            $nome_curso = $_POST["nome_curso"];
            $descricao = $_POST["descricao"];
            $duracao = $_POST["duracao"];
            $creditos = $_POST["creditos"];
            
            $sql = "UPDATE cursos SET 
                    nome_curso='{$nome_curso}',
                    descricao='{$descricao}',
                    duracao='{$duracao}',
                    creditos='{$creditos}'
                    WHERE id_curso=".$_REQUEST["id_curso"];
            
            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Curso editado com sucesso!');</script>";
                print "<script>location.href='?page=listar-curso';</script>";
            } else {
                print "<script>alert('Não foi possível editar o curso!');</script>";
                print "<script>location.href='?page=listar-curso';</script>";
            }
            break;
            
        case 'excluir':
            $sql = "DELETE FROM cursos WHERE id_curso=".$_REQUEST["id_curso"];
            
            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Curso excluído com sucesso!');</script>";
                print "<script>location.href='?page=listar-curso';</script>";
            } else {
                print "<script>alert('Não foi possível excluir o curso!');</script>";
                print "<script>location.href='?page=listar-curso';</script>";
            }
            break;
    }
?>