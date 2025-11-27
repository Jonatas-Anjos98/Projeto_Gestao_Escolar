<div class="card">
    <div class="card-header bg-info text-white">
        <h3 class="card-title mb-0"><i class="fas fa-users me-2"></i>Cadastrar Turma</h3>
    </div>
    <div class="card-body">
        <form action="?page=salvar-turma" method="POST">
            <input type="hidden" name="acao" value="cadastrar">
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="id_curso" class="form-label">Curso:</label>
                    <select name="id_curso" class="form-control" id="id_curso" required>
                        <option value="">Selecione um curso</option>
                        <?php
                            $sql = "SELECT * FROM cursos ORDER BY nome_curso";
                            $res = $conn->query($sql);
                            while($row = $res->fetch_object()){
                                print "<option value='".$row->id_curso."'>".$row->nome_curso."</option>";
                            }
                        ?>
                    </select>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="id_professor" class="form-label">Professor:</label>
                    <select name="id_professor" class="form-control" id="id_professor" required>
                        <option value="">Selecione um professor</option>
                        <?php
                            $sql = "SELECT * FROM professores ORDER BY nome";
                            $res = $conn->query($sql);
                            while($row = $res->fetch_object()){
                                print "<option value='".$row->id_professor."'>".$row->nome."</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="horario" class="form-label">Horário:</label>
                    <input type="text" name="horario" class="form-control" id="horario" placeholder="Ex: Segunda 14:00-16:00">
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="sala" class="form-label">Sala:</label>
                    <input type="text" name="sala" class="form-control" id="sala" placeholder="Número da sala">
                </div>
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="?page=listar-turma" class="btn btn-secondary me-md-2"><i class="fas fa-arrow-left me-1"></i> Voltar</a>
                <button type="submit" class="btn btn-info"><i class="fas fa-save me-1"></i> Cadastrar</button>
            </div>
        </form>
    </div>
</div>