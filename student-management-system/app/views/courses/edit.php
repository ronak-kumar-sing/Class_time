<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
</head>

<body>
    <h1>Edit Course</h1>
    <form action="/courses/update" method="POST">
        <input type="hidden" name="id" value="<?php echo $course->id; ?>">
        <div>
            <label for="title">Course Title:</label>
            <input type="text" id="title" name="title" value="<?php echo $course->title; ?>" required>
        </div>
        <div>
            <label for="description">Course Description:</label>
            <textarea id="description" name="description" required><?php echo $course->description; ?></textarea>
        </div>
        <div>
            <button type="submit">Update Course</button>
        </div>
    </form>
    <a href="/courses">Back to Course List</a>
</body>

</html>