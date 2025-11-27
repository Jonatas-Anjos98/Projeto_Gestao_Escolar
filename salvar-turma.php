<?php
    switch (@$_REQUEST["acao"]) {
        case 'cadastrar':
            $id_curso = $_POST["id_curso"];
            $id_professor = $_POST["id_professor"];
            $horario = $_POST["horario"];
            $sala = $_POST["sala"];
            
            $sql = "INSERT INTO turmas (id_curso, id_professor, horario, sala) 
                    VALUES ('{$id_curso}', '{$id_professor}', '{$horario}', '{$sala}')";
            
            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Turma cadastrada com sucesso!');</script>";
                print "<script>location.href='?page=listar-turma';</script>";
            } else {
                print "<script>alert('Não foi possível cadastrar a turma!');</script>";
                print "<script>location.href='?page=listar-turma';</script>";
            }
            break;
            
        case 'editar':
            $id_curso = $_POST["id_curso"];
            $id_professor = $_POST["id_professor"];
            $horario = $_POST["horario"];
            $sala = $_POST["sala"];
            
            $sql = "UPDATE turmas SET 
                    id_curso='{$id_curso}',
                    id_professor='{$id_professor}',
                    horario='{$horario}',
                    sala='{$sala}'
                    WHERE id_turma=".$_REQUEST["id_turma"];
            
            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Turma editada com sucesso!');</script>";
                print "<script>location.href='?page=listar-turma';</script>";
            } else {
                print "<script>alert('Não foi possível editar a turma!');</script>";
                print "<script>location.href='?page=listar-turma';</script>";
            }
            break;
            
        case 'excluir':
            $sql = "DELETE FROM turmas WHERE id_turma=".$_REQUEST["id_turma"];
            
            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Turma excluída com sucesso!');</script>";
                print "<script>location.href='?page=listar-turma';</script>";
            } else {
                print "<script>alert('Não foi possível excluir a turma!');</script>";
                print "<script>location.href='?page=listar-turma';</script>";
            }
            break;
    }
?>