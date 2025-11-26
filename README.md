# Sistema de Gestão Escolar - EduSystem

Sistema completo de gestão escolar desenvolvido em PHP com MySQL, utilizando XAMPP como ambiente de desenvolvimento.

## Descrição

O **EduSystem** é um sistema de gestão escolar que permite administrar todas as operações relacionadas a uma instituição de ensino, incluindo cadastro de alunos, professores, cursos, turmas, matrículas, notas e controle de presenças.

## Funcionalidades

O sistema possui **CRUD completo** (Create, Read, Update, Delete) para as seguintes entidades:

### 1. Alunos
- Cadastro de alunos com informações pessoais
- Campos: nome, data de nascimento, endereço, email, telefone

### 2. Professores
- Gestão de professores
- Campos: nome, especialização, email, telefone

### 3. Cursos/Disciplinas
- Cadastro de cursos oferecidos
- Campos: nome do curso, descrição, duração, créditos

### 4. Turmas
- Gestão de turmas com relacionamento entre cursos e professores
- Campos: curso, professor, horário, sala
- **Utiliza INNER JOIN** para exibir nome do curso e professor

### 5. Matrículas
- Controle de matrículas de alunos em cursos
- Campos: aluno, curso, data da matrícula, status
- **Utiliza INNER JOIN** para exibir nome do aluno e curso

### 6. Notas/Avaliações
- Registro de notas e feedback dos alunos
- Campos: aluno, curso, nota, feedback
- **Utiliza INNER JOIN** para exibir nome do aluno e curso

### 7. Presenças
- Controle de presença dos alunos nas turmas
- Campos: aluno, turma, data, status
- **Utiliza INNER JOIN** para exibir nome do aluno, curso e horário da turma

## Estrutura do Banco de Dados

O sistema utiliza um banco de dados MySQL com 7 tabelas relacionadas:

```
escola
├── alunos
├── professores
├── cursos
├── turmas (FK: id_curso, id_professor)
├── matriculas (FK: id_aluno, id_curso)
├── notas (FK: id_aluno, id_curso)
└── presencas (FK: id_aluno, id_turma)
```

## Requisitos

- **XAMPP** (Apache + MySQL + PHP)
- **PHP** 7.4 ou superior
- **MySQL** 5.7 ou superior
- **Bootstrap** 5.x (para interface)

## Instalação

### Passo 1: Instalar o XAMPP

1. Faça o download do XAMPP em: https://www.apachefriends.org/
2. Instale o XAMPP no seu computador
3. Inicie os serviços **Apache** e **MySQL** no painel de controle do XAMPP

### Passo 2: Criar o Banco de Dados

1. Abra o navegador e acesse: `http://localhost/phpmyadmin`
2. Clique em **"Novo"** ou **"New"** para criar um novo banco de dados
3. Digite o nome: `escola`
4. Selecione a codificação: `utf8_general_ci`
5. Clique em **"Criar"**
6. Selecione o banco de dados `escola` criado
7. Clique na aba **"SQL"**
8. Copie todo o conteúdo do arquivo `escola.sql` e cole na área de texto
9. Clique em **"Executar"** ou **"Go"**

### Passo 3: Instalar o Sistema

1. Copie a pasta `sistema_escolar` para o diretório `htdocs` do XAMPP
   - Windows: `C:\xampp\htdocs\`
   - Linux: `/opt/lampp/htdocs/`
   - Mac: `/Applications/XAMPP/htdocs/`

### Passo 4: Baixar o Bootstrap

1. Acesse: https://getbootstrap.com/docs/5.3/getting-started/download/
2. Faça o download da versão compilada do Bootstrap
3. Extraia os arquivos:
   - Copie `bootstrap.min.css` para a pasta `css/`
   - Copie `bootstrap.bundle.min.js` para a pasta `js/`

**Alternativamente**, você pode usar o Bootstrap via CDN editando o arquivo `index.php`:

Substitua as linhas:
```html
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
```
por:
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
```

E substitua:
```html
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
```
por:
```html
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
```

### Passo 5: Configurar a Conexão

O arquivo `config.php` já está configurado com as credenciais padrão do XAMPP:

```php
$hostname = "localhost";
$bancodedados = "escola";
$usuario = "root";
$senha = "";
```

Se você alterou as configurações do MySQL, edite este arquivo conforme necessário.

### Passo 6: Acessar o Sistema

1. Abra o navegador
2. Acesse: `http://localhost/sistema_escolar/`
3. O sistema estará pronto para uso!

## Estrutura de Arquivos

