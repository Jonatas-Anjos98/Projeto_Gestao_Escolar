<div class="card">
    <div class="card-header bg-success text-white">
        <h3 class="card-title mb-0"><i class="fas fa-calendar-check me-2"></i>Cadastrar Presença</h3>
    </div>
    <div class="card-body">
        <form action="?page=salvar-presenca" method="POST">
            <input type="hidden" name="acao" value="cadastrar">
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="id_aluno" class="form-label">Aluno:</label>
                    <select name="id_aluno" class="form-control" id="id_aluno" required>
                        <option value="">Selecione um aluno</option>
                        <?php
                            $sql = "SELECT * FROM alunos ORDER BY nome";
                            $res = $conn->query($sql);
                            while($row = $res->fetch_object()){
                                print "<option value='".$row->id_aluno."'>".$row->nome."</option>";
                            }
                        ?>
                    </select>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="id_turma" class="form-label">Turma:</label>
                    <select name="id_turma" class="form-control" id="id_turma" required>
                        <option value="">Selecione uma turma</option>
                        <?php
                            $sql = "SELECT t.*, c.nome_curso 
                                    FROM turmas t 
                                    INNER JOIN cursos c ON t.id_curso = c.id_curso 
                                    ORDER BY c.nome_curso";
                            $res = $conn->query($sql);
                            while($row = $res->fetch_object()){
                                print "<option value='".$row->id_turma."'>".$row->nome_curso." - ".$row->horario."</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="data" class="form-label">Data:</label>
                    <input type="date" name="data" class="form-control" id="data" value="<?php echo date('Y-m-d'); ?>" required>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="status" class="form-label">Status:</label>
                    <select name="status" class="form-control" id="status" required>
                        <option value="Presente">Presente</option>
                        <option value="Falta">Falta</option>
                        <option value="Falta Justificada">Falta Justificada</option>
                        <option value="Atraso">Atraso</option>
                    </select>
                </div>
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="?page=listar-presenca" class="btn btn-secondary me-md-2"><i class="fas fa-arrow-left me-1"></i> Voltar</a>
                <button type="submit" class="btn btn-success"><i class="fas fa-save me-1"></i> Cadastrar</button>
            </div>
        </form>
    </div>
</div>