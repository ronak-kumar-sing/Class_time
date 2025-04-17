<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>

<body>
    <h1>Edit Student</h1>
    <form action="/student-management-system/public/index.php?action=updateStudent" method="POST">
        <input type="hidden" name="id" value="<?php echo $student->id; ?>">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $student->name; ?>" required>
        </div>
        <div>
            <label for="courses">Enrolled Courses:</label>
            <select id="courses" name="courses[]" multiple>
                <?php foreach ($courses as $course): ?>
                    <option value="<?php echo $course->id; ?>" <?php echo in_array($course->id, $student->courses) ? 'selected' : ''; ?>>
                        <?php echo $course->title; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <button type="submit">Update Student</button>
        </div>
    </form>
</body>

</html>