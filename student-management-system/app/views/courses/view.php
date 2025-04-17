<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details</title>
</head>

<body>
    <h1>Course Details</h1>
    <?php if (isset($course)): ?>
        <h2><?php echo htmlspecialchars($course->title); ?></h2>
        <p><?php echo htmlspecialchars($course->description); ?></p>
        <p><strong>Course ID:</strong> <?php echo htmlspecialchars($course->id); ?></p>
    <?php else: ?>
        <p>No course found.</p>
    <?php endif; ?>
</body>

</html>