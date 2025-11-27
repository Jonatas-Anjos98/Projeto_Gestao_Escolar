<?php
    $sql = "SELECT * FROM matriculas WHERE id_matricula=".$_REQUEST["id_matricula"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<div class="card">
    <div class="card-header bg-secondary text-white">
        <h3 class="card-title mb-0"><i class="fas fa-edit me-2"></i>Editar Matrícula</h3>
    </div>
    <div class="card-body">
        <form action="?page=salvar-matricula" method="POST">
            <input type="hidden" name="acao" value="editar">
            <input type="hidden" name="id_matricula" value="<?php print $row->id_matricula; ?>">
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="id_aluno" class="form-label">Aluno:</label>
                    <select name="id_aluno" class="form-control" id="id_aluno" required>
                        <option value="">Selecione um aluno</option>
                        <?php
                            $sql_aluno = "SELECT * FROM alunos ORDER BY nome";
                            $res_aluno = $conn->query($sql_aluno);
                            while($row_aluno = $res_aluno->fetch_object()){
                                $selected = ($row->id_aluno == $row_aluno->id_aluno) ? "selected" : "";
                                print "<option value='".$row_aluno->id_aluno."' $selected>".$row_aluno->nome."</option>";
                            }
                        ?>
                    </select>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="id_curso" class="form-label">Curso:</label>
                    <select name="id_curso" class="form-control" id="id_curso" required>
                        <option value="">Selecione um curso</option>
                        <?php
                            $sql_curso = "SELECT * FROM cursos ORDER BY nome_curso";
                            $res_curso = $conn->query($sql_curso);
                            while($row_curso = $res_curso->fetch_object()){
                                $selected = ($row->id_curso == $row_curso->id_curso) ? "selected" : "";
                                print "<option value='".$row_curso->id_curso."' $selected>".$row_curso->nome_curso."</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="data_matricula" class="form-label">Data da Matrícula:</label>
                    <input type="date" name="data_matricula" class="form-control" id="data_matricula" value="<?php print $row->data_matricula; ?>">
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="status" class="form-label">Status:</label>
                    <select name="status" class="form-control" id="status">
                        <option value="Ativa" <?php echo ($row->status == 'Ativa') ? 'selected' : ''; ?>>Ativa</option>
                        <option value="Inativa" <?php echo ($row->status == 'Inativa') ? 'selected' : ''; ?>>Inativa</option>
                        <option value="Trancada" <?php echo ($row->status == 'Trancada') ? 'selected' : ''; ?>>Trancada</option>
                        <option value="Concluída" <?php echo ($row->status == 'Concluída') ? 'selected' : ''; ?>>Concluída</option>
                    </select>
                </div>
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="?page=listar-matricula" class="btn btn-secondary me-md-2"><i class="fas fa-arrow-left me-1"></i> Voltar</a>
                <button type="submit" class="btn btn-dark"><i class="fas fa-save me-1"></i> Salvar Alterações</button>
            </div>
        </form>
    </div>
</div>