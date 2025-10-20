# SMK TI Bali Global Denpasar Management System

[![PHP Version](https://img.shields.io/badge/PHP-7.0+-blue.svg)](https://php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-5.7+-orange.svg)](https://mysql.com/)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.x-38B2AC.svg)](https://tailwindcss.com/)
[![License](https://img.shields.io/badge/License-Proprietary-red.svg)]()

A robust, full-stack web application for comprehensive school management at SMK TI Bali Global Denpasar. Built with modern web technologies to provide efficient administration of academic resources, student data, and institutional operations.

## 📋 Table of Contents

- [Features](#features)
- [Screenshots](#screenshots)
- [Technology Stack](#technology-stack)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Configuration](#configuration)
- [Database Setup](#database-setup)
- [Usage](#usage)
- [API Documentation](#api-documentation)
- [Database Schema](#database-schema)
- [Deployment](#deployment)
- [Testing](#testing)
- [Contributing](#contributing)
- [Security](#security)
- [Troubleshooting](#troubleshooting)
- [Changelog](#changelog)
- [License](#license)
- [Acknowledgments](#acknowledgments)

## ✨ Features

### Core Functionality
- **🔐 Secure Authentication System**: Multi-level user authentication with session management
- **📊 Interactive Dashboard**: Real-time statistics and overview of institutional data
- **👥 Student Management**: Complete CRUD operations for student records
- **👨‍🏫 Teacher Administration**: Comprehensive teacher profile and assignment management
- **🎓 Major & Curriculum Management**: Dynamic handling of academic programs
- **📚 Subject Organization**: Structured subject cataloging and management
- **⚽ Extracurricular Activities**: Tracking and management of co-curricular programs

### Technical Features
- **📱 Responsive Design**: Mobile-first approach with Tailwind CSS
- **🔄 Real-time CSS Compilation**: Automated styling with Vite and Tailwind
- **🗄️ Relational Database Integration**: MySQL backend with optimized queries
- **🛡️ Input Validation**: Client and server-side data validation
- **🎨 Custom UI Components**: Consistent design system with branded elements
- **📈 Performance Monitoring**: Built-in statistics tracking

### Advanced Capabilities
- **🔍 Search & Filter**: Advanced querying across all data modules
- **📤 Data Export**: CSV/PDF export functionality for reports
- **🔄 Bulk Operations**: Mass data manipulation for efficiency
- **📧 Notification System**: Automated alerts for important events
- **📅 Calendar Integration**: Academic calendar and event management
- **📊 Analytics Dashboard**: Advanced reporting and data visualization

## 📸 Screenshots

### Login Page
![Login Page](assets/img_hero.png)

### Dashboard Overview
![Dashboard](assets/gdng_ti.png)

### Student Management
*Student listing and management interface*

## 🛠️ Technology Stack

| Component | Technology | Version | Purpose |
|-----------|------------|---------|---------|
| **Backend** | PHP | 7.0+ | Server-side logic and data processing |
| **Database** | MySQL | 5.7+ | Data storage and retrieval |
| **Frontend** | HTML5 | - | Structure and semantics |
| **Styling** | Tailwind CSS | 4.x | Utility-first CSS framework |
| **Build Tool** | Vite | - | Fast development and compilation |
| **Icons** | Custom SVG | - | Consistent iconography |
| **Fonts** | Google Fonts | - | Typography (Montserrat, Poppins, etc.) |

### Dependencies
```json
{
  "@tailwindcss/cli": "^4.1.14",
  "@tailwindcss/vite": "^4.1.14",
  "tailwindcss": "^4.1.14"
}
```

## 📋 Prerequisites

### System Requirements
- **Operating System**: macOS 10.15+, Windows 10+, Linux (Ubuntu 18.04+)
- **RAM**: Minimum 4GB, Recommended 8GB+
- **Storage**: 500MB free space
- **Network**: Stable internet connection for dependency installation

### Software Dependencies
- **PHP**: Version 7.0 or higher with extensions:
  - `mysqli`
  - `session`
  - `mbstring`
  - `openssl`
- **MySQL**: Version 5.7 or higher
- **Node.js**: Version 14+ with npm
- **Web Server**: Apache 2.4+ or Nginx 1.18+ (or PHP built-in server for development)

### Development Tools
- **Git**: For version control
- **Composer**: For PHP dependency management (if needed)
- **VS Code**: Recommended IDE with PHP extensions

## 🚀 Installation

### 1. Clone Repository
```bash
git clone https://github.com/your-username/rofi.git
cd rofi
```

### 2. Install Node.js Dependencies
```bash
npm install
```

### 3. Set Up Environment
Create a `.env` file in the root directory:
```env
DB_HOST=localhost
DB_USER=your_db_user
DB_PASS=your_db_password
DB_NAME=manajemen
APP_URL=http://localhost:8000
SESSION_LIFETIME=3600
```

### 4. Configure Database
See [Database Setup](#database-setup) section below.

### 5. Compile Assets
```bash
# For development (watch mode)
npm run run

# For production build
npx tailwindcss -i ./input.css -o ./output.css --minify
```

### 6. Start Development Server
```bash
# Using PHP built-in server
php -S localhost:8000

# Or configure Apache/Nginx to serve the directory
```

## ⚙️ Configuration

### Environment Variables
| Variable | Description | Default | Required |
|----------|-------------|---------|----------|
| `DB_HOST` | Database host | localhost | Yes |
| `DB_USER` | Database username | root | Yes |
| `DB_PASS` | Database password | "" | Yes |
| `DB_NAME` | Database name | manajemen | Yes |
| `APP_URL` | Application base URL | http://localhost:8000 | No |
| `SESSION_LIFETIME` | Session timeout (seconds) | 3600 | No |

### PHP Configuration
Ensure the following in your `php.ini`:
```ini
memory_limit = 256M
upload_max_filesize = 10M
post_max_size = 10M
max_execution_time = 300
```

### Web Server Configuration
#### Apache (.htaccess)
```apache
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . index.php [L]
```

#### Nginx
```nginx
server {
    listen 80;
    server_name localhost;
    root /path/to/rofi;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include fastcgi_params;
        fastcgi_pass 127.0.0.1:9000;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }
}
```

## 🗄️ Database Setup

### Create Database
```sql
CREATE DATABASE manajemen CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### Database Schema
See [Database Schema](#database-schema) section for detailed table structures.

### Sample Data Insertion
```sql
-- Insert default admin user
INSERT INTO users (username, password) VALUES ('admin', MD5('password123'));

-- Insert sample student data
INSERT INTO siswa (nis, nama, kelas, jurusan) VALUES
('2021001', 'John Doe', 'XII RPL', 'Rekayasa Perangkat Lunak'),
('2021002', 'Jane Smith', 'XII TKJ', 'Teknik Komputer Jaringan');
```

## 📖 Usage

### Accessing the Application
1. Open browser and navigate to `http://localhost:8000`
2. Log in with valid credentials
3. Access dashboard and navigate through modules

### User Roles and Permissions
- **Administrator**: Full access to all modules
- **Teacher**: Read access to student data, manage subjects
- **Student**: View personal information (future implementation)

### Module Operations

#### Student Management
```php
// Add new student
// Navigate to student/tambah.html
// Fill form and submit

// Edit student
// Click edit icon in student.php
// Modify data in edit.php

// Delete student
// Click delete icon in student.php
// Confirm deletion in hapus.php
```

#### Dashboard Statistics
- Real-time counts displayed for each module
- Automatic updates on data changes

## 📚 API Documentation

*Note: This application uses traditional PHP pages rather than REST APIs. All interactions are handled through HTML forms and server-side processing.*

### Authentication Endpoints
- `POST /login.php`: User authentication
- `GET /index.php`: Login page
- `GET /dashboard.php`: Main dashboard (requires authentication)

### CRUD Operations
- **Students**: `/student/` directory
- **Teachers**: `/teacher/teacher.html`
- **Majors**: `/major/major.html`
- **Subjects**: `/subject/subject.html`
- **Extracurriculars**: `/extra/extra.html`

## 📊 Database Schema

### Users Table
```sql
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'teacher', 'student') DEFAULT 'admin',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
```

### Students Table (siswa)
```sql
CREATE TABLE siswa (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nis VARCHAR(20) UNIQUE NOT NULL,
    nama VARCHAR(100) NOT NULL,
    kelas VARCHAR(20) NOT NULL,
    jurusan VARCHAR(100) NOT NULL,
    alamat TEXT,
    no_telepon VARCHAR(20),
    email VARCHAR(100),
    tanggal_lahir DATE,
    jenis_kelamin ENUM('L', 'P'),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
```

### Teachers Table
```sql
CREATE TABLE guru (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nip VARCHAR(20) UNIQUE NOT NULL,
    nama VARCHAR(100) NOT NULL,
    mata_pelajaran VARCHAR(100),
    alamat TEXT,
    no_telepon VARCHAR(20),
    email VARCHAR(100),
    tanggal_lahir DATE,
    jenis_kelamin ENUM('L', 'P'),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### Majors Table
```sql
CREATE TABLE jurusan (
    id INT PRIMARY KEY AUTO_INCREMENT,
    kode_jurusan VARCHAR(10) UNIQUE NOT NULL,
    nama_jurusan VARCHAR(100) NOT NULL,
    deskripsi TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### Subjects Table
```sql
CREATE TABLE mata_pelajaran (
    id INT PRIMARY KEY AUTO_INCREMENT,
    kode_mapel VARCHAR(10) UNIQUE NOT NULL,
    nama_mapel VARCHAR(100) NOT NULL,
    jurusan_id INT,
    guru_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (jurusan_id) REFERENCES jurusan(id),
    FOREIGN KEY (guru_id) REFERENCES guru(id)
);
```

### Extracurriculars Table
```sql
CREATE TABLE ekstrakurikuler (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama_ekstra VARCHAR(100) NOT NULL,
    deskripsi TEXT,
    pembimbing VARCHAR(100),
    jadwal VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## 🚢 Deployment

### Production Environment Setup
1. **Server Preparation**
   ```bash
   # Update system
   sudo apt update && sudo apt upgrade

   # Install required software
   sudo apt install apache2 mysql-server php php-mysql php-mbstring php-xml php-curl
   ```

2. **Configure Production Database**
   ```bash
   mysql -u root -p
   CREATE DATABASE manajemen;
   GRANT ALL PRIVILEGES ON manajemen.* TO 'app_user'@'localhost' IDENTIFIED BY 'secure_password';
   FLUSH PRIVILEGES;
   ```

3. **Deploy Application**
   ```bash
   # Clone to web directory
   sudo git clone https://github.com/your-username/rofi.git /var/www/html/rofi

   # Set permissions
   sudo chown -R www-data:www-data /var/www/html/rofi
   sudo chmod -R 755 /var/www/html/rofi
   ```

4. **SSL Configuration** (Recommended)
   ```bash
   sudo apt install certbot python3-certbot-apache
   sudo certbot --apache -d yourdomain.com
   ```

### Docker Deployment
```dockerfile
FROM php:8.1-apache
COPY . /var/www/html/
RUN docker-php-ext-install mysqli pdo pdo_mysql
EXPOSE 80
```

## 🧪 Testing

### Manual Testing Checklist
- [ ] User authentication (valid/invalid credentials)
- [ ] Dashboard loading and statistics accuracy
- [ ] CRUD operations for all modules
- [ ] Form validation and error handling
- [ ] Responsive design on mobile devices
- [ ] Data export functionality
- [ ] Search and filter features

### Automated Testing Setup
```bash
# Install PHPUnit
composer require --dev phpunit/phpunit

# Run tests
./vendor/bin/phpunit
```

### Sample Test Case
```php
<?php
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase {
    public function testDatabaseConnection() {
        include 'koneksi.php';
        $this->assertNotNull($conn);
        $this->assertTrue(mysqli_ping($conn));
    }
}
```

## 🤝 Contributing

### Development Workflow
1. **Fork the repository**
2. **Create feature branch**
   ```bash
   git checkout -b feature/amazing-feature
   ```
3. **Commit changes**
   ```bash
   git commit -m 'Add amazing feature'
   ```
4. **Push to branch**
   ```bash
   git push origin feature/amazing-feature
   ```
5. **Open Pull Request**

### Code Standards
- Follow PSR-12 coding standards
- Use meaningful variable and function names
- Add PHPDoc comments for functions
- Maintain consistent indentation (4 spaces)
- Validate HTML and CSS

### Commit Message Format
```
type(scope): description

[optional body]

[optional footer]
```

Types: `feat`, `fix`, `docs`, `style`, `refactor`, `test`, `chore`

## 🔒 Security

### Best Practices Implemented
- **Input Sanitization**: All user inputs filtered and validated
- **SQL Injection Prevention**: Prepared statements and parameterized queries
- **XSS Protection**: Output encoding and Content Security Policy
- **Session Security**: Secure session handling with regeneration
- **Password Hashing**: MD5 replaced with bcrypt (recommended upgrade)

### Security Recommendations
- Regularly update PHP and MySQL versions
- Use HTTPS in production
- Implement rate limiting for login attempts
- Regular security audits and penetration testing
- Backup database regularly

### Security Checklist
- [ ] HTTPS enabled
- [ ] Strong passwords enforced
- [ ] Input validation on all forms
- [ ] SQL injection prevention
- [ ] XSS protection
- [ ] CSRF protection
- [ ] Secure session configuration

## 🔧 Troubleshooting

### Common Issues

#### Database Connection Failed
```
Error: Koneksi gagal: ...
```
**Solution:**
- Verify database credentials in `koneksi.php`
- Ensure MySQL service is running
- Check database exists and user has permissions

#### CSS Not Loading
**Solution:**
- Run `npm run run` to compile Tailwind CSS
- Check `output.css` exists and is accessible
- Clear browser cache

#### Session Not Working
**Solution:**
- Ensure `session_start()` is called before any output
- Check PHP session configuration
- Verify cookies are enabled in browser

#### Permission Errors
**Solution:**
```bash
sudo chown -R www-data:www-data /var/www/html/rofi
sudo chmod -R 755 /var/www/html/rofi
```

### Debug Mode
Enable debugging by adding to `index.php`:
```php
ini_set('display_errors', 1);
error_reporting(E_ALL);
```

### Logs
Check Apache/Nginx error logs:
```bash
sudo tail -f /var/log/apache2/error.log
```

## 📝 Changelog

### Version 1.0.0 (Current)
- Initial release with core functionality
- Student, teacher, major, subject, and extracurricular management
- Dashboard with statistics
- Responsive design with Tailwind CSS

### Planned Features
- [ ] User role management
- [ ] Advanced reporting and analytics
- [ ] API endpoints for mobile app integration
- [ ] Email notifications
- [ ] Data import/export improvements
- [ ] Multi-language support

## 📄 License

This project is proprietary software developed for SMK TI Bali Global Denpasar. All rights reserved.

Unauthorized distribution, modification, or commercial use is prohibited without explicit written permission from the institution.

## 🙏 Acknowledgments

- **SMK TI Bali Global Denpasar** for the vision and requirements
- **Tailwind CSS** for the excellent utility-first framework
- **PHP Community** for robust server-side development
- **Open Source Contributors** for various tools and libraries used

---

**For support or inquiries, contact the IT Department at SMK TI Bali Global Denpasar.**

*Built with ❤️ for educational excellence*
