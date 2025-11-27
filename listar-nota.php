<div class="card">
    <div class="card-header bg-warning text-dark d-flex justify-content-between align-items-center">
        <h3 class="card-title mb-0"><i class="fas fa-star me-2"></i>Lista de Notas</h3>
        <a href="?page=cadastrar-nota" class="btn btn-dark btn-sm">
            <i class="fas fa-plus me-1"></i> Nova Nota
        </a>
    </div>
    <div class="card-body">
        <?php
            $sql = "SELECT n.*, a.nome as nome_aluno, c.nome_curso 
                    FROM notas n 
                    INNER JOIN alunos a ON n.id_aluno = a.id_aluno 
                    INNER JOIN cursos c ON n.id_curso = c.id_curso 
                    ORDER BY c.nome_curso, a.nome";
            $res = $conn->query($sql);
            $qtd = $res->num_rows;
            
            if($qtd > 0){
                print "<p>Foi encontrado <b>$qtd</b> resultado(s)</p>";
                print "<div class='table-responsive'>";
                print "<table class='table table-hover table-striped table-bordered'>";
                print "<tr class='table-warning'>";
                print "<th>#</th>";
                print "<th>Aluno</th>";
                print "<th>Curso</th>";
                print "<th>Nota</th>";
                print "<th>Feedback</th>";
                print "<th>Ações</th>";
                print "</tr>";
                while($row = $res->fetch_object()){
                    $nota_class = ($row->nota >= 7) ? 'text-success' : (($row->nota >= 5) ? 'text-warning' : 'text-danger');
                    print "<tr>";
                    print "<td>".$row->id_nota."</td>";
                    print "<td>".$row->nome_aluno."</td>";
                    print "<td>".$row->nome_curso."</td>";
                    print "<td class='$nota_class fw-bold'>".number_format($row->nota, 2)."</td>";
                    print "<td>".$row->feedback."</td>";
                    print "<td>
                            <button onclick=\"location.href='?page=editar-nota&id_nota=".$row->id_nota."';\" class='btn btn-warning btn-sm'>
                                <i class='fas fa-edit'></i>
                            </button>
                            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-nota&acao=excluir&id_nota=".$row->id_nota."';}else{false;}\" class='btn btn-danger btn-sm'>
                                <i class='fas fa-trash'></i>
                            </button>
                           </td>";
                    print "</tr>";
                }
                print "</table>";
                print "</div>";
            } else {
                print "<div class='alert alert-warning'>Nenhuma nota cadastrada!</div>";
            }
        ?>
    </div>
</div>