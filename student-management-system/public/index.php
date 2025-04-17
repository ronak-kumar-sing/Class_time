<?php
require_once '../app/config/config.php';
require_once '../app/config/database.php';

// Autoload classes
spl_autoload_register(function ($class_name) {
    include '../app/controllers/' . $class_name . '.php';
});

// Start the session
session_start();

// Routing logic
$requestUri = $_SERVER['REQUEST_URI'];

if ($requestUri === '/login') {
    $controller = new AuthController();
    $controller->login();
} elseif ($requestUri === '/register') {
    $controller = new AuthController();
    $controller->register();
} elseif (strpos($requestUri, '/students') === 0) {
    $controller = new StudentController();
    // Add routing logic for student-related actions
} elseif (strpos($requestUri, '/courses') === 0) {
    $controller = new CourseController();
    // Add routing logic for course-related actions
} else {
    // Default to dashboard
    $controller = new DashboardController();
    $controller->index();
}
?>