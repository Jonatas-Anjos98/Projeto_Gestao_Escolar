<div class="card">
    <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
        <h3 class="card-title mb-0"><i class="fas fa-users me-2"></i>Lista de Turmas</h3>
        <a href="?page=cadastrar-turma" class="btn btn-light btn-sm">
            <i class="fas fa-plus me-1"></i> Nova Turma
        </a>
    </div>
    <div class="card-body">
        <?php
            $sql = "SELECT t.*, c.nome_curso, p.nome as nome_professor 
                    FROM turmas t 
                    INNER JOIN cursos c ON t.id_curso = c.id_curso 
                    INNER JOIN professores p ON t.id_professor = p.id_professor 
                    ORDER BY c.nome_curso";
            $res = $conn->query($sql);
            $qtd = $res->num_rows;
            
            if($qtd > 0){
                print "<p>Foi encontrado <b>$qtd</b> resultado(s)</p>";
                print "<div class='table-responsive'>";
                print "<table class='table table-hover table-striped table-bordered'>";
                print "<tr class='table-info'>";
                print "<th>#</th>";
                print "<th>Curso</th>";
                print "<th>Professor</th>";
                print "<th>Horário</th>";
                print "<th>Sala</th>";
                print "<th>Ações</th>";
                print "</tr>";
                while($row = $res->fetch_object()){
                    print "<tr>";
                    print "<td>".$row->id_turma."</td>";
                    print "<td>".$row->nome_curso."</td>";
                    print "<td>".$row->nome_professor."</td>";
                    print "<td>".$row->horario."</td>";
                    print "<td>".$row->sala."</td>";
                    print "<td>
                            <button onclick=\"location.href='?page=editar-turma&id_turma=".$row->id_turma."';\" class='btn btn-info btn-sm'>
                                <i class='fas fa-edit'></i>
                            </button>
                            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-turma&acao=excluir&id_turma=".$row->id_turma."';}else{false;}\" class='btn btn-danger btn-sm'>
                                <i class='fas fa-trash'></i>
                            </button>
                           </td>";
                    print "</tr>";
                }
                print "</table>";
                print "</div>";
            } else {
                print "<div class='alert alert-warning'>Nenhuma turma cadastrada!</div>";
            }
        ?>
    </div>
</div>