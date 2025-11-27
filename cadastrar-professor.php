<div class="card">
    <div class="card-header bg-success text-white">
        <h3 class="card-title mb-0"><i class="fas fa-chalkboard-teacher me-2"></i>Cadastrar Professor</h3>
    </div>
    <div class="card-body">
        <form action="?page=salvar-professor" method="POST">
            <input type="hidden" name="acao" value="cadastrar">
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nome" class="form-label">Nome Completo:</label>
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome completo" required>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="especializacao" class="form-label">Especialização:</label>
                    <input type="text" name="especializacao" class="form-control" id="especializacao" placeholder="Digite a especialização">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">E-mail:</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Digite o e-mail">
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="telefone" class="form-label">Telefone:</label>
                    <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Digite o telefone">
                </div>
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="?page=listar-professor" class="btn btn-secondary me-md-2"><i class="fas fa-arrow-left me-1"></i> Voltar</a>
                <button type="submit" class="btn btn-success"><i class="fas fa-save me-1"></i> Cadastrar</button>
            </div>
        </form>
    </div>
</div>