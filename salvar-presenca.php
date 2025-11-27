<?php
    switch (@$_REQUEST["acao"]) {
        case 'cadastrar':
            $id_aluno = $_POST["id_aluno"];
            $id_turma = $_POST["id_turma"];
            $data = $_POST["data"];
            $status = $_POST["status"];
            
            $sql = "INSERT INTO presencas (id_aluno, id_turma, data, status) 
                    VALUES ('{$id_aluno}', '{$id_turma}', '{$data}', '{$status}')";
            
            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Presença cadastrada com sucesso!');</script>";
                print "<script>location.href='?page=listar-presenca';</script>";
            } else {
                print "<script>alert('Não foi possível cadastrar a presença!');</script>";
                print "<script>location.href='?page=listar-presenca';</script>";
            }
            break;
            
        case 'editar':
            $id_aluno = $_POST["id_aluno"];
            $id_turma = $_POST["id_turma"];
            $data = $_POST["data"];
            $status = $_POST["status"];
            
            $sql = "UPDATE presencas SET 
                    id_aluno='{$id_aluno}',
                    id_turma='{$id_turma}',
                    data='{$data}',
                    status='{$status}'
                    WHERE id_presenca=".$_REQUEST["id_presenca"];
            
            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Presença editada com sucesso!');</script>";
                print "<script>location.href='?page=listar-presenca';</script>";
            } else {
                print "<script>alert('Não foi possível editar a presença!');</script>";
                print "<script>location.href='?page=listar-presenca';</script>";
            }
            break;
            
        case 'excluir':
            $sql = "DELETE FROM presencas WHERE id_presenca=".$_REQUEST["id_presenca"];
            
            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Presença excluída com sucesso!');</script>";
                print "<script>location.href='?page=listar-presenca';</script>";
            } else {
                print "<script>alert('Não foi possível excluir a presença!');</script>";
                print "<script>location.href='?page=listar-presenca';</script>";
            }
            break;
    }
?>