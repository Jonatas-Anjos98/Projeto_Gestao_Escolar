<div class="card">
    <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
        <h3 class="card-title mb-0"><i class="fas fa-chalkboard-teacher me-2"></i>Lista de Professores</h3>
        <a href="?page=cadastrar-professor" class="btn btn-light btn-sm">
            <i class="fas fa-plus me-1"></i> Novo Professor
        </a>
    </div>
    <div class="card-body">
        <?php
            $sql = "SELECT * FROM professores ORDER BY nome";
            $res = $conn->query($sql);
            $qtd = $res->num_rows;
            
            if($qtd > 0){
                print "<p>Foi encontrado <b>$qtd</b> resultado(s)</p>";
                print "<div class='table-responsive'>";
                print "<table class='table table-hover table-striped table-bordered'>";
                print "<tr class='table-success'>";
                print "<th>#</th>";
                print "<th>Nome</th>";
                print "<th>Especialização</th>";
                print "<th>E-mail</th>";
                print "<th>Telefone</th>";
                print "<th>Ações</th>";
                print "</tr>";
                while($row = $res->fetch_object()){
                    print "<tr>";
                    print "<td>".$row->id_professor."</td>";
                    print "<td>".$row->nome."</td>";
                    print "<td>".$row->especializacao."</td>";
                    print "<td>".$row->email."</td>";
                    print "<td>".$row->telefone."</td>";
                    print "<td>
                            <button onclick=\"location.href='?page=editar-professor&id_professor=".$row->id_professor."';\" class='btn btn-success btn-sm'>
                                <i class='fas fa-edit'></i>
                            </button>
                            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-professor&acao=excluir&id_professor=".$row->id_professor."';}else{false;}\" class='btn btn-danger btn-sm'>
                                <i class='fas fa-trash'></i>
                            </button>
                           </td>";
                    print "</tr>";
                }
                print "</table>";
                print "</div>";
            } else {
                print "<div class='alert alert-warning'>Nenhum professor cadastrado!</div>";
            }
        ?>
    </div>
</div>