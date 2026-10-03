# Developer Portfolio CMS

A full-stack developer portfolio management system built with Laravel.  
The application allows an authenticated user to manage portfolio projects through a web interface and REST API.

## Features

- User authentication
- Portfolio project management
- Create, read, update and delete projects
- Project ownership using database relationships
- REST API for project management
- Laravel Sanctum API authentication
- Form validation
- Responsive user interface
- PHPUnit feature testing
- SQLite database
- Laravel Eloquent ORM

## Tech Stack

- **Backend:** PHP, Laravel
- **Frontend:** HTML, CSS, Blade
- **Database:** SQLite
- **API:** REST API, Laravel Sanctum
- **Testing:** PHPUnit
- **Version Control:** Git and GitHub

## Project Structure

```text
app/
├── Http/
│   └── Controllers/
│       ├── ProjectController.php
│       └── Api/
│           └── ProjectController.php
│
├── Models/
│   ├── User.php
│   └── Project.php
│
resources/
├── views/
│   └── projects/
│       ├── index.blade.php
│       ├── create.blade.php
│       ├── show.blade.php
│       └── edit.blade.php
│
└── css/
    └── app.css

tests/
└── Feature/
    └── ProjectCrudTest.php