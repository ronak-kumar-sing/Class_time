<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System - Students</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <header>
        <?php include '../layout/header.php'; ?>
    </header>

    <main>
        <h1>Student List</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Enrolled Courses</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- PHP code to fetch and display students will go here -->
                <?php
                // Example of how to loop through students array
                // foreach ($students as $student) {
                //     echo "<tr>
                //             <td>{$student->id}</td>
                //             <td>{$student->name}</td>
                //             <td>{$student->enrolled_courses}</td>
                //             <td>
                //                 <a href='view.php?id={$student->id}'>View</a>
                //                 <a href='edit.php?id={$student->id}'>Edit</a>
                //             </td>
                //           </tr>";
                // }
                ?>
            </tbody>
        </table>
        <a href="add.php">Add New Student</a>
    </main>

    <footer>
        <?php include '../layout/footer.php'; ?>
    </footer>
</body>

</html>