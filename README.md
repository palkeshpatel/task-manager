# 📋 Task Management System

A modern, feature-rich task management application built with Laravel 12, featuring real-time interactivity, beautiful UI, and comprehensive project tracking capabilities.

![Laravel](https://img.shields.io/badge/Laravel-12.x-red.svg)
![PHP](https://img.shields.io/badge/PHP-8.2+-blue.svg)
![Tailwind CSS](https://img.shields.io/badge/Tailwind%20CSS-3.x-38B2AC.svg)
![License](https://img.shields.io/badge/License-MIT-green.svg)

## 🚀 Features

### 📊 Dashboard & Analytics

-   **Real-time Statistics**: Total projects, tasks, completion rates
-   **Visual Progress Tracking**: Interactive progress bars and charts
-   **Recent Activities**: Complete audit trail of user actions
-   **Quick Actions**: Fast access to create projects and tasks

### 🗂️ Project Management

-   **Full CRUD Operations**: Create, read, update, delete projects
-   **Progress Visualization**: Automatic completion percentage calculation
-   **Task Organization**: Group tasks by projects
-   **Project Statistics**: Task counts and completion metrics

### ✅ Task Management

-   **Complete Task Lifecycle**: From creation to completion
-   **Status Management**: Toggle between pending/completed without page reload
-   **Advanced Filtering**: Filter by status, project, or search terms
-   **Due Date Tracking**: Schedule and monitor task deadlines
-   **Real-time Updates**: AJAX-powered interactions

### 🔐 Authentication & Security

-   **User Registration & Login**: Secure authentication system
-   **Protected Routes**: Middleware-based access control
-   **Activity Logging**: Track all user actions for audit purposes
-   **Input Validation**: Comprehensive form validation

### 🎨 Modern UI/UX

-   **Responsive Design**: Mobile-first approach with Tailwind CSS
-   **Interactive Elements**: Alpine.js for dynamic behavior
-   **Clean Interface**: Professional styling with Font Awesome icons
-   **Smooth Animations**: Hover effects and transitions
-   **Alternating Row Colors**: Enhanced table readability

## 🛠️ Tech Stack

-   **Backend**: Laravel 12 (PHP 8.2+)
-   **Frontend**: Tailwind CSS, Alpine.js, jQuery
-   **Database**: MySQL/SQLite
-   **Icons**: Font Awesome 6
-   **Authentication**: Laravel's built-in authentication
-   **Real-time**: AJAX for seamless interactions

## 📋 Requirements

-   PHP 8.2 or higher
-   Composer
-   Node.js & NPM (for asset compilation)
-   MySQL 8.0+ or SQLite
-   Web server (Apache/Nginx) or Laravel's built-in server

## 🚀 Installation & Setup

### 1. Clone the Repository

```bash
git clone <repository-url>
cd task-manager
```

### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies (if using asset compilation)
npm install
```

### 3. Environment Configuration

```bash
# Copy environment file
cp .env.example .env

```

### 4. Database Setup

Configure your database in `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_manager
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 5. Run Migrations

```bash
php artisan migrate
php artisan migrate:fresh --seed
```

### 6. Start the Application

```bash
# Development server
php artisan serve

# The application will be available at http://localhost:8000
```

## 🎯 Usage

### Getting Started

1. **Register**: Create a new account at `/register`
2. **Login**: Access your account at `/login`
3. **Dashboard**: View your overview at `/dashboard`

### Creating Projects

1. Navigate to **Projects** → **New Project**
2. Fill in project name and description
3. Save to create your project

### Managing Tasks

1. Go to **Tasks** → **New Task**
2. Select a project, add title, description, and due date
3. Use filters to find specific tasks
4. Toggle task status with one click

### Real-time Features

-   **Status Toggle**: Click task status to toggle without page reload
-   **Live Search**: Filter tasks as you type
-   **AJAX Operations**: Create, update, delete without page refresh
-   **Instant Feedback**: Success/error messages for all actions

## 📱 Screenshots

### Dashboard

-   Statistics cards showing project and task metrics
-   Progress charts and recent activity feeds
-   Quick action buttons for common tasks

### Projects View

-   Grid layout with project cards
-   Progress bars showing completion percentage
-   Quick edit and delete actions

### Tasks Management

-   Filterable task list with search functionality
-   Status indicators with color coding
-   Alternating row colors for better readability

## 🔧 Configuration

### Database Seeding (Optional)

Create sample data for testing:

```bash
php artisan db:seed
```

### Asset Compilation (If needed)

```bash
npm run dev          # Development
npm run build        # Production
```

### Queue Configuration (For background jobs)

```bash
php artisan queue:work
```

## 🚀 Deployment

### Production Setup

1. **Environment**: Set `APP_ENV=production` in `.env`
2. **Debug**: Set `APP_DEBUG=false`
3. **Cache**: Run optimization commands

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Hosting Platforms

-   **Shared Hosting**: Upload files to public_html, configure database
-   **VPS/Cloud**: Use Apache/Nginx with proper document root
-   **Platform as a Service**: Deploy to Heroku, DigitalOcean App Platform, etc.

## 🧪 Testing

### Demo Credentials

For testing purposes, you can create an admin user:

**Demo Login:**

-   Email: `admin@demo.com`
-   Password: `password`

## 📚 API Documentation

The application includes AJAX endpoints for real-time functionality:

### Projects API

-   `GET /projects` - List projects
-   `POST /projects` - Create project
-   `PUT /projects/{id}` - Update project
-   `DELETE /projects/{id}` - Delete project

### Tasks API

-   `GET /tasks` - List tasks (with filters)
-   `POST /tasks` - Create task
-   `PUT /tasks/{id}` - Update task
-   `PATCH /tasks/{id}/toggle-status` - Toggle task status
-   `DELETE /tasks/{id}` - Delete task

## 🔍 Features in Detail

### Activity Logging

Every user action is logged including:

-   Project creation, updates, deletion
-   Task creation, updates, status changes, deletion
-   User login/logout activities

### Search & Filtering

-   **Task Search**: Search by task title
-   **Status Filter**: Filter by pending/completed
-   **Project Filter**: Filter tasks by specific project
-   **Combined Filters**: Use multiple filters simultaneously

### Progress Tracking

-   **Project Progress**: Automatic calculation based on task completion
-   **Visual Indicators**: Progress bars and percentage displays
-   **Dashboard Charts**: Overview of all project progress

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🆘 Support

If you encounter any issues or have questions:

1. Check the [Issues](../../issues) page
2. Create a new issue with detailed information
3. Include error messages and steps to reproduce

## 🙏 Acknowledgments

-   Laravel Framework for the robust backend
-   Tailwind CSS for the beautiful styling
-   Alpine.js for reactive components
-   Font Awesome for the icon library
-   The open-source community for inspiration

---

**Built with ❤️ using Laravel 12**
