<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<head>
    <title>Momentum Calculator</title>
</head>
<body>
    <h1>Momentum Calculator</h1>

    <form method="post">
        <label for="mass">Mass (kg):</label>
        <input type="text" name="mass" id="mass" required><br><br>

        <label for="velocity">Velocity (m/s):</label>
        <input type="text" name="velocity" id="velocity" required><br><br>

        <input type="submit" value="Calculate Momentum">
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input from the form
        $mass = $_POST["mass"];
        $velocity = $_POST["velocity"];

        // Check if the inputs are numeric
        if (is_numeric($mass) && is_numeric($velocity)) {
            // Calculate momentum
            $momentum = $mass * $velocity;
            echo "<p>The momentum is: " . $momentum . " kg*m/s</p>";
        } else {
            echo "<p>Mass and velocity must be numeric values.</p>";
        }
    }
    ?>
</body>
</html>

