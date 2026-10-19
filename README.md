# Clinic-Management-System

A project developed during my Diploma in Computer Science using PHP and HTML.

## Prerequisites

- Download the source code ZIP file.
- Install XAMPP 8.0.30.
- Extract the project and copy its folder into the XAMPP `htdocs` directory.
- Start Apache and MySQL in the XAMPP Control Panel.

## Database Setup

1. Click **MySQL Admin** in the XAMPP Control Panel to open phpMyAdmin.
2. Import `clinic.sql` into the database.
3. Go to **User Accounts** and create a MySQL user with the following details:
   - **Username:** `bankuser`
   - **Host:** `localhost`
   - **Password:** `test123`
4. Grant the user the required privileges for the `clinic` database.

## How to Run

1. Start Apache and MySQL in the XAMPP Control Panel.
2. Make sure the XAMPP dashboard is accessible.
3. Open your browser and enter the following URL:

   `http://localhost/project/loginform.php`

   *Note: Replace `project` with your actual project folder name if it is different.*

4. Use the following test account to log in:
   - **ID:** `1`
   - **Password:** `123456`
5. You can now interact with the system.
