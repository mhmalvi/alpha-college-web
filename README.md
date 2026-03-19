# Alpha College Web

The official website and admin portal for **Alpha College**, built with Laravel 8 and Jetstream. This platform provides a public-facing college website with blog management, course listings, and an authenticated administration panel.

## Overview

Alpha College Web is a server-rendered Laravel application that serves as both the public website and content management system for the institution. It features a Jetstream-powered authentication system with Livewire for interactive components, Tailwind CSS styling, and a clean admin interface for content management.

## Tech Stack

| Layer       | Technology                                        |
|-------------|---------------------------------------------------|
| Backend     | PHP 7.3+ / 8.0, Laravel 8                       |
| Frontend    | Blade Templates, Livewire, Tailwind CSS           |
| Auth        | Laravel Jetstream (Livewire stack), Fortify        |
| Database    | MySQL                                             |
| Media       | Intervention Image                                |
| SEO         | Eloquent Sluggable                                |
| Build Tools | Laravel Mix 5, Webpack                            |
| Testing     | PHPUnit                                           |

## Key Features

### Public Website
- Homepage with institutional information
- Course catalog display
- Blog with category-based organization
- SEO-friendly sluggable URLs

### Blog Management
- Full blog CRUD (create, read, update, delete)
- Category management
- Rich content editor
- Image upload and processing

### Admin Panel
- Secure admin dashboard
- Blog and category management interface
- Profile settings and account management
- Breadcrumb navigation for intuitive workflow

### Authentication
- User registration and login
- Two-factor authentication support
- Password reset workflows
- Profile management with photo uploads
- File download capabilities

## Project Structure

```
app/
├── Http/Controllers/
│   ├── Admin/              # Blog, category, and dashboard controllers
│   ├── CourseController.php
│   ├── HomeController.php
│   └── BlogController.php  # Public blog display (if applicable)
├── Models/                 # Blog, Category, User
├── Actions/Fortify/        # Jetstream auth actions
└── Actions/Jetstream/      # User management actions
resources/views/
├── admin/                  # Admin panel templates
│   ├── blogs/              # Blog CRUD views
│   ├── categories/         # Category management
│   ├── components/         # Shared admin components
│   ├── layouts/            # Admin layout templates
│   └── settings/           # Profile settings
├── auth/                   # Authentication views
└── api/                    # API token management
routes/
├── admin.php               # Admin panel routes
├── web.php                 # Public web routes
└── api.php                 # API routes
```

## Prerequisites

- PHP >= 7.3
- Composer
- Node.js & npm
- MySQL

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/mhmalvi/alpha-college-web.git
   cd alpha-college-web
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Configure environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Set up the database**

   Configure your MySQL connection in `.env` and run:
   ```bash
   php artisan migrate
   ```

5. **Build frontend assets**
   ```bash
   npm run dev        # Development
   npm run production # Production
   ```

6. **Start the server**
   ```bash
   php artisan serve
   ```

## License

This project is proprietary software developed for Alpha College.