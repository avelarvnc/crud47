<?php

    include_once("../conn.php");

    $email = $_GET["email"];

    $sql = "SELECT * FROM pessoa WHERE email = '$email'";
    
    $result = $conn->query($sql); //executando a busca no banco de dados e armazenando o retorno na variável result

    if ($result-> num_rows > 0) //se o número de linhas de resultado for maior do que zero
    {
        //imprimir o resultado
        
        $linha = $result->fetch_assoc(); //pegar a próxima linha de dados

        echo "<p>Nome: " . $linha['nome'] . "</p> <p>E-mail: " . $linha['email'] . "</p>";

    }
    else
    {
        echo "<p>Nenhum registro foi encontrado.</p>";
    }

    $conn->close();

?>