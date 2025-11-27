<div class="card">
    <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
        <h3 class="card-title mb-0"><i class="fas fa-calendar-check me-2"></i>Lista de Presenças</h3>
        <a href="?page=cadastrar-presenca" class="btn btn-light btn-sm">
            <i class="fas fa-plus me-1"></i> Nova Presença
        </a>
    </div>
    <div class="card-body">
        <?php
            $sql = "SELECT p.*, a.nome as nome_aluno, c.nome_curso, t.horario 
                    FROM presencas p 
                    INNER JOIN alunos a ON p.id_aluno = a.id_aluno 
                    INNER JOIN turmas t ON p.id_turma = t.id_turma 
                    INNER JOIN cursos c ON t.id_curso = c.id_curso 
                    ORDER BY p.data DESC, a.nome";
            $res = $conn->query($sql);
            $qtd = $res->num_rows;
            
            if($qtd > 0){
                print "<p>Foi encontrado <b>$qtd</b> resultado(s)</p>";
                print "<div class='table-responsive'>";
                print "<table class='table table-hover table-striped table-bordered'>";
                print "<tr class='table-success'>";
                print "<th>#</th>";
                print "<th>Aluno</th>";
                print "<th>Curso</th>";
                print "<th>Horário</th>";
                print "<th>Data</th>";
                print "<th>Status</th>";
                print "<th>Ações</th>";
                print "</tr>";
                while($row = $res->fetch_object()){
                    $status_class = ($row->status == 'Presente') ? 'bg-success' : (($row->status == 'Falta' || $row->status == 'Falta Justificada') ? 'bg-danger' : 'bg-warning');
                    print "<tr>";
                    print "<td>".$row->id_presenca."</td>";
                    print "<td>".$row->nome_aluno."</td>";
                    print "<td>".$row->nome_curso."</td>";
                    print "<td>".$row->horario."</td>";
                    print "<td>".date('d/m/Y', strtotime($row->data))."</td>";
                    print "<td><span class='badge $status_class'>".$row->status."</span></td>";
                    print "<td>
                            <button onclick=\"location.href='?page=editar-presenca&id_presenca=".$row->id_presenca."';\" class='btn btn-success btn-sm'>
                                <i class='fas fa-edit'></i>
                            </button>
                            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-presenca&acao=excluir&id_presenca=".$row->id_presenca."';}else{false;}\" class='btn btn-danger btn-sm'>
                                <i class='fas fa-trash'></i>
                            </button>
                           </td>";
                    print "</tr>";
                }
                print "</table>";
                print "</div>";
            } else {
                print "<div class='alert alert-warning'>Nenhuma presença cadastrada!</div>";
            }
        ?>
    </div>
</div>