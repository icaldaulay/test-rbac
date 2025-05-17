# Laravel Role-Based Access Control (RBAC) Project

## Table of Contents

-   [Project Overview](#project-overview)
-   [Requirements](#requirements)
-   [Installation Steps](#installation-steps)
-   [Database Setup](#database-setup)
-   [Authentication System](#authentication-system)
-   [Routes & Navigation](#routes--navigation)
-   [Available Roles and Permissions](#available-roles-and-permissions)
-   [Security](#security)
-   [License](#license)

## Project Overview

This project implements a Role-Based Access Control (RBAC) system using Laravel. It provides user authentication, role management, and permission-based access control.

## Requirements

-   PHP >= 8.1
-   Composer
-   MySQL/PostgreSQL
-   Node.js & NPM
-   Laravel 10.x

## Installation Steps

1. Clone the repository:

```bash
git clone <repository-url>
cd test-lmd-rbac
```

2. Install PHP dependencies:

```bash
composer install
```

3. Install NPM packages:

```bash
npm install
npm run dev
```

4. Set up environment variables:

```bash
cp .env.example .env
php artisan key:generate
```

## Database Setup

1. Configure your database in `.env`:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

2. Run migrations and Seed the database:

```bash
php artisan migrate:fresh --seed
```

## Authentication System

### Default Login Credentials

-   Super Admin:
    -   Email: superadmin@gmail.com
    -   Password: password
-   Admin:
    -   Email: admin@gmail.com
    -   Password: password
-   Regular User:
    -   Email: user@gmail.com
    -   Password: password

## Available Roles and Permissions

1. Super Admin (`superadmin`)

    - Full access to all features
    - Can manage users, roles, and permissions
    - Access to superadmin dashboard

2. Admin (`admin`)

    - Can view and manage users
    - Can view and manage roles
    - Limited permission management
    - Access to admin dashboard

3. Regular User (`user`)
    - Can view users
    - Access to user dashboard
    - Basic profile management

## Security

-   All passwords are hashed
-   CSRF protection enabled
-   Role-based middleware protection
-   Session management

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
