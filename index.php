<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão Escolar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .navbar-brand {
            font-weight: bold;
        }
        .welcome-section {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 4rem 0;
            border-radius: 0 0 20px 20px;
            margin-bottom: 2rem;
        }
        .feature-card {
            transition: transform 0.3s;
            border: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }
        .stats-card {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .stats-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: #2575fc;
        }
        .stats-label {
            color: #6c757d;
            font-size: 0.9rem;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <i class="fas fa-graduation-cap me-2"></i>Escola Plus
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-user-graduate me-1"></i>Alunos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?page=cadastrar-aluno">Cadastrar</a></li>
                                <li><a class="dropdown-item" href="?page=listar-aluno">Listar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-chalkboard-teacher me-1"></i>Professores
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?page=cadastrar-professor">Cadastrar</a></li>
                                <li><a class="dropdown-item" href="?page=listar-professor">Listar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-book me-1"></i>Cursos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?page=cadastrar-curso">Cadastrar</a></li>
                                <li><a class="dropdown-item" href="?page=listar-curso">Listar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-users me-1"></i>Turmas
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?page=cadastrar-turma">Cadastrar</a></li>
                                <li><a class="dropdown-item" href="?page=listar-turma">Listar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-clipboard-list me-1"></i>Matrículas
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?page=cadastrar-matricula">Cadastrar</a></li>
                                <li><a class="dropdown-item" href="?page=listar-matricula">Listar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-star me-1"></i>Notas
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?page=cadastrar-nota">Cadastrar</a></li>
                                <li><a class="dropdown-item" href="?page=listar-nota">Listar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-calendar-check me-1"></i>Presenças
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?page=cadastrar-presenca">Cadastrar</a></li>
                                <li><a class="dropdown-item" href="?page=listar-presenca">Listar</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="flex-grow-1">
        <div class="container mt-4">
            <?php 
                include('config.php');
                switch (@$_REQUEST['page']) {
                    // Alunos
                    case 'cadastrar-aluno':
                        include('cadastrar-aluno.php');
                        break;
                    case 'listar-aluno':
                        include('listar-aluno.php');
                        break;
                    case 'editar-aluno':
                        include('editar-aluno.php');
                        break;
                    case 'salvar-aluno':
                        include('salvar-aluno.php');
                        break;

                    // Professores
                    case 'cadastrar-professor':
                        include('cadastrar-professor.php');
                        break;
                    case 'listar-professor':
                        include('listar-professor.php');
                        break;
                    case 'editar-professor':
                        include('editar-professor.php');
                        break;
                    case 'salvar-professor':
                        include('salvar-professor.php');
                        break;

                    // Cursos
                    case 'cadastrar-curso':
                        include('cadastrar-curso.php');
                        break;
                    case 'listar-curso':
                        include('listar-curso.php');
                        break;
                    case 'editar-curso':
                        include('editar-curso.php');
                        break;
                    case 'salvar-curso':
                        include('salvar-curso.php');
                        break;

                    // Turmas
                    case 'cadastrar-turma':
                        include('cadastrar-turma.php');
                        break;
                    case 'listar-turma':
                        include('listar-turma.php');
                        break;
                    case 'editar-turma':
                        include('editar-turma.php');
                        break;
                    case 'salvar-turma':
                        include('salvar-turma.php');
                        break;

                    // Matrículas
                    case 'cadastrar-matricula':
                        include('cadastrar-matricula.php');
                        break;
                    case 'listar-matricula':
                        include('listar-matricula.php');
                        break;
                    case 'editar-matricula':
                        include('editar-matricula.php');
                        break;
                    case 'salvar-matricula':
                        include('salvar-matricula.php');
                        break;

                    // Notas
                    case 'cadastrar-nota':
                        include('cadastrar-nota.php');
                        break;
                    case 'listar-nota':
                        include('listar-nota.php');
                        break;
                    case 'editar-nota':
                        include('editar-nota.php');
                        break;
                    case 'salvar-nota':
                        include('salvar-nota.php');
                        break;

                    // Presenças
                    case 'cadastrar-presenca':
                        include('cadastrar-presenca.php');
                        break;
                    case 'listar-presenca':
                        include('listar-presenca.php');
                        break;
                    case 'editar-presenca':
                        include('editar-presenca.php');
                        break;
                    case 'salvar-presenca':
                        include('salvar-presenca.php');
                        break;

                    default:
                        // Página inicial com dashboard
                        echo '
                        <div class="welcome-section text-center">
                            <div class="container">
                                <h1 class="display-4 fw-bold">Sistema de Gestão Escolar</h1>
                                <p class="lead">Gerencie alunos, professores, cursos e muito mais em uma plataforma integrada</p>
                            </div>
                        </div>
                        
                        <div class="row mb-4">
                            <div class="col-md-3">
                                <div class="stats-card">
                                    <div class="stats-number">';
                                    
                                    $sql = "SELECT COUNT(*) as total FROM alunos";
                                    $res = $conn->query($sql);
                                    $row = $res->fetch_object();
                                    echo $row->total;
                                    
                                    echo '</div>
                                    <div class="stats-label">Alunos Cadastrados</div>
                                    <i class="fas fa-user-graduate fa-2x mt-2 text-primary"></i>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="stats-card">
                                    <div class="stats-number">';
                                    
                                    $sql = "SELECT COUNT(*) as total FROM professores";
                                    $res = $conn->query($sql);
                                    $row = $res->fetch_object();
                                    echo $row->total;
                                    
                                    echo '</div>
                                    <div class="stats-label">Professores</div>
                                    <i class="fas fa-chalkboard-teacher fa-2x mt-2 text-success"></i>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="stats-card">
                                    <div class="stats-number">';
                                    
                                    $sql = "SELECT COUNT(*) as total FROM cursos";
                                    $res = $conn->query($sql);
                                    $row = $res->fetch_object();
                                    echo $row->total;
                                    
                                    echo '</div>
                                    <div class="stats-label">Cursos Oferecidos</div>
                                    <i class="fas fa-book fa-2x mt-2 text-warning"></i>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="stats-card">
                                    <div class="stats-number">';
                                    
                                    $sql = "SELECT COUNT(*) as total FROM turmas";
                                    $res = $conn->query($sql);
                                    $row = $res->fetch_object();
                                    echo $row->total;
                                    
                                    echo '</div>
                                    <div class="stats-label">Turmas Ativas</div>
                                    <i class="fas fa-users fa-2x mt-2 text-info"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="card feature-card h-100">
                                    <div class="card-body text-center">
                                        <i class="fas fa-user-graduate fa-3x text-primary mb-3"></i>
                                        <h5 class="card-title">Gestão de Alunos</h5>
                                        <p class="card-text">Cadastre e gerencie informações dos alunos, incluindo dados pessoais e contatos.</p>
                                        <a href="?page=cadastrar-aluno" class="btn btn-primary">Cadastrar Aluno</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card feature-card h-100">
                                    <div class="card-body text-center">
                                        <i class="fas fa-chalkboard-teacher fa-3x text-success mb-3"></i>
                                        <h5 class="card-title">Gestão de Professores</h5>
                                        <p class="card-text">Administre o corpo docente com informações de especialização e contato.</p>
                                        <a href="?page=cadastrar-professor" class="btn btn-success">Cadastrar Professor</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card feature-card h-100">
                                    <div class="card-body text-center">
                                        <i class="fas fa-book fa-3x text-warning mb-3"></i>
                                        <h5 class="card-title">Gestão de Cursos</h5>
                                        <p class="card-text">Crie e organize cursos com descrições, durações e créditos.</p>
                                        <a href="?page=cadastrar-curso" class="btn btn-warning">Cadastrar Curso</a>
                                    </div>
                                </div>
                            </div>
                        </div>';
                }
            ?>
        </div>
    </main>

    <footer class="bg-dark text-light pt-4 pb-3 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5 class="mb-3">Sobre a Escola Plus</h5>
                    <p>Plataforma de gestão escolar que simplifica o gerenciamento de alunos, professores, cursos e atividades acadêmicas.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5 class="mb-3">Contato</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt me-2"></i>Av. Educação, 123 - Centro</li>
                        <li><i class="fas fa-phone me-2"></i>(11) 1234-5678</li>
                        <li><i class="fas fa-envelope me-2"></i>contato@escolaplus.edu.br</li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5 class="mb-3">Redes Sociais</h5>
                    <a href="#" class="text-light me-3 fs-4"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-light me-3 fs-4"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-light me-3 fs-4"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-light fs-4"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <hr class="bg-light">
            <div class="text-center">
                <small>&copy; 2025 Escola Plus. Todos os direitos reservados.</small>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>