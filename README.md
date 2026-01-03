# Simple Task Management System
This is a simple task management system built using Laravel that allows users to create, view, update, and delete tasks with priority and status tracking.

## 📌 Features 
- Create new tasks
- Edit the tasks
- Delate tasks
- Shows task status:
    - Pending
    - Completed
- Has Task Priority:
      - Low
      - Medium
      - High

## 🛠 Tech Stack
- Backend: Laravel (PHP)
- Database: MySQL
- Frontend: Blade Templates, Bootstrap
- Version Control: Git & GitHub

## 📂 Project Structure
app/<br>
database/<br>
resources/<br>
routes/<br>
public/<br>
composer.json<br>
artisan

## ⚙️ Setup Instructions
1. Clone the repository
    ```bash
    git clone https://github.com/USERNAME/laravel-task-manager.git<br>
    cd laravel-task-manager
    ```

2. Install dependencies
    ```bash
    composer install
    ```

3. Environment setup
    ```bash
    cp .env.example .env
    ```
    - Update the .env file with your database details:
        ```bash
        DB_DATABASE=your_database_name
        DB_USERNAME=your_username
        DB_PASSWORD=your_password
        ```
4. Generate the application key
    ```bash
    php artisan key:generate
    ```
5. Run the database migrations
    ```bash
    php artisan migrate
    ```
6. Start the server
    ```bash
    php artisan serve
    ```

## 📌 Author

Shipali<br>
MCA Student<br>
Laravel Task Manager – Technical Assessment Project<br>


