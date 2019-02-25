<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">

    <!-- CSS Próprio do sistema -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/estilo.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
    <title> SisGED - Início </title>
  </head>
<body>
    
    <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-dark bg-gradient-primary">
            <div class="container">
                <a class="navbar-brand h1 mb-0" href="index.html"><img src="_img/gua_oficial.png" style="width:150px; padding:4px; background-color:white;" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse" id="navbarSite">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link"> HOME </a>
                        </li>
                        <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle mr-4" data-toggle="dropdown" id="navDrop"> CADASTROS </a>
                                <div class="dropdown-menu">
                                        <a href="Cadstro-sec.php" class="dropdown-item"> Secretarias </a>
                                        <a href="#" class="dropdown-item"> Colaborador(a).  </a>
                                </div>
                        </li>
                        <li class="nav-item">
                                <a href="#" class="nav-link"> CONSULTAS </a>
                        </li>
                        <li class="nav-item">
                                <a href="#" class="nav-link"> AJUDA </a>
                        </li>
                        <li class="nav-item">
                                <a href="#" class="nav-link"> SAIR </a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navDrop"> Institucionais </a>
                        
                            <div class="dropdown-menu">
                                    <a href="https://www.guarulhos.sp.gov.br" target="blank" class="dropdown-item"> Prefeitura </a>
                                    <a href="https://portaleducacao.guarulhos.sp.gov.br/portal/" target="blank" class="dropdown-item"> Secretaria de Educação  </a>
                                    <a href="https://www.saopaulo.sp.gov.br" target="blank" class="dropdown-item"> Governo do Estado  </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>

    <div class="container">
        <h1>Cadastro de Secretaria</h1>
            <br>
                <div class="secretaria">
                    <form action="#" method="post">
                        <label for="text" class="idsec"> Código Secretaria </label>
                            <input type="text" class="input-group-text" disabled value="20181011405087">
                                <br>
                                    <label for="text" class="nomesec"> Nome do(a) Secretaria/Departamento.</label> 
                                        <input type="text" class="form-control" placeholder="Nome da Secretaria ou Departamento.">
                                            <br>
                                            <button type="submit" class="btn btn-success">Cadastrar </button> | <button type="reset" class="btn btn-warning">Limpar</button>
                    </form>
                </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
  </body>
</html>