# BlogCMS

A simple, lightweight Content Management System (CMS) built with PHP and MySQL. This project demonstrates basic CRUD (Create, Read, Update, Delete) operations, session management, and authentication.

## Features

-   **Admin Panel**: Secure login for administrators.
-   **Dashboard**: Manage posts and categories.
-   **Post Management**: Create, view, edit (placeholder), and delete blog posts.
-   **Rich Text Editor**: Uses Summernote for post content creation.
-   **Category Management**: Add and delete categories.
-   **Public Blog**: Front-end view for visitors to read posts.
-   **Authentication**: Session-based login system for the admin area.

## Directory Structure

```text
blogcms/
├── admin/          # Admin panel scripts (protected)
│   ├── css/        # Admin styles
│   ├── js/         # Admin scripts (sb-admin.js)
│   ├── addpost.php # Script to add new posts
│   ├── allposts.php# List all posts
│   ├── categories.php # Manage categories
│   ├── index.php   # Admin login page
│   └── ...
├── includes/       # Shared logic
│   ├── db.php      # Database connection
│   ├── functions.php # Helper functions
│   └── session.php # Session handling
├── index.php       # Public homepage
├── post.php        # Single post view
├── header.php      # Public header template
├── footer.php      # Public footer template
└── styles.css      # Public styles
```

## Getting Started

### Prerequisites

*   **XAMPP** (or any PHP/MySQL stack)
*   **Web Browser**

### Installation & Setup

1.  **Clone the Repository**:
    ```bash
    git clone <repository_url>
    ```

2.  **Move Files**:
    Place the `blogcms` folder inside your web server's root directory (e.g., `htdocs` in XAMPP).

3.  **Database Setup**:
    *   Open phpMyAdmin (usually `http://localhost/phpmyadmin`).
    *   Create a new database named `blogcms`.
    *   Import the SQL schema. (Note: You may need to create the tables manually if an SQL file is not provided. Based on the code, you need `users`, `category`, and `post` tables).
        *   **users**: `username`, `pass`
        *   **category**: `id` (AI), `name`
        *   **post**: `id` (AI), `title`, `category`, `content`

4.  **Configure Connection**:
    *   Check `blogcms/includes/db.php`. Ensure the credentials match your local setup:
        ```php
        $conn = mysqli_connect('localhost','root','','blogcms');
        ```

### Usage

1.  **Public Access**:
    *   Visit `http://localhost/blogcms/` to view the blog.

2.  **Admin Access**:
    *   Visit `http://localhost/blogcms/admin/` to log in.
    *   Use valid credentials (you may need to insert a user into the `users` table manually via phpMyAdmin first).

## Technologies Used

*   **PHP**: Server-side logic.
*   **MySQL**: Database.
*   **HTML/CSS**: Frontend structure and styling.
*   **Bootstrap**: Responsive design framework.
*   **Summernote**: WYSIWYG editor.
*   **jQuery**: JavaScript library.

## Documentation

The codebase is fully documented with PHPDoc and JSDoc comments. Refer to the source files for detailed explanations of functions and logic.