```
sistema_escolar/
├── index.php                    # Arquivo principal com navegação
├── config.php                   # Configuração da conexão com o banco
├── escola.sql                   # Script SQL para criar o banco de dados
├── README.md                    # Este arquivo
│
├── css/
│   └── bootstrap.min.css        # Framework CSS Bootstrap
│
├── js/
│   └── bootstrap.bundle.min.js  # Framework JS Bootstrap
│
├── Alunos
│   ├── cadastrar-aluno.php
│   ├── listar-aluno.php
│   ├── editar-aluno.php
│   └── salvar-aluno.php
│
├── Professores
│   ├── cadastrar-professor.php
│   ├── listar-professor.php
│   ├── editar-professor.php
│   └── salvar-professor.php
│
├── Cursos
│   ├── cadastrar-curso.php
│   ├── listar-curso.php
│   ├── editar-curso.php
│   └── salvar-curso.php
│
├── Turmas
│   ├── cadastrar-turma.php      # Com INNER JOIN
│   ├── listar-turma.php          # Com INNER JOIN
│   ├── editar-turma.php          # Com INNER JOIN
│   └── salvar-turma.php
│
├── Matrículas
│   ├── cadastrar-matricula.php   # Com INNER JOIN
│   ├── listar-matricula.php      # Com INNER JOIN
│   ├── editar-matricula.php      # Com INNER JOIN
│   └── salvar-matricula.php
│
├── Notas
│   ├── cadastrar-nota.php        # Com INNER JOIN
│   ├── listar-nota.php           # Com INNER JOIN
│   ├── editar-nota.php           # Com INNER JOIN
│   └── salvar-nota.php
│
└── Presenças
    ├── cadastrar-presenca.php    # Com INNER JOIN
    ├── listar-presenca.php       # Com INNER JOIN
    ├── editar-presenca.php       # Com INNER JOIN
    └── salvar-presenca.php
```

## Padrão de Código

O sistema segue o padrão de código fornecido, com:

- **Estrutura modular**: Cada entidade possui 4 arquivos (cadastrar, listar, editar, salvar)
- **Navegação por query string**: Utiliza `?page=nome-da-pagina` para navegação
- **Interface Bootstrap**: Menu dropdown e tabelas estilizadas
- **CRUD completo**: Todas as operações de Create, Read, Update e Delete
- **INNER JOIN**: Utilizado nas tabelas relacionadas para exibir informações completas

## Uso do Sistema

### Navegação

O sistema possui um menu superior com dropdowns para cada módulo:
- **Alunos**: Cadastrar e Listar
- **Professores**: Cadastrar e Listar
- **Cursos**: Cadastrar e Listar
- **Turmas**: Cadastrar e Listar
- **Matrículas**: Cadastrar e Listar
- **Notas**: Cadastrar e Listar
- **Presenças**: Cadastrar e Listar

### Fluxo de Trabalho Recomendado

1. **Cadastrar Professores** e **Alunos**
2. **Cadastrar Cursos**
3. **Cadastrar Turmas** (vinculando cursos e professores)
4. **Realizar Matrículas** (vinculando alunos e cursos)
5. **Registrar Notas** dos alunos
6. **Controlar Presenças** nas turmas

## Observações Importantes

### Segurança

⚠️ **ATENÇÃO**: Este sistema foi desenvolvido para fins educacionais. Para uso em produção, implemente:

- **Prepared Statements** (mysqli ou PDO) para prevenir SQL Injection
- **Validação de dados** no servidor
- **Sanitização de entradas**
- **Sistema de autenticação** e controle de acesso
- **HTTPS** para conexões seguras
- **Criptografia de senhas**

### Melhorias Futuras

Sugestões para expandir o sistema:

- Sistema de login e autenticação
- Diferentes níveis de acesso (administrador, professor, aluno)
- Relatórios e estatísticas
- Exportação de dados para PDF/Excel
- Sistema de mensagens entre usuários
- Upload de documentos e fotos
- Calendário acadêmico
- Histórico escolar completo
- Boletim online

## Suporte

Para dúvidas ou problemas:

1. Verifique se o Apache e MySQL estão rodando no XAMPP
2. Confirme que o banco de dados `escola` foi criado corretamente
3. Verifique as credenciais no arquivo `config.php`
4. Consulte os logs de erro do PHP em `C:\xampp\apache\logs\error.log`

## Licença

Este projeto é de código aberto e está disponível para uso educacional.

## Autor

Sistema desenvolvido seguindo as especificações fornecidas para gestão escolar completa.

---

**Versão**: 1.0  
**Data**: 2025  
**Tecnologias**: PHP, MySQL, Bootstrap 5, XAMPP
