<div class="card">
    <div class="card-header bg-warning text-dark">
        <h3 class="card-title mb-0"><i class="fas fa-star me-2"></i>Cadastrar Nota</h3>
    </div>
    <div class="card-body">
        <form action="?page=salvar-nota" method="POST">
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
            </div>
            
            <div class="mb-3">
                <label for="nota" class="form-label">Nota:</label>
                <input type="number" step="0.01" min="0" max="10" name="nota" class="form-control" id="nota" placeholder="Digite a nota (0-10)" required>
            </div>
            
            <div class="mb-3">
                <label for="feedback" class="form-label">Feedback:</label>
                <textarea name="feedback" class="form-control" id="feedback" rows="3" placeholder="Digite o feedback para o aluno"></textarea>
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="?page=listar-nota" class="btn btn-secondary me-md-2"><i class="fas fa-arrow-left me-1"></i> Voltar</a>
                <button type="submit" class="btn btn-warning"><i class="fas fa-save me-1"></i> Cadastrar</button>
            </div>
        </form>
    </div>
</div>