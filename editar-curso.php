<?php
    $sql = "SELECT * FROM cursos WHERE id_curso=".$_REQUEST["id_curso"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<div class="card">
    <div class="card-header bg-warning text-dark">
        <h3 class="card-title mb-0"><i class="fas fa-edit me-2"></i>Editar Curso</h3>
    </div>
    <div class="card-body">
        <form action="?page=salvar-curso" method="POST">
            <input type="hidden" name="acao" value="editar">
            <input type="hidden" name="id_curso" value="<?php print $row->id_curso; ?>">
            
            <div class="mb-3">
                <label for="nome_curso" class="form-label">Nome do Curso:</label>
                <input type="text" name="nome_curso" class="form-control" id="nome_curso" value="<?php print $row->nome_curso; ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição:</label>
                <textarea name="descricao" class="form-control" id="descricao" rows="3"><?php print $row->descricao; ?></textarea>
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="duracao" class="form-label">Duração:</label>
                    <input type="text" name="duracao" class="form-control" id="duracao" value="<?php print $row->duracao; ?>">
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="creditos" class="form-label">Créditos:</label>
                    <input type="number" name="creditos" class="form-control" id="creditos" value="<?php print $row->creditos; ?>">
                </div>
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="?page=listar-curso" class="btn btn-secondary me-md-2"><i class="fas fa-arrow-left me-1"></i> Voltar</a>
                <button type="submit" class="btn btn-warning"><i class="fas fa-save me-1"></i> Salvar Alterações</button>
            </div>
        </form>
    </div>
</div>