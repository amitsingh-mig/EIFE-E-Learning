# EIFE E-Learning Bilateral Exchange Portal

Welcome to the **EIFE E-Learning Platform**! This project is a modern, responsive, and dynamic Learning Management System (LMS) built with Laravel. It is designed to facilitate bilateral academic exchanges, credit transfers, and course enrollments between international universities (like St. Petersburg State University and Guru Nanak College).

## 🚀 Features

- **Dynamic Course Catalog:** Browse and search courses with server-side filtering, pagination, and sorting.
- **University Profiles:** Dedicated landing pages for partner universities displaying their course offerings.
- **Student Dashboard (My Learning):** 
  - Track course progress dynamically.
  - View upcoming events and webinars.
  - Save private scratchpad notes (using localStorage syncing).
- **Interactive Video Learning:** HLS video player integration with fallback support for MP4 formats.
- **Discussion Forums:** Nested comments and reply threads for student-instructor engagement on every lesson.
- **Secure Authentication:** User registration and login using Laravel's robust authentication and session handling.
- **API-Driven Frontend:** JavaScript interfaces utilize asynchronous `fetch` calls to Laravel API endpoints for a seamless, SPA-like experience.

## 🛠️ Technology Stack

- **Backend:** Laravel 11.x / PHP 8.2+
- **Database:** MySQL
- **Frontend:** Blade Templating, HTML5, Vanilla JavaScript
- **Styling:** Bootstrap 5, Custom Vanilla CSS
- **Media Player:** Video.js

## 🗄️ Database Architecture

The platform relies on a normalized relational database schema:
- `users`: Core authentication for students and instructors.
- `universities`: Partner university details.
- `courses`: Available subjects linked to universities.
- `modules` & `lessons`: Hierarchical curriculum structures.
- `events`: Scheduled webinars and quizzes.
- `comments`: Self-referencing table for multi-level discussion threads.
- `enrollments` & `lesson_user`: Pivot tables handling student registrations and progress tracking.

## ⚙️ Installation & Setup

Follow these instructions to run the application locally on your machine.

### Prerequisites
- PHP >= 8.2
- Composer
- Node.js & NPM (optional, for frontend asset compilation)
- XAMPP / WAMP / Laragon (for MySQL database)

### Steps

1. **Clone the Repository**
   *(Assuming you already have the codebase in your local environment)*

2. **Install Dependencies**
   Navigate to the project root and run:
   ```bash
   composer install
   ```

3. **Environment Setup**
   Copy the example environment file and configure it:
   ```bash
   cp .env.example .env
   ```
   Open the `.env` file and update your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=e-learning-db
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

5. **Run Migrations and Seed the Database**
   Make sure your MySQL service is running via XAMPP/WAMP, then execute:
   ```bash
   php artisan migrate:fresh --seed
   ```
   *This command will create all necessary tables and populate them with sample Universities, Courses, Lessons, and Comments.*

6. **Start the Local Development Server**
   ```bash
   php artisan serve
   ```
   The application will be accessible at `http://127.0.0.1:8000/`.

## 📜 Usage

- **Home Page:** Start at `http://127.0.0.1:8000/` to see the hero section and featured universities.
- **Registration:** Click "Register" to create a new student account.
- **Course Catalog:** Navigate to `/unistry` to search and filter courses.
- **Learning Interface:** Once logged in, interact with the video player and discussion sections under the My Learning portal.

## 🤝 Contributing

This project is currently maintained by the EIFE development team. When pushing new features:
1. Ensure all new models have corresponding Migrations and Seeders.
2. Keep UI components responsive using Bootstrap grids.
3. Place complex API endpoints inside `ApiController` and secure them with `auth` middleware.

---
*Built with ❤️ for global education.*
