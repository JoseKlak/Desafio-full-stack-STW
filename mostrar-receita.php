<?php
    $row1 = false;
    $row2 = false;
    $row3 = false;
    $row4 = false;
    $row5 = false;

    //puxando o cabeçalho
    $sql = "SELECT * FROM receitas WHERE id_receitas=".$_REQUEST["id_receitas"];
    $resultado = $conn->query($sql);
    $row = $resultado->fetch_object();

    //puxando na tabela relacional o ingrediente 1
    $sql = "SELECT * FROM receitas_ingredientes WHERE cod_receitas = ".$_REQUEST["id_receitas"];
    $resultado = $conn->query($sql);
    $row1 = $resultado->fetch_object();

    while($row1 == true) {
        if($row1 == true) {
            $sql = "SELECT * FROM ingredientes WHERE id_ingredientes = ".$row1->cod_ingredientes;
            $resultado = $conn->query($sql);
            $nome = $resultado->fetch_object();
        }else   
            break;

            //puxando na tabela relacional o ingrediente 2
            $sql = "SELECT * FROM receitas_ingredientes WHERE cod_receitas = {$_REQUEST["id_receitas"]} and cod_ingredientes !={$row1->cod_ingredientes}";
            $resultado = $conn->query($sql);
            $row2 = $resultado->fetch_object();

        if($row2 == true) {
            $sql = "SELECT * FROM ingredientes WHERE id_ingredientes = ".$row2->cod_ingredientes;
            $resultado = $conn->query($sql);
            $nome2 = $resultado->fetch_object();
        }else   
            break;

        //puxando na tabela relacional o ingrediente 3
        $sql = "SELECT * FROM receitas_ingredientes WHERE cod_receitas = {$_REQUEST["id_receitas"]} and cod_ingredientes !={$row2->cod_ingredientes} and cod_ingredientes != {$row1->cod_ingredientes}";
        $resultado = $conn->query($sql);
        $row3 = $resultado->fetch_object();

        if($row3 == true) {
            $sql = "SELECT * FROM ingredientes WHERE id_ingredientes = ".$row3->cod_ingredientes;
            $resultado = $conn->query($sql);
            $nome3 = $resultado->fetch_object();
        }else   
            break;

        //puxando na tabela relacional o ingrediente 4
        $sql = "SELECT * FROM receitas_ingredientes WHERE cod_receitas = {$_REQUEST["id_receitas"]} and cod_ingredientes !={$row3->cod_ingredientes} and cod_ingredientes != {$row2->cod_ingredientes} and cod_ingredientes != {$row1->cod_ingredientes}";
        $resultado = $conn->query($sql);
        $row4 = $resultado->fetch_object();

        if($row4 == true) {
            $sql = "SELECT * FROM ingredientes WHERE id_ingredientes = ".$row4->cod_ingredientes;
            $resultado = $conn->query($sql);
            $nome4 = $resultado->fetch_object();
        }else   
            break;

        //puxando na tabela relacional o ingrediente 5
        $sql = "SELECT * FROM receitas_ingredientes WHERE cod_receitas = {$_REQUEST["id_receitas"]} and cod_ingredientes !={$row4->cod_ingredientes} and cod_ingredientes != {$row3->cod_ingredientes} and cod_ingredientes != {$row2->cod_ingredientes} and cod_ingredientes != {$row1->cod_ingredientes}";
        $resultado = $conn->query($sql);
        $row5 = $resultado->fetch_object();

        if($row5 == true) {
            $sql = "SELECT * FROM ingredientes WHERE id_ingredientes = ".$row5->cod_ingredientes;
            $resultado = $conn->query($sql);
            $nome5 = $resultado->fetch_object();
            break;
        }else 
            break;
    }

        print "<table class='table table-hover  table-striped table-bordered'>";

            print "<tr>";
                print "<td>Codigo receita: <strong>$row->id_receitas</td>";
                print "<td colspan='3'>Nome da receita: <strong>$row->descricao</td>";
            print "</tr>";

            print "<tr>";
                print "<td colspan='4'><strong>Ingredientes</td>";
            print "</tr>";

            print "<tr>";
                print "<td>Ordem</td>";
                print "<td>Cod. ingrediente</td>";
                print "<td>Nome Ingrediente</td>";
                print "<td>Previsto em KG</td>";
            print "</tr>";
            
        if($row1 == true) {
            print "<tr>";
                print "<td>01</td>";
                print "<td>$row1->cod_ingredientes</td>";
                print "<td>$nome->descricao</td>";
                print "<td>$row1->qntKG</td>";
            print "</tr>";
        }

        if($row2 == true) {
            print "<tr>";
                print "<td>02</td>";
                print "<td>$row2->cod_ingredientes</td>";
                print "<td>$nome2->descricao</td>";
                print "<td>$row2->qntKG</td>";
            print "</tr>";
        }

        if($row3 == true) {
            print "<tr>";
                print "<td>03</td>";
                print "<td>$row3->cod_ingredientes</td>";
                print "<td>$nome3->descricao</td>";
                print "<td>$row3->qntKG</td>";
            print "</tr>";
        }

        if($row4 == true) {
            print "<tr>";
                print "<td>04</td>";
                print "<td>$row4->cod_ingredientes</td>";
                print "<td>$nome4->descricao</td>";
                print "<td>$row4->qntKG</td>";
            print "</tr>";
        }

        if($row5 == true) {
            print "<tr>";
                print "<td>05</td>";
                print "<td>$row5->cod_ingredientes</td>";
                print "<td>$nome5->descricao</td>";
                print "<td>$row5->qntKG</td>";
            print "</tr>";
        }
?>