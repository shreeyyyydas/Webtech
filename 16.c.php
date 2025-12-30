<!DOCTYPE html>
<html>
<head>
    <title>PHP Multidimensional Array Example</title>
</head>
<body>
    <h2>Multidimensional Array Manipulation</h2>
    <?php
    // Creating a multidimensional array of student marks
    $students = array(
        "Raghav" => array("Maths" => 95, "Physics" => 90),
        "Sayli" => array("Maths" => 88, "Physics" => 92)
    );

    // Adding a new student
    $students["Dev"] = array("Maths" => 80, "Physics" => 85);


    // Display all students and marks
    echo "<p>All students and their marks:</p>";
    foreach ($students as $name => $subjects) {
        echo "<strong>" . $name . "</strong>:<ul>";
        foreach ($subjects as $subject => $marks) {
            echo "<li>" . $subject . ": " . $marks . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
