<?php
include('ClasseSequencia.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência</title>
    <link rel="stylesheet" href="style.css">

    //código para mostrar números impares ou pares quando desejado
    
</head>

<body>
    <style>

    </style>

    <form action="Sequencia.php" method="post">

        <label>Selecione o valor inicial:</label>

        <select name="inicio" id="inicio">
            <?php
            for ($i = 1; $i <= 100; $i++) {
                echo '<option value="' . $i . '">' . $i . '</option>';
            }
            ?>
        </select>

        <br><br>
        <label>Selecione o valor final:</label>

        <select name="fim" id="fim">
            <?php
            for ($i = 1; $i <= 100; $i++) {
                echo '<option value="' . $i . '">' . $i . '</option>';
            }
            ?>
        </select>

        <label>
            <h4>Mostrar:</h4>
        </label>
        <input type="radio" id="todos" name="tipo" value="todos" checked>
        <label>todos</label><br>


        <input type="radio" id="pares" name="tipo" value="pares">
        <label>Apenas pares:</label><br>

        <input type="radio" id="impares" name="tipo" value="impares">
        <label>Apenas impares:</label><br>

        <br>
        <input type="submit" name="submit" value="Mostrar sequência"><br>

        <div id="resultado"></div>

    </form>

    <div id="resultado">
        <?php
        if (isset($_POST['submit'])) {
            $sequencia = new Sequencia();
            $sequencia->setInicio($_POST['inicio']);
            $sequencia->setFim($_POST['fim']);

            if ($_POST['tipo'] == 'todos') {
                $sequencia->exibirTodosNumeros();
            } else if ($_POST['tipo'] == 'pares') {
                $sequencia->exibirPares();
            } else if ($_POST['tipo'] == 'impares') {
                $sequencia->exibirImpares();
            }
        }
        ?>
    </div>



</body>

</html>
