# Student Management System

This project is a Student Management System designed to manage students, courses, and grades efficiently. It provides functionalities for user authentication, student management, course management, and grade management.

## Project Structure

```
student-management-system
├── app
│   ├── config
│   │   ├── database.php
│   │   └── config.php
│   ├── controllers
│   │   ├── AuthController.php
│   │   ├── StudentController.php
│   │   ├── CourseController.php
│   │   └── GradeController.php
│   ├── models
│   │   ├── User.php
│   │   ├── Student.php
│   │   ├── Course.php
│   │   └── Grade.php
│   └── views
│       ├── auth
│       │   ├── login.php
│       │   └── register.php
│       ├── students
│       │   ├── index.php
│       │   ├── view.php
│       │   ├── add.php
│       │   └── edit.php
│       ├── courses
│       │   ├── index.php
│       │   ├── view.php
│       │   ├── add.php
│       │   └── edit.php
│       ├── layout
│       │   ├── header.php
│       │   ├── footer.php
│       │   └── sidebar.php
│       └── dashboard.php
├── public
│   ├── index.php
│   ├── css
│   │   └── style.css
│   └── js
│       └── main.js
├── database
│   └── migrations.sql
└── README.md
```

## Features

- **User Authentication**: Users can register and log in to the system.
- **Student Management**: Add, view, edit, and list students.
- **Course Management**: Add, view, edit, and list courses.
- **Grade Management**: Assign and view grades for students.

## Setup Instructions

1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Set up the database using the SQL statements in `database/migrations.sql`.
4. Configure the database connection settings in `app/config/database.php`.
5. Run the application by accessing `public/index.php` in your web browser.

## Usage Guidelines

- Ensure you have PHP and a web server (like Apache or Nginx) installed.
- Follow the instructions in the setup section to configure the application.
- Use the provided views to interact with the system for managing students, courses, and grades.

## Contributing

Contributions are welcome! Please submit a pull request or open an issue for any enhancements or bug fixes.