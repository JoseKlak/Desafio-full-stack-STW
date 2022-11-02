<?php
    switch(@$_REQUEST["acao"]){
        case "cadastrar_receita":
           $nome_receita = $_POST["nome_receita"];
           $nome_ingrediente = $_POST["nome_ingrediente"];
           $quantidade = $_POST["quantidade"];
           $nome_ingrediente2 = $_POST["nome_ingrediente2"];
           $quantidade2 = $_POST["quantidade2"];
           $nome_ingrediente3 = $_POST["nome_ingrediente3"];
           $quantidade3 = $_POST["quantidade3"];
           $nome_ingrediente4 = $_POST["nome_ingrediente4"];
           $quantidade4 = $_POST["quantidade4"];
           $nome_ingrediente5 = $_POST["nome_ingrediente5"];
           $quantidade5 = $_POST["quantidade5"];

           $sql = "INSERT INTO receitas (descricao) VALUES ('$nome_receita')";
           $resultado = $conn->query($sql);

           $sql = "SELECT id_receitas FROM receitas ORDER BY id_receitas DESC LIMIT 1;";
           $resultado = $conn->query($sql);
           $row = $resultado->fetch_object();

           //ingrediente 1
           if($nome_ingrediente != "" ) {

               $sql = "SELECT * FROM ingredientes WHERE {$nome_ingrediente} = descricao";
               $resultado = $conn->query($sql);
               $todos_ingredientes = $resultado->fetch_object();

               if($nome_ingrediente != $todos_ingredientes->descricao) {
                    $sql = "INSERT INTO ingredientes (descricao) VALUES ('$nome_ingrediente')";
                    $resultado = $conn->query($sql);

                    $sql = "SELECT id_ingredientes FROM ingredientes ORDER BY id_ingredientes DESC LIMIT 1;";
                    $resultado = $conn->query($sql);
                    $roww = $resultado->fetch_object();

                    $sql = "INSERT INTO receitas_ingredientes (cod_receitas, cod_ingredientes, qntKG) VALUES ('{$row->id_receitas}', '{$roww->id_ingredientes}', '{$quantidade}')";
                    $resultado = $conn->query($sql);
               }else {

                    $sql = "SELECT * FROM ingredientes WHERE descricao = '{$nome_ingrediente}'";
                    $resultado = $conn->query($sql);
                    $roww = $resultado->fetch_object();

                    $sql = "INSERT INTO receitas_ingredientes (cod_receitas, cod_ingredientes, qntKG) VALUES ('{$row->id_receitas}', '{$roww->id_ingredientes}', '{$quantidade}')";
                    $resultado = $conn->query($sql);
               }
           }

           //ingrediente 2
           if($nome_ingrediente2 != "") {

               $sql = "SELECT * FROM ingredientes WHERE {$nome_ingrediente2} = descricao";
               $resultado = $conn->query($sql);
               $todos_ingredientes = $resultado->fetch_object();

               if($nome_ingrediente2 != $todos_ingredientes->descricao) {
                    $sql = "INSERT INTO ingredientes (descricao) VALUES ('$nome_ingrediente2')";
                    $resultado = $conn->query($sql);

                    $sql = "SELECT id_ingredientes FROM ingredientes ORDER BY id_ingredientes DESC LIMIT 1;";
                    $resultado = $conn->query($sql);
                    $roww = $resultado->fetch_object();

                    $sql = "INSERT INTO receitas_ingredientes (cod_receitas, cod_ingredientes, qntKG) VALUES ('{$row->id_receitas}', '{$roww->id_ingredientes}', '{$quantidade2}')";
                    $resultado = $conn->query($sql);
               }else {

                    $sql = "SELECT * FROM ingredientes WHERE descricao = '{$nome_ingrediente2}'";
                    $resultado = $conn->query($sql);
                    $roww = $resultado->fetch_object();

                    $sql = "INSERT INTO receitas_ingredientes (cod_receitas, cod_ingredientes, qntKG) VALUES ('{$row->id_receitas}', '{$roww->id_ingredientes}', '{$quantidade}')";
                    $resultado = $conn->query($sql);
               }
           }

          //ingrediente 3
          if($nome_ingrediente3 != "") {

               $sql = "SELECT * FROM ingredientes WHERE {$nome_ingrediente3} = descricao";
               $resultado = $conn->query($sql);
               $todos_ingredientes = $resultado->fetch_object();

               if($nome_ingrediente3 != $todos_ingredientes->descricao) {
                    $sql = "INSERT INTO ingredientes (descricao) VALUES ('$nome_ingrediente3')";
                    $resultado = $conn->query($sql);

                    $sql = "SELECT id_ingredientes FROM ingredientes ORDER BY id_ingredientes DESC LIMIT 1;";
                    $resultado = $conn->query($sql);
                    $roww = $resultado->fetch_object();

                    $sql = "INSERT INTO receitas_ingredientes (cod_receitas, cod_ingredientes, qntKG) VALUES ('{$row->id_receitas}', '{$roww->id_ingredientes}', '{$quantidade3}')";
                    $resultado = $conn->query($sql);
               }else {

                    $sql = "SELECT * FROM ingredientes WHERE descricao = '{$nome_ingrediente3}'";
                    $resultado = $conn->query($sql);
                    $roww = $resultado->fetch_object();

                    $sql = "INSERT INTO receitas_ingredientes (cod_receitas, cod_ingredientes, qntKG) VALUES ('{$row->id_receitas}', '{$roww->id_ingredientes}', '{$quantidade}')";
                    $resultado = $conn->query($sql);
               }
           }

          //ingrediente 4
          if($nome_ingrediente4 != "") {

               $sql = "SELECT * FROM ingredientes WHERE {$nome_ingrediente4} = descricao";
               $resultado = $conn->query($sql);
               $todos_ingredientes = $resultado->fetch_object();

               if($nome_ingrediente4 != $todos_ingredientes->descricao) {
                    $sql = "INSERT INTO ingredientes (descricao) VALUES ('$nome_ingrediente4')";
                    $resultado = $conn->query($sql);

                    $sql = "SELECT id_ingredientes FROM ingredientes ORDER BY id_ingredientes DESC LIMIT 1;";
                    $resultado = $conn->query($sql);
                    $roww = $resultado->fetch_object();

                    $sql = "INSERT INTO receitas_ingredientes (cod_receitas, cod_ingredientes, qntKG) VALUES ('{$row->id_receitas}', '{$roww->id_ingredientes}', '{$quantidade4}')";
                    $resultado = $conn->query($sql);
               }else {

                    $sql = "SELECT * FROM ingredientes WHERE descricao = '{$nome_ingrediente4}'";
                    $resultado = $conn->query($sql);
                    $roww = $resultado->fetch_object();

                    $sql = "INSERT INTO receitas_ingredientes (cod_receitas, cod_ingredientes, qntKG) VALUES ('{$row->id_receitas}', '{$roww->id_ingredientes}', '{$quantidade}')";
                    $resultado = $conn->query($sql);
               }
           }

          //ingrediente 5
          if($nome_ingrediente5 != "") {

               $sql = "SELECT * FROM ingredientes WHERE {$nome_ingrediente5} = descricao";
               $resultado = $conn->query($sql);
               $todos_ingredientes = $resultado->fetch_object();

               if($nome_ingrediente5 != $todos_ingredientes->descricao) {
                    $sql = "INSERT INTO ingredientes (descricao) VALUES ('$nome_ingrediente5')";
                    $resultado = $conn->query($sql);

                    $sql = "SELECT id_ingredientes FROM ingredientes ORDER BY id_ingredientes DESC LIMIT 1;";
                    $resultado = $conn->query($sql);
                    $roww = $resultado->fetch_object();

                    $sql = "INSERT INTO receitas_ingredientes (cod_receitas, cod_ingredientes, qntKG) VALUES ('{$row->id_receitas}', '{$roww->id_ingredientes}', '{$quantidade5}')";
                    $resultado = $conn->query($sql);
               }else {

                    $sql = "SELECT * FROM ingredientes WHERE descricao = '{$nome_ingrediente5}'";
                    $resultado = $conn->query($sql);
                    $roww = $resultado->fetch_object();

                    $sql = "INSERT INTO receitas_ingredientes (cod_receitas, cod_ingredientes, qntKG) VALUES ('{$row->id_receitas}', '{$roww->id_ingredientes}', '{$quantidade}')";
                    $resultado = $conn->query($sql);
               }
           }
           
           if($resultado==true) {
                print "<script>alert('Receita cadastrada com sucesso!');</script>";
                print "<script>location.href='?page=listar-receita';</script>";
           }else {
                print "<script>alert('Não foi possível efetual o cadastro!');</script>";
                print "<script>location.href='?page=listar-receita';</script>";
           }
        break;

        case "editar_receita":
          $nome_receita = $_POST["nome_receita"];

          $sql = "UPDATE receitas SET descricao='{$nome_receita}' WHERE id_receitas=".$_REQUEST["id_receitas"];

          $resultado = $conn->query($sql);

          if($resultado==true) {
               print "<script>alert('Editado com sucesso!');</script>";
               print "<script>location.href='?page=listar-receita';</script>";
          }else {
               print "<script>alert('Não foi possível editar o cadastro!');</script>";
               print "<script>location.href='?page=listar-receita';</script>";
          }
        break;

        case "excluir_receita":
          $sql = "DELETE FROM receitas_ingredientes WHERE cod_receitas=".$_REQUEST["id_receitas"];
          $resultado = $conn->query($sql);

          $sql = "DELETE FROM receitas WHERE id_receitas=".$_REQUEST["id_receitas"];
          $resultado = $conn->query($sql);

        if($resultado==true) {
             print "<script>alert('Excluido com sucesso!');</script>";
             print "<script>location.href='?page=listar-receita';</script>";
        }else {
             print "<script>alert('Não foi possível excluir!');</script>";
             print "<script>location.href='?page=listar-receita';</script>";
        }
        break;

        case "cadastrar_ingrediente":
           $nome_ingrediente = $_POST["nome_ingrediente"];

           $sql = "INSERT INTO ingredientes (descricao) VALUES ('$nome_ingrediente')";

           $resultado = $conn->query($sql);

           if($resultado==true) {
                print "<script>alert('Ingrediente cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=listar-ingrediente';</script>";
           }else {
                print "<script>alert('Não foi possível efetual o cadastro!');</script>";
                print "<script>location.href='?page=listar-ingrediente';</script>";
           }
        break;

        case "editar_ingrediente":
          $nome_ingrediente = $_POST["nome_ingrediente"];

          $sql = "UPDATE ingredientes SET descricao='{$nome_ingrediente}' WHERE id_ingredientes=".$_REQUEST["id_ingredientes"];

          $resultado = $conn->query($sql);

          if($resultado==true) {
               print "<script>alert('Editado com sucesso!');</script>";
               print "<script>location.href='?page=listar-ingrediente';</script>";
          }else {
               print "<script>alert('Não foi possível editar o cadastro!');</script>";
               print "<script>location.href='?page=listar-ingrediente';</script>";
          }
        break;

        case "excluir_ingrediente":
               $sql = "DELETE FROM receitas_ingredientes WHERE cod_ingredientes=".$_REQUEST["id_ingredientes"];
               $resultado = $conn->query($sql);

               $sql = "DELETE FROM ingredientes WHERE id_ingredientes=".$_REQUEST["id_ingredientes"];
               $resultado = $conn->query($sql);

          if($resultado==true) {
               print "<script>alert('Excluido com sucesso!');</script>";
               print "<script>location.href='?page=listar-ingrediente';</script>";
          }else {
               print "<script>alert('Não foi possível excluir!');</script>";
               print "<script>location.href='?page=listar-ingrediente';</script>";
          }
        break;
    }
?>