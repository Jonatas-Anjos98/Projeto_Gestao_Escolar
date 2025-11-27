<?php
    switch (@$_REQUEST["acao"]) {
        case 'cadastrar':
            $id_aluno = $_POST["id_aluno"];
            $id_curso = $_POST["id_curso"];
            $data_matricula = $_POST["data_matricula"];
            $status = $_POST["status"];
            
            $sql = "INSERT INTO matriculas (id_aluno, id_curso, data_matricula, status) 
                    VALUES ('{$id_aluno}', '{$id_curso}', '{$data_matricula}', '{$status}')";
            
            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Matrícula cadastrada com sucesso!');</script>";
                print "<script>location.href='?page=listar-matricula';</script>";
            } else {
                print "<script>alert('Não foi possível cadastrar a matrícula!');</script>";
                print "<script>location.href='?page=listar-matricula';</script>";
            }
            break;
            
        case 'editar':
            $id_aluno = $_POST["id_aluno"];
            $id_curso = $_POST["id_curso"];
            $data_matricula = $_POST["data_matricula"];
            $status = $_POST["status"];
            
            $sql = "UPDATE matriculas SET 
                    id_aluno='{$id_aluno}',
                    id_curso='{$id_curso}',
                    data_matricula='{$data_matricula}',
                    status='{$status}'
                    WHERE id_matricula=".$_REQUEST["id_matricula"];
            
            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Matrícula editada com sucesso!');</script>";
                print "<script>location.href='?page=listar-matricula';</script>";
            } else {
                print "<script>alert('Não foi possível editar a matrícula!');</script>";
                print "<script>location.href='?page=listar-matricula';</script>";
            }
            break;
            
        case 'excluir':
            $sql = "DELETE FROM matriculas WHERE id_matricula=".$_REQUEST["id_matricula"];
            
            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Matrícula excluída com sucesso!');</script>";
                print "<script>location.href='?page=listar-matricula';</script>";
            } else {
                print "<script>alert('Não foi possível excluir a matrícula!');</script>";
                print "<script>location.href='?page=listar-matricula';</script>";
            }
            break;
    }
?>