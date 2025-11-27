<div class="card">
    <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center">
        <h3 class="card-title mb-0"><i class="fas fa-clipboard-list me-2"></i>Lista de Matrículas</h3>
        <a href="?page=cadastrar-matricula" class="btn btn-light btn-sm">
            <i class="fas fa-plus me-1"></i> Nova Matrícula
        </a>
    </div>
    <div class="card-body">
        <?php
            $sql = "SELECT m.*, a.nome as nome_aluno, c.nome_curso 
                    FROM matriculas m 
                    INNER JOIN alunos a ON m.id_aluno = a.id_aluno 
                    INNER JOIN cursos c ON m.id_curso = c.id_curso 
                    ORDER BY m.data_matricula DESC";
            $res = $conn->query($sql);
            $qtd = $res->num_rows;
            
            if($qtd > 0){
                print "<p>Foi encontrado <b>$qtd</b> resultado(s)</p>";
                print "<div class='table-responsive'>";
                print "<table class='table table-hover table-striped table-bordered'>";
                print "<tr class='table-secondary'>";
                print "<th>#</th>";
                print "<th>Aluno</th>";
                print "<th>Curso</th>";
                print "<th>Data Matrícula</th>";
                print "<th>Status</th>";
                print "<th>Ações</th>";
                print "</tr>";
                while($row = $res->fetch_object()){
                    print "<tr>";
                    print "<td>".$row->id_matricula."</td>";
                    print "<td>".$row->nome_aluno."</td>";
                    print "<td>".$row->nome_curso."</td>";
                    print "<td>".date('d/m/Y', strtotime($row->data_matricula))."</td>";
                    print "<td><span class='badge bg-".($row->status == 'Ativa' ? 'success' : ($row->status == 'Inativa' ? 'danger' : 'warning'))."'>".$row->status."</span></td>";
                    print "<td>
                            <button onclick=\"location.href='?page=editar-matricula&id_matricula=".$row->id_matricula."';\" class='btn btn-secondary btn-sm'>
                                <i class='fas fa-edit'></i>
                            </button>
                            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-matricula&acao=excluir&id_matricula=".$row->id_matricula."';}else{false;}\" class='btn btn-danger btn-sm'>
                                <i class='fas fa-trash'></i>
                            </button>
                           </td>";
                    print "</tr>";
                }
                print "</table>";
                print "</div>";
            } else {
                print "<div class='alert alert-warning'>Nenhuma matrícula cadastrada!</div>";
            }
        ?>
    </div>
</div>