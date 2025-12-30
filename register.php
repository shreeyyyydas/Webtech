<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
</head>
<body>
    <h2>Student Registration Form</h2>
    <form method="post" action="display.php">
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" required><br><br>

        <label>Gender:</label><br>
        <input type="radio" id="male" name="gender" value="Male" required>
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="Female" required>
        <label for="female">Female</label><br><br>

        <label>Hobbies:</label><br>
        <input type="checkbox" id="sports" name="hobbies[]" value="Sports">
        <label for="sports">Sports</label><br>
        <input type="checkbox" id="reading" name="hobbies[]" value="Reading">
        <label for="reading">Reading</label><br>
        <input type="checkbox" id="music" name="hobbies[]" value="Music">
        <label for="music">Music</label><br><br>

        <label for="course">Course:</label><br>
        <select id="course" name="course" required>
            <option value="">--Select a course--</option>
            <option value="Computer Science">Computer Science</option>
            <option value="Mathematics">Mathematics</option>
            <option value="Physics">Physics</option>
        </select><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
