<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>

<body>
    <h1>Student Details</h1>
    <?php if (isset($student)): ?>
        <p><strong>ID:</strong> <?php echo htmlspecialchars($student->id); ?></p>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($student->name); ?></p>
        <p><strong>Enrolled Courses:</strong></p>
        <ul>
            <?php foreach ($student->courses as $course): ?>
                <li><?php echo htmlspecialchars($course->title); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No student found.</p>
    <?php endif; ?>
</body>

</html>