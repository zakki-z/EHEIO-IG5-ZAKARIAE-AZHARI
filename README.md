# Symfony Twig Template Project

## 📋 Project Overview

This is a Symfony 6.4 application demonstrating Twig templating concepts, form handling, and Docker deployment. The project includes comprehensive examples of template inheritance, block overriding, partials, and dynamic routing.

**Course**: Informatique et Gestion 5ème Année  
**Academic Year**: 2025-2026  
**Framework**: Symfony 6.4  
**PHP Version**: 8.3  
**Database**: PostgreSQL 16

---

## 🚀 Quick Start

### Prerequisites

- Docker & Docker Compose installed
- Git
- Port 8000, 5432, and 8081 available

### Installation

1. **Clone the repository**
```bash
git clone https://github.com/zakki-z/EHEIO-IG5-ZAKARIAE-AZHARI.git
cd <project-directory>
```

2. **Build and start Docker containers**
```bash
make build
make up
```

3. **Install dependencies**
```bash
make install
```

4. **Access the application**
- Application: http://localhost:8000
- pgAdmin: http://localhost:8081 (admin@admin.com / admin)

---

## 🐳 Docker Configuration

### Services

#### PHP Container
- **Image**: PHP 8.3-FPM
- **Port**: 8000
- **Features**: Composer, Symfony CLI, Node.js 20

#### PostgreSQL Container
- **Image**: PostgreSQL 16
- **Port**: 5432
- **Database**: changeME
- **User**: changeME
- **Password**: changeME

  
### Docker Commands

```bash
# Build containers
make build

# Start containers
make up

# Stop all containers
make stop

# Enter PHP container
make enter

# List running containers
make list

# Delete containers
make delete
```

---

## 📁 Project Structure

```
.
├── src/
│   ├── Controller/
│   │   ├── DummyController.php      # Main navigation controller
│   │   ├── HomeController.php       # Home & greeting
│   │   └── UserController.php       # User management
│   ├── Entity/
│   │   ├── Book.php                 # Book entity
│   │   ├── Product.php              # Product entity
│   │   └── User.php                 # User entity
│   ├── Form/
│   │   ├── BookType.php             # Book form
│   │   ├── ProductType.php          # Product form
│   │   └── UserType.php             # User form
│   └── Repository/
│       ├── BookRepository.php
│       ├── ProductRepository.php
│       └── UserRepository.php
├── templates/
│   ├── base.html.twig               # Parent template
│   ├── partials/
│   │   └── _navbar.html.twig        # Navigation component
│   ├── dummy/
│   │   ├── index.html.twig          # Dummy page
│   │   ├── home.html.twig           # Home page
│   │   ├── news.html.twig           # News page
│   │   ├── contact.html.twig        # Contact page
│   │   ├── about.html.twig          # About page
│   │   └── book.html.twig           # Book form
│   ├── user/
│   │   └── index.html.twig          # User form
│   └── home/
│       └── index.html.twig          # HomeController template
├── docker-compose.yaml              # Docker orchestration
├── Dockerfile                       # PHP container image
├── Makefile                         # Command shortcuts
└── composer.json                    # PHP dependencies
```

---

## 🛣️ Routes & Controllers

### DummyController Routes

| Route | URL | Name | Description |
|-------|-----|------|-------------|
| GET | `/dummy` | `app_dummy` | Dummy index page |
| GET | `/home` | `app_home` | Home page with years list |
| GET | `/news` | `app_news` | News page with articles |
| GET | `/contact` | `app_contact` | Contact information |
| GET | `/about` | `app_about` | About us with team |
| GET | `/add-book` | `app_book_add` | Add book form |

### UserController Routes

| Route | URL | Name | Description |
|-------|-----|------|-------------|
| GET | `/user` | `app_user` | User index |
| GET | `/add-user` | `app_user_add` | Add user form |

### HomeController Routes

| Route | URL | Name | Description |
|-------|-----|------|-------------|
| GET | `/hello/{name}` | `app_hello` | Dynamic greeting |

---

## 📝 Form Types

### BookType Form

**Fields**:
- `name` (TextType) - Book name
- `author` (TextType) - Author name
- `year` (IntegerType) - Publication year
- `submit` (SubmitType) - Submit button

### UserType Form

**Fields**:
- `fullName` (TextType) - Full name
- `birthDate` (DateType) - Birth date
- `occupation` (TextType) - Occupation (optional)
- `submit` (SubmitType) - Submit button

### ProductType Form

**Fields**:
- `label` (TextType) - Product name
- `price` (NumberType) - Price
- `quantity` (NumberType) - Quantity
- `submit` (SubmitType) - Submit button

---

## 💾 Database Entities

### Book Entity

**Properties**:
- `id` (int) - Primary key
- `name` (string, 255) - Book name
- `author` (string, 255) - Author name
- `year` (int) - Publication year

### User Entity

**Properties**:
- `id` (int) - Primary key
- `fullName` (string, 255) - Full name
- `birthDate` (DateTime) - Birth date
- `occupation` (string, 255, nullable) - Occupation

### Product Entity

**Properties**:
- `id` (int) - Primary key
- `label` (string, 255) - Product label
- `price` (float) - Price
- `quantity` (float) - Quantity

---

## 🎨 Styling

### CSS Framework
- Custom CSS in `base.html.twig`
- Modern, responsive design
- Clean color scheme (blue/gray)

### Features
- Responsive navigation bar
- Styled forms with validation
- Box shadows and hover effects
- Consistent spacing and typography

### Color Palette
- Primary: `#3498db` (Blue)
- Dark: `#2c3e50` (Charcoal)
- Light: `#ecf0f1` (Light Gray)
- Background: `#f5f5f5` (Off White)

---

## 🔧 Makefile Commands

### Development

```bash
# Clear Symfony cache
make clear-cache

# Clear Doctrine cache
make clear-doctrine

# Update database schema
make schema-update

# Install assets
make install-assets
```

### Webpack (if using Encore)

```bash
# Development build
make webpack-dev

# Watch mode
make webpack-server
```

## ✅ Course Requirements Completed

### Twig Concepts
- ✅ Template inheritance with `extends`
- ✅ Block definition and overriding
- ✅ Using `parent()` function
- ✅ Include partials
- ✅ Variable display
- ✅ For loops with `loop` variable
- ✅ Comments syntax
- ✅ Dynamic routing with `path()`
- ✅ Dump function for debugging

### Practical Work (TD)
- ✅ Create News page
- ✅ Create Contact page
- ✅ Create About page
- ✅ Redefine CSS block
- ✅ Override CSS block with parent()
- ✅ Redefine JavaScript block
- ✅ Override JavaScript block with parent()
- ✅ Implement navigation system
- ✅ Create forms for Book and User

---

## 📖 Learning Resources

### Official Documentation
- [Symfony Documentation](https://symfony.com/doc/current/index.html)
- [Twig Documentation](https://twig.symfony.com/doc/3.x/)
- [Doctrine ORM](https://www.doctrine-project.org/projects/doctrine-orm/en/current/index.html)

### Key Concepts
- MVC Architecture
- Template Inheritance
- Form Handling
- Database Entities
- Routing System
- Dependency Injection

---

## 👥 Contributors

**Author**: Zakariae Azhari 
**Email**: zakariaeazhari@proton.me  
**Course**: Informatique et Gestion 5ème Année  
**Institution**: EHEIO  
**Year**: 2025-2026

---

## 📄 License

This project is created for educational purposes.

---

## 🔄 Version History

### v1.0.0 (Current)
- Initial project setup
- Docker configuration
- Basic Twig templates
- Form implementations
- Navigation system
- Complete course requirements

---
