<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <style>
        input[type="text"] {
            width: 200px;
        }
    </style>
    input[type="text"] {
            width: 200px;
        }
    </style>
</head>
<body>
    <h1>Calculadora PHP</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="num1" placeholder="Número 1">
        <select name="operator">
            <option value="add">Sumar</option>
            <option value="subtract">Restar</option>
            <option value="multiply">Multiplicar</option>
            <option value="divide">Dividir</option>
        </select>
        <input type="text" name="num2" placeholder="Número 2">
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];
        $result = 0;

        switch ($operator) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Error: No puedes dividir entre 0.";
                }
                break;
            default:
                echo "Operador no válido";
        }

        echo "<h2>Resultado:</h2>";
        echo "<p>$num1 $operator $num2 = $result</p>";
    }
    ?>
</body>
</html>
