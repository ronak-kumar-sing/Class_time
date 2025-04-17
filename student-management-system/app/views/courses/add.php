<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
</head>

<body>
    <h1>Add New Course</h1>
    <form action="/student-management-system/public/index.php?action=addCourse" method="POST">
        <label for="title">Course Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="description">Course Description:</label>
        <textarea id="description" name="description" required></textarea>

        <button type="submit">Add Course</button>
    </form>
</body>

</html>