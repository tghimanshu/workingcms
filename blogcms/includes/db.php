<?php
/**
 * Database Connection Script
 *
 * Establishes a connection to the MySQL database using mysqli.
 * Defines the connection variable `$conn`.
 * Handle connection errors.
 *
 * @var mysqli $conn The database connection object.
 * @var string $succesMessage A variable to store success messages (initialized to empty).
 */
$conn = mysqli_connect('localhost','root','','blogcms') or die('<h1>UNEXPECTED ERROR OCCURED!');
echo mysqli_error($conn);
$succesMessage = '';
 ?>