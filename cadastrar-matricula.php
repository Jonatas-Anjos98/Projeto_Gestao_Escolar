<div class="card">
    <div class="card-header bg-secondary text-white">
        <h3 class="card-title mb-0"><i class="fas fa-clipboard-list me-2"></i>Cadastrar Matrícula</h3>
    </div>
    <div class="card-body">
        <form action="?page=salvar-matricula" method="POST">
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
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="data_matricula" class="form-label">Data da Matrícula:</label>
                    <input type="date" name="data_matricula" class="form-control" id="data_matricula" value="<?php echo date('Y-m-d'); ?>">
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="status" class="form-label">Status:</label>
                    <select name="status" class="form-control" id="status">
                        <option value="Ativa">Ativa</option>
                        <option value="Inativa">Inativa</option>
                        <option value="Trancada">Trancada</option>
                        <option value="Concluída">Concluída</option>
                    </select>
                </div>
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="?page=listar-matricula" class="btn btn-secondary me-md-2"><i class="fas fa-arrow-left me-1"></i> Voltar</a>
                <button type="submit" class="btn btn-dark"><i class="fas fa-save me-1"></i> Cadastrar</button>
            </div>
        </form>
    </div>
</div>