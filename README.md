<div align="center">

# ☕ Juru Giling

### Inventory Management System for Coffee Shops

Built with Laravel using clean architecture principles, reusable components, and Git Flow development practices.

![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![AdminLTE](https://img.shields.io/badge/AdminLTE-4-3C8DBC?style=for-the-badge)
![License](https://img.shields.io/badge/License-MIT-success?style=for-the-badge)

</div>

---

# 📖 About

**Juru Giling** is a web-based inventory management system developed for coffee shops and small businesses.

This project is built incrementally following software engineering practices such as:

- Feature Branch Workflow
- Clean Architecture
- Reusable Blade Partials
- Form Request Validation
- Route Model Binding
- Soft Delete
- Incremental Development

This repository serves as both a learning project and a portfolio demonstrating Laravel best practices.

---

# ✨ Current Features

## 🔐 Authentication

- Login
- Logout

---

## 📊 Dashboard

- Statistics Cards
- Product Summary
- Category Summary

---

## 📦 Master Data

### Category

- CRUD
- Validation

### Product

- CRUD
- Image Upload
- Slug Generation
- Product Status
- Category Relationship

### Supplier

- CRUD
- Auto Generate Supplier Code
- Pagination
- Soft Delete
- Restore
- Permanent Delete
- Reusable Form
- Reusable Table

---

# 🚧 Development Progress

- [x] Authentication
- [x] Dashboard
- [x] Category Module
- [x] Product Module
- [x] Supplier Module
- [ ] Purchase Module
- [ ] Sales Module
- [ ] Customer Module
- [ ] Reports
- [ ] Dashboard Analytics

---

# 🛠 Tech Stack

| Technology | Version |
|------------|---------|
| Laravel | 12 |
| PHP | 8.x |
| MySQL | Latest |
| Bootstrap | 5 |
| AdminLTE | 4 |
| Vite | Latest |

---

# 🏗 Project Structure

```text
app
├── Http
│   ├── Controllers
│   │   └── Admin
│   └── Requests
│
├── Models
│
├── Providers
│
└── Services (Coming Soon)

resources
└── views
    ├── admin
    ├── components
    └── layouts
```

---

# 🚀 Installation

Clone repository

```bash
git clone https://github.com/im0041/jurugiling.git
```

Go to project directory

```bash
cd jurugiling
```

Install PHP dependencies

```bash
composer install
```

Install Node dependencies

```bash
npm install
```

Copy environment

```bash
cp .env.example .env
```

Generate application key

```bash
php artisan key:generate
```

Configure your database inside `.env`

Run migration

```bash
php artisan migrate
```

Start development server

```bash
npm run dev

php artisan serve
```

---

# 📸 Screenshots

## Dashboard

> Coming Soon

## Category

> Coming Soon

## Product

> Coming Soon

## Supplier

> Coming Soon

---

# 🌿 Git Workflow

This project follows a Feature Branch workflow.

```text
main
│
├── feature/category
├── feature/product
├── feature/supplier
└── feature/purchase
```

Each module is developed in its own branch before being merged into the `main` branch.

---

# 🗺 Roadmap

## ✅ v0.1.0

- Authentication
- Dashboard
- Category Module
- Product Module
- Supplier Module

---

## 🚀 v0.2.0

- Purchase Module
- Purchase Detail
- Automatic Stock Update

---

## 🚀 v0.3.0

- Customer Module
- Sales Module
- Sales Detail

---

## 🚀 v0.4.0

- Dashboard Analytics
- Reports
- Export PDF
- Export Excel

---

# 🎯 Learning Objectives

This project is developed to improve understanding of:

- Laravel Framework
- Software Architecture
- Clean Code
- Git Workflow
- CRUD Development
- Database Design
- Inventory Management System

---

# 👨‍💻 Author

**Imam Iswanto**

GitHub

https://github.com/imamiswanto

---

# ⭐ Support

If you like this project, consider giving it a ⭐ on GitHub.
