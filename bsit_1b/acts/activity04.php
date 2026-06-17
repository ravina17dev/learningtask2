<html>
    <head>
        <title>Activity04</title>
    </head>
    <body>
        <?php

        if (isset($_POST["btnSubmit"])) {
            $num1 = $_POST["txtFirstNumber"];
            $num2 = $_POST["txtSecondNumber"];
            $operator = $_POST["Operator"];
            $result = 0;
            $operationName = "";

            if ($operator == "+") {
                $result = $num1 + $num2;
                $operationName = "Addition";
            } elseif ($operator == "-") {
                $result = $num1 - $num2;
                $operationName = "Subtraction";
            } elseif ($operator == "*") {
                $result = $num1 * $num2;
                $operationName = "Multiplication";
            } elseif ($operator == "/") {
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Undefined (Cannot divide by zero)";
                }
                $operationName = "Division";
            }
            echo "<h2>Calculation Result:</h2>";
            echo "Operation: <strong>" . $operationName . "</strong><br>";
            echo "Result: <strong>" . $result . "</strong><br><br>";
            echo "<a href='Activity04.php'>Back</a>";

        } else {
        ?>
            <form method="post" action="Activitys04.php">
                <label> First Number </label><br>
                <input type="text" class="form-control" name="txtFirstNumber" placeholder="First Number..."><br>
                
                <label> Second Number </label><br>
                <input type="text" class="form-control" name="txtSecondNumber" placeholder="Second Number..."><br>
                
                <label>Operator</label><br>
                <select name="Operator">
                    <option value="+">Addition</option>
                    <option value="-">Subtraction</option>
                    <option value="*">Multiplication</option>
                    <option value="/">Division</option>
                </select><br><br>
                
                <input class="btn" type="submit" name="btnSubmit" value="Submit" />
                <input class="btn" type="reset" value="Clear"/>
            </form>
        <?php } ?>
    </body>
</html>
