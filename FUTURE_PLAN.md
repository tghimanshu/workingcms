# Future Plan (Phase 2)

This document outlines the proposed features and enhancements for the next phase of development for the BlogCMS project.

## 1. Security Enhancements

*   **Password Hashing**: Currently, passwords may be stored in plain text. Implement `password_hash()` and `password_verify()` for secure authentication.
*   **SQL Injection Prevention**: Migrate from `mysqli_query` with concatenated strings to **Prepared Statements** (`mysqli_prepare`) to prevent SQL injection attacks.
*   **Input Sanitization**: Implement robust input sanitization for all user inputs (`htmlspecialchars`, `filter_var`) to prevent XSS attacks.
*   **CSRF Protection**: Add Anti-CSRF tokens to forms to prevent Cross-Site Request Forgery.

## 2. Functional Improvements

*   **Edit Post Functionality**: The `edit` action in `allposts.php` is currently a placeholder. Implement the full edit form and update logic.
*   **Image Uploads**: Allow users to upload featured images for posts instead of just using text/Summernote.
*   **User Management**: Add an admin page to manage users (add, delete, change password) directly from the dashboard.
*   **Pagination**: Implement pagination for `allposts.php` (admin) and `index.php` (public) to handle large numbers of posts efficiently.
*   **Search Functionality**: Add a search bar to the public site and admin panel to filter posts.

## 3. UI/UX Upgrades

*   **Modernize Design**: Update the public theme to a more modern, responsive design, possibly decoupling it from the specific Start Bootstrap admin theme dependencies if needed.
*   **Flash Messages**: Improve the `message()` function to handle multiple types of notifications more gracefully (e.g., toast notifications).

## 4. Code Quality & Architecture

*   **OOP Refactoring**: Refactor the procedural code into an Object-Oriented structure (e.g., `Database` class, `Post` class, `User` class).
*   **Configuration File**: Move database credentials and global settings to a separate `config.php` file (and `.env` for environment variables) that is not version controlled.
*   **Composer Support**: Initialize `composer.json` to manage dependencies (like Summernote or PHPMailer) properly.

## 5. Deployment

*   **Dockerization**: Create a `Dockerfile` and `docker-compose.yml` to simplify the development environment setup and deployment.
