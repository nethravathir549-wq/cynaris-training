# Full-Stack Capstone — 5-Minute Presentation Notes

## 1. Introduction

Hello, my name is Nethravathi R.

For my Full Stack Capstone project, I developed a Developer Portfolio CMS using Laravel.

The purpose of the project is to allow an authenticated user to manage portfolio projects through a web interface and REST API.

## 2. Technologies Used

The project uses:

- PHP
- Laravel
- Blade
- HTML
- CSS
- SQLite
- Laravel Sanctum
- Eloquent ORM
- PHPUnit
- Git and GitHub

## 3. Main Features

The application provides authentication and portfolio project management.

Users can:

- Create projects
- View projects
- Edit projects
- Delete projects
- Add GitHub and live demo links

The application also provides REST API endpoints for project management.

## 4. Database

The project uses SQLite.

A User can have multiple Projects.

This relationship is implemented using:

- `User hasMany Projects`
- `Project belongsTo User`

The projects table contains a `user_id` foreign key.

## 5. REST API

The application provides REST API endpoints for projects.

Public endpoints allow projects to be viewed.

Protected endpoints allow authenticated users to create, update and delete projects.

Laravel Sanctum is used for API authentication.

## 6. Testing

I created five feature tests covering:

1. Viewing projects
2. Creating a project
3. Viewing a project
4. Updating a project
5. Deleting a project

The five tests passed successfully with 12 assertions.

## 7. Git and GitHub

The project was developed using Git and GitHub.

I used feature branches and commits to track the development work.

The capstone work is being developed on:

`feature/week-4-day-5`

## 8. Conclusion

This project helped me combine the concepts learned during the internship, including:

- PHP
- Laravel MVC
- Authentication
- CRUD
- Database relationships
- REST APIs
- Responsive design
- Testing
- Git and GitHub

The project demonstrates how these technologies can be combined to build a complete full-stack web application.