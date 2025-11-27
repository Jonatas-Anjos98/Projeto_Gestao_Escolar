<?php
    $sql = "SELECT * FROM notas WHERE id_nota=".$_REQUEST["id_nota"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<div class="card">
    <div class="card-header bg-warning text-dark">
        <h3 class="card-title mb-0"><i class="fas fa-edit me-2"></i>Editar Nota</h3>
    </div>
    <div class="card-body">
        <form action="?page=salvar-nota" method="POST">
            <input type="hidden" name="acao" value="editar">
            <input type="hidden" name="id_nota" value="<?php print $row->id_nota; ?>">
            
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
            
            <div class="mb-3">
                <label for="nota" class="form-label">Nota:</label>
                <input type="number" step="0.01" min="0" max="10" name="nota" class="form-control" id="nota" value="<?php print $row->nota; ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="feedback" class="form-label">Feedback:</label>
                <textarea name="feedback" class="form-control" id="feedback" rows="3"><?php print $row->feedback; ?></textarea>
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="?page=listar-nota" class="btn btn-secondary me-md-2"><i class="fas fa-arrow-left me-1"></i> Voltar</a>
                <button type="submit" class="btn btn-warning"><i class="fas fa-save me-1"></i> Salvar Alterações</button>
            </div>
        </form>
    </div>
</div>