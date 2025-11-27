<?php
    switch (@$_REQUEST["acao"]) {
        case 'cadastrar':
            $id_aluno = $_POST["id_aluno"];
            $id_curso = $_POST["id_curso"];
            $nota = $_POST["nota"];
            $feedback = $_POST["feedback"];
            
            $sql = "INSERT INTO notas (id_aluno, id_curso, nota, feedback) 
                    VALUES ('{$id_aluno}', '{$id_curso}', '{$nota}', '{$feedback}')";
            
            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Nota cadastrada com sucesso!');</script>";
                print "<script>location.href='?page=listar-nota';</script>";
            } else {
                print "<script>alert('Não foi possível cadastrar a nota!');</script>";
                print "<script>location.href='?page=listar-nota';</script>";
            }
            break;
            
        case 'editar':
            $id_aluno = $_POST["id_aluno"];
            $id_curso = $_POST["id_curso"];
            $nota = $_POST["nota"];
            $feedback = $_POST["feedback"];
            
            $sql = "UPDATE notas SET 
                    id_aluno='{$id_aluno}',
                    id_curso='{$id_curso}',
                    nota='{$nota}',
                    feedback='{$feedback}'
                    WHERE id_nota=".$_REQUEST["id_nota"];
            
            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Nota editada com sucesso!');</script>";
                print "<script>location.href='?page=listar-nota';</script>";
            } else {
                print "<script>alert('Não foi possível editar a nota!');</script>";
                print "<script>location.href='?page=listar-nota';</script>";
            }
            break;
            
        case 'excluir':
            $sql = "DELETE FROM notas WHERE id_nota=".$_REQUEST["id_nota"];
            
            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Nota excluída com sucesso!');</script>";
                print "<script>location.href='?page=listar-nota';</script>";
            } else {
                print "<script>alert('Não foi possível excluir a nota!');</script>";
                print "<script>location.href='?page=listar-nota';</script>";
            }
            break;
    }
?>