<?php
$conn = new mysqli("localhost", "root", "", "student_db");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$message = "";
if (isset($_POST['submit'])) {
  // Validate inputs
  $name = trim($_POST['name']);
  $class = trim($_POST['class']);
  $email = trim($_POST['email']);

  if (empty($name) || empty($class) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $message = "<div class='error'>Please fill all fields with valid data.</div>";
  } else {
    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO students (name, class, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $class, $email);

    if ($stmt->execute()) {
      $message = "<div class='success'>Student added successfully!</div>";
    } else {
      $message = "<div class='error'>Error: " . $stmt->error . "</div>";
    }
    $stmt->close();
  }
}
$conn->close();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Student Management</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      padding: 40px;
    }

    form {
      background: white;
      padding: 20px;
      width: 300px;
      margin: auto;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
    }

    input,
    button {
      width: 100%;
      margin: 10px 0;
      padding: 10px;
      box-sizing: border-box;
    }

    button {
      background: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
      font-weight: bold;
    }

    button:hover {
      background: #45a049;
    }

    .success {
      text-align: center;
      color: green;
      margin-bottom: 15px;
    }

    .error {
      text-align: center;
      color: red;
      margin-bottom: 15px;
    }
  </style>
</head>

<body>
  <h2 style="text-align:center;">Add Student</h2>
  <?php echo $message; ?>
  <form method="POST">
    <input type="text" name="name" placeholder="Student Name" required>
    <input type="text" name="class" placeholder="Class" required>
    <input type="email" name="email" placeholder="Email" required>
    <button type="submit" name="submit">Submit</button>
  </form>
</body>

</html>