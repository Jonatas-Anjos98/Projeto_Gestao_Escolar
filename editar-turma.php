<?php
    $sql = "SELECT * FROM turmas WHERE id_turma=".$_REQUEST["id_turma"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<div class="card">
    <div class="card-header bg-info text-white">
        <h3 class="card-title mb-0"><i class="fas fa-edit me-2"></i>Editar Turma</h3>
    </div>
    <div class="card-body">
        <form action="?page=salvar-turma" method="POST">
            <input type="hidden" name="acao" value="editar">
            <input type="hidden" name="id_turma" value="<?php print $row->id_turma; ?>">
            
            <div class="row">
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
                
                <div class="col-md-6 mb-3">
                    <label for="id_professor" class="form-label">Professor:</label>
                    <select name="id_professor" class="form-control" id="id_professor" required>
                        <option value="">Selecione um professor</option>
                        <?php
                            $sql_prof = "SELECT * FROM professores ORDER BY nome";
                            $res_prof = $conn->query($sql_prof);
                            while($row_prof = $res_prof->fetch_object()){
                                $selected = ($row->id_professor == $row_prof->id_professor) ? "selected" : "";
                                print "<option value='".$row_prof->id_professor."' $selected>".$row_prof->nome."</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="horario" class="form-label">Horário:</label>
                    <input type="text" name="horario" class="form-control" id="horario" value="<?php print $row->horario; ?>">
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="sala" class="form-label">Sala:</label>
                    <input type="text" name="sala" class="form-control" id="sala" value="<?php print $row->sala; ?>">
                </div>
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="?page=listar-turma" class="btn btn-secondary me-md-2"><i class="fas fa-arrow-left me-1"></i> Voltar</a>
                <button type="submit" class="btn btn-info"><i class="fas fa-save me-1"></i> Salvar Alterações</button>
            </div>
        </form>
    </div>
</div>