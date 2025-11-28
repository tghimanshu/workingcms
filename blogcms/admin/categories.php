<?php
/**
 * Categories Management Page
 *
 * This page allows the administrator to view all categories, add new categories,
 * and delete existing ones. It interacts with the database to perform these CRUD operations.
 *
 * @package Admin
 */
require_once '../includes/session.php';
require_once('../includes/db.php');
require_once '../includes/functions.php';

global $conn;

// Handle category addition
if (isset($_POST['addcategory'])) {
    $addcategory = mysqli_query($conn, "INSERT INTO `category`(`id`, `name`) VALUES (NULL,'".$_POST['catName']."');");
    $_SESSION['succesMessage'] = "Category Added Successfully!";
}

// Handle category deletion
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'delete':
            mysqli_query($conn, "DELETE FROM `category` WHERE id = ".$_GET['id'].";");
            $_SESSION['succesMessage'] = "Delete Success!";
            header('location: categories.php');
            break;
    }
}
?>
<?php include '../header.php'; ?>
<div class="container">
    <div class="jumbotron"><h1>All Categories:</h1></div>
    <br>
    <?php message(); ?>
    <form method="POST" action="categories.php" class="input-group">
        <input type="text" name="catName" class="form-control">
        <button name="addcategory" class="btn input-group-addon">Add Category</button>
    </form>
    <?php $categories = mysqli_query($conn,"SELECT * FROM category;"); ?>
    <table class="table table-hover table-inverse">
        <thead>
            <tr>
                <th>id</th>
                <th>Category Name</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while($category = mysqli_fetch_assoc($categories)): ?>
                <tr>
                    <td><?php echo $category['id']; ?></td>
                    <td><?php echo $category['name']; ?></td>
                    <td>
                        <a href="categories.php?action=delete&id=<?php echo $category['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div><!-- end of container -->
<?php include 'footer.php'; ?>