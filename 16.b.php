<!DOCTYPE html>
<html>
<head>
    <title>PHP Associative Array Example</title>
</head>
<body>
    <h2>Associative Array Manipulation</h2>
    <?php
    // Creating an associative array
    $person = array(
        "name" => "Paresh",
        "age" => 23,
        "city" => "New York"
    );

    // Modifying age
    $person["age"] = 24;

    // Adding profession
    $person["profession"] = "Cook";

    // Display person's name
    echo "<p>Name: <b>" . $person["name"] . "</b></p>";

    // Display all details
    echo "<p>Person details:</p><ul>";
    foreach ($person as $key => $value) {
        echo "<li>" . ucfirst($key) . ": " . $value . "</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
