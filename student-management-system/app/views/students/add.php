<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>

<body>
    <h1>Add New Student</h1>
    <form action="/student-management-system/public/index.php?action=addStudent" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="course">Enrolled Course:</label>
        <input type="text" id="course" name="course" required>
        
        <button type="submit">Add Student</button>
    </form>
</body>

</html>