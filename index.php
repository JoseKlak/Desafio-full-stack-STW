<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>STW Automação</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg bg-light">
            <div class="logo">
                <a href="http://localhost/STW"><img src="./Imagens/logo.png"></a>
            </div>
            <div class="container-fluid">
                <li class="nav-item dropdown" type="none">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        RECEITAS
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=criar-receita">Criar nova receita</a></li>
                        <li><a class="dropdown-item" href="?page=listar-receita">Listar receitas</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown" type="none">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        INGREDIENTES
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=criar-ingrediente">Criar ingrediente</a></li>
                        <li><a class="dropdown-item" href="?page=listar-ingrediente">Listar ingredientes</a></li>
                    </ul>
                </li>
            </div>
        </nav>
        
        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <?php
                        include("config.php");
                        switch(@$_REQUEST["page"]){
                            case "criar-receita":
                                include("criar-receita.php");
                            break;
                            case "criar-ingrediente":
                                include("criar-ingrediente.php");
                            break;
                            case "listar-receita":
                                include("listar-receita.php");
                            break;
                            case "listar-ingrediente":
                                include("listar-ingrediente.php");
                            break;
                            case "editar-receita":
                                include("editar-receita.php");
                            break;
                            case "editar-ingrediente":
                                include("editar-ingrediente.php");
                            break;
                            case "salvar":
                                include("salvar-receita.php");
                            break;
                            case "mostrar-receita":
                                include("mostrar-receita.php");
                            break;
                            default:
                                include("home.html");
                        }
                    ?>
                </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>