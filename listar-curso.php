<div class="card">
    <div class="card-header bg-warning text-dark d-flex justify-content-between align-items-center">
        <h3 class="card-title mb-0"><i class="fas fa-book me-2"></i>Lista de Cursos</h3>
        <a href="?page=cadastrar-curso" class="btn btn-dark btn-sm">
            <i class="fas fa-plus me-1"></i> Novo Curso
        </a>
    </div>
    <div class="card-body">
        <?php
            $sql = "SELECT * FROM cursos ORDER BY nome_curso";
            $res = $conn->query($sql);
            $qtd = $res->num_rows;
            
            if($qtd > 0){
                print "<p>Foi encontrado <b>$qtd</b> resultado(s)</p>";
                print "<div class='table-responsive'>";
                print "<table class='table table-hover table-striped table-bordered'>";
                print "<tr class='table-warning'>";
                print "<th>#</th>";
                print "<th>Nome do Curso</th>";
                print "<th>Descrição</th>";
                print "<th>Duração</th>";
                print "<th>Créditos</th>";
                print "<th>Ações</th>";
                print "</tr>";
                while($row = $res->fetch_object()){
                    print "<tr>";
                    print "<td>".$row->id_curso."</td>";
                    print "<td>".$row->nome_curso."</td>";
                    print "<td>".$row->descricao."</td>";
                    print "<td>".$row->duracao."</td>";
                    print "<td>".$row->creditos."</td>";
                    print "<td>
                            <button onclick=\"location.href='?page=editar-curso&id_curso=".$row->id_curso."';\" class='btn btn-warning btn-sm'>
                                <i class='fas fa-edit'></i>
                            </button>
                            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-curso&acao=excluir&id_curso=".$row->id_curso."';}else{false;}\" class='btn btn-danger btn-sm'>
                                <i class='fas fa-trash'></i>
                            </button>
                           </td>";
                    print "</tr>";
                }
                print "</table>";
                print "</div>";
            } else {
                print "<div class='alert alert-warning'>Nenhum curso cadastrado!</div>";
            }
        ?>
    </div>
</div>