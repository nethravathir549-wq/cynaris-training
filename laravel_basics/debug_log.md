# Week 4 Day 4 — Testing & Debugging Log

## 1. PHPUnit Feature Tests

Created 5 feature tests covering:

1. Homepage loads successfully
2. User registration
3. User login
4. Student CRUD create
5. Student CRUD delete

All 5 required feature tests passed successfully.

## 2. Laravel Debugbar

Laravel Debugbar was installed and used to inspect the application.

Homepage profiling showed:

- Queries: 3
- Duplicate queries: 2
- Memory usage: approximately 23 MB
- Query time: approximately 20.53 ms

Debugbar helped identify database queries and application performance information.

## 3. Debugging with dd()

Used `dd()` in `HomeController.php` to inspect variables.

Output:

- Name: Nethravathi
- Course: BCA

`dd()` displayed the values and stopped execution.

## 4. Debugging with dump()

Replaced `dd()` with `dump()`.

The values were displayed:

- Name: Nethravathi
- Course: BCA

Unlike `dd()`, `dump()` allowed the application to continue executing and the homepage loaded normally.

## 5. Application Logging

Added Laravel logging using `Log::info()` in `HomeController.php`.

Example log message:

`Homepage debugging test`

The log was successfully written to:

`storage/logs/laravel.log`

Logged data included:

- Name: Nethravathi
- Course: BCA

## 6. Result

Testing and debugging tools were successfully used to inspect application behaviour, database queries, memory usage, variables, and application logs.