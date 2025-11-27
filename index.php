<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema Escolar</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="index.php">EduSystem</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Alunos
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-aluno">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-aluno">Listar</a></li>
	          </ul>
	        </li>

	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Professores
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-professor">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-professor">Listar</a></li>
	          </ul>
	        </li>

	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Cursos
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-curso">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-curso">Listar</a></li>
	          </ul>
	        </li>

	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Turmas
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-turma">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-turma">Listar</a></li>
	          </ul>
	        </li>

	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Matrículas
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-matricula">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-matricula">Listar</a></li>
	          </ul>
	        </li>

	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Notas
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-nota">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-nota">Listar</a></li>
	          </ul>
	        </li>

	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Presenças
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-presenca">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-presenca">Listar</a></li>
	          </ul>
	        </li>
	        
	      </ul>
	      <form class="d-flex" role="search">
	        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search"/>
	        <button class="btn btn-outline-success" type="submit">Buscar</button>
	      </form>
	    </div>
	  </div>
	</nav>

	<div class="container mt-3">
		<div class="row">
			<div class="col">
				<?php
					include('config.php');
					switch (@$_REQUEST['page']) {
						// aluno
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

						// professor
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

						// curso
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

						// turma
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

						// matricula
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

						// nota
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

						// presenca
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
							print "<h1>Seja Bem Vindo ao Sistema Escolar EduSystem</h1>";
							print "<p>Utilize o menu acima para navegar pelas funcionalidades do sistema.</p>";
					}
				?>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
