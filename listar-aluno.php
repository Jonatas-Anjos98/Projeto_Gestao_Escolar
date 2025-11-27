<div class="card">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h3 class="card-title mb-0"><i class="fas fa-users me-2"></i>Lista de Alunos</h3>
        <a href="?page=cadastrar-aluno" class="btn btn-light btn-sm">
            <i class="fas fa-plus me-1"></i> Novo Aluno
        </a>
    </div>
    <div class="card-body">
        <?php
            $sql = "SELECT * FROM alunos ORDER BY nome";
            $res = $conn->query($sql);
            $qtd = $res->num_rows;
            
            if($qtd > 0){
                print "<p>Foi encontrado <b>$qtd</b> resultado(s)</p>";
                print "<div class='table-responsive'>";
                print "<table class='table table-hover table-striped table-bordered'>";
                print "<tr class='table-primary'>";
                print "<th>#</th>";
                print "<th>Nome</th>";
                print "<th>Data Nasc.</th>";
                print "<th>E-mail</th>";
                print "<th>Telefone</th>";
                print "<th>Ações</th>";
                print "</tr>";
                while($row = $res->fetch_object()){
                    print "<tr>";
                    print "<td>".$row->id_aluno."</td>";
                    print "<td>".$row->nome."</td>";
                    print "<td>".date('d/m/Y', strtotime($row->data_nascimento))."</td>";
                    print "<td>".$row->email."</td>";
                    print "<td>".$row->telefone."</td>";
                    print "<td>
                            <button onclick=\"location.href='?page=editar-aluno&id_aluno=".$row->id_aluno."';\" class='btn btn-success btn-sm'>
                                <i class='fas fa-edit'></i>
                            </button>
                            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-aluno&acao=excluir&id_aluno=".$row->id_aluno."';}else{false;}\" class='btn btn-danger btn-sm'>
                                <i class='fas fa-trash'></i>
                            </button>
                           </td>";
                    print "</tr>";
                }
                print "</table>";
                print "</div>";
            } else {
                print "<div class='alert alert-warning'>Nenhum aluno cadastrado!</div>";
            }
        ?>
    </div>
</div>