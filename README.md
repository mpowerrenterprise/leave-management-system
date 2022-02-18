# Deep11 Leave Management System

![](github-readme-content/banner-image.jpg)  


## Introduction

A leave management system is a process within an organization that determines how leave is requested by employees and approved by managers, as well as how it is tracked for payroll, balance, and other purposes.

This leave management system has some basic features such as leave requests, leave tracking, approval and etc.

## Technologies
- Laravel Framework 8.75.0
- MySQL


## Configuration and Setup

This management system is written in Laravel framework. The database is written as a migration file where we can trigger that migration script to deploy the database automatically.

### Database Migrations

#### Step 1:
- Create an empty database in the MySQL with the name of **deep11_leave_management**

![](github-readme-content/create-database.jpg)  


#### Step 2:

- Navigate to the project folder using CMD / Terminal / cPanel SSH.

![](github-readme-content/cmd.jpg)  

- Execute the bellow command to migrate the database.

  ```
    php artisan migrate
  ```
