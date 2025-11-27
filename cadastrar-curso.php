<div class="card">
    <div class="card-header bg-warning text-dark">
        <h3 class="card-title mb-0"><i class="fas fa-book me-2"></i>Cadastrar Curso</h3>
    </div>
    <div class="card-body">
        <form action="?page=salvar-curso" method="POST">
            <input type="hidden" name="acao" value="cadastrar">
            
            <div class="mb-3">
                <label for="nome_curso" class="form-label">Nome do Curso:</label>
                <input type="text" name="nome_curso" class="form-control" id="nome_curso" placeholder="Digite o nome do curso" required>
            </div>
            
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição:</label>
                <textarea name="descricao" class="form-control" id="descricao" rows="3" placeholder="Descreva o curso"></textarea>
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="duracao" class="form-label">Duração:</label>
                    <input type="text" name="duracao" class="form-control" id="duracao" placeholder="Ex: 6 meses, 2 anos">
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="creditos" class="form-label">Créditos:</label>
                    <input type="number" name="creditos" class="form-control" id="creditos" placeholder="Número de créditos">
                </div>
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="?page=listar-curso" class="btn btn-secondary me-md-2"><i class="fas fa-arrow-left me-1"></i> Voltar</a>
                <button type="submit" class="btn btn-warning"><i class="fas fa-save me-1"></i> Cadastrar</button>
            </div>
        </form>
    </div>
</div>