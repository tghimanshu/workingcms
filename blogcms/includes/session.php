<?php 
/**
 * Session Management Script
 *
 * Starts the session and ensures the user is logged in.
 * Redirects to the login page if the 'username' session variable is not set.
 */
	session_start();
	if (!isset($_SESSION['username'])) {
		header("Location: index.php");
	}
?>