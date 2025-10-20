# SMK TI Bali Global Denpasar Management Website

A comprehensive web-based school management system for SMK TI Bali Global Denpasar, built with PHP and MySQL. This application provides an intuitive interface for managing students, teachers, majors, subjects, and extracurricular activities.

## Features

- **User Authentication**: Secure login system for administrators
- **Dashboard Overview**: Centralized view with statistics and quick access to modules
- **Student Management**: Add, edit, delete, and view student records
- **Teacher Management**: Manage teacher information and assignments
- **Major Management**: Handle different academic majors offered by the school
- **Subject Management**: Organize and maintain curriculum subjects
- **Extracurricular Management**: Track and manage extracurricular activities
- **Responsive Design**: Mobile-friendly interface using Tailwind CSS

## Technology Stack

- **Backend**: PHP 7+
- **Database**: MySQL
- **Frontend**: HTML5, CSS3, JavaScript
- **Styling**: Tailwind CSS
- **Build Tool**: Vite (for CSS compilation)
- **Icons & Images**: Custom assets

## Prerequisites

Before running this application, make sure you have the following installed:

- PHP 7.0 or higher
- MySQL 5.7 or higher
- Node.js and npm (for CSS compilation)
- A web server (Apache, Nginx) or PHP built-in server

## Installation and Setup

1. **Clone the repository:**
   ```bash
   git clone <repository-url>
   cd rofi
   ```

2. **Install dependencies:**
   ```bash
   npm install
   ```

3. **Compile CSS:**
   ```bash
   npm run run
   ```
   This will start the Tailwind CSS watcher to compile `input.css` to `output.css`.

4. **Set up the web server:**
   - Place the project files in your web server's document root
   - Ensure PHP is enabled and configured
   - For local development, you can use PHP's built-in server:
     ```bash
     php -S localhost:8000
     ```

## Database Setup

1. **Create the database:**
   - Create a MySQL database named `manajemen`

2. **Import database schema:**
   - The application expects the following tables:
     - `users` (for authentication)
     - `siswa` (students)
     - And other tables for teachers, majors, subjects, etc.
   - You'll need to create these tables based on the application's requirements. The schema isn't provided in the codebase, so you'll need to infer it from the PHP files or create appropriate tables.

3. **Configure database connection:**
   - Update `koneksi.php` with your database credentials:
     ```php
     $host = "localhost";
     $user = "your_username";
     $pass = "your_password";
     $db = "manajemen";
     ```

## Usage

1. **Access the application:**
   - Open your browser and navigate to the application URL (e.g., `http://localhost:8000`)

2. **Login:**
   - Use valid credentials to log into the system

3. **Navigate the dashboard:**
   - Use the sidebar to access different management modules
   - View statistics and manage data for each category

4. **Manage data:**
   - **Students**: Add new students, edit existing records, or remove entries
   - **Teachers**: Similar CRUD operations for teacher management
   - **Majors/Subjects/Extracurriculars**: Manage respective data categories

## Project Structure

```
rofi/
├── index.php              # Login page
├── login.php              # Login processing
├── dashboard.php          # Main dashboard
├── koneksi.php            # Database connection
├── package.json           # Node.js dependencies
├── vite.config.ts         # Vite configuration
├── input.css              # Tailwind CSS input
├── output.css             # Compiled CSS
├── assets/                # Images, icons, and static files
│   ├── logo_TI.png
│   ├── img_hero.png
│   ├── gdng_ti.png
│   └── icon/
├── student/               # Student management pages
│   ├── student.php
│   ├── edit.php
│   ├── hapus.php
│   └── tambah.html
├── teacher/               # Teacher management
│   └── teacher.html
├── major/                 # Major management
│   └── major.html
├── subject/               # Subject management
│   └── subject.html
└── extra/                 # Extracurricular management
    └── extra.html
```

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This project is proprietary software for SMK TI Bali Global Denpasar. All rights reserved.

## Support

For support or questions, please contact the development team at SMK TI Bali Global Denpasar.

---

**Note**: This application is designed specifically for SMK TI Bali Global Denpasar and may require customization for use in other institutions.
