<!DOCTYPE html>
<html>
<body>
    <h2>Indexed Array Manipulation</h2>
    <?php
    // Creating an indexed array
    $name = array("Devi", "Fabiola", "Eleanor", "Trent");

    // Adding a new name
    $name[] = "Paxton";

    // Display first name
    echo "<p>First name: <b>" . $name[0] . "</b></p>";

    // Display all name
    echo "<p>All name:</p><ul>";
    for ($i = 0; $i < count($name); $i++) {
        echo "<li>" . $name[$i] . "</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
