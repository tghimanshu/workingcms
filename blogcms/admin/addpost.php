<?php
/**
 * Add Post Page
 *
 * This page provides a form for the administrator to create a new blog post.
 * It allows entering the title, selecting categories, and adding content (using Summernote).
 * Upon submission, the post is saved to the database.
 *
 * @package Admin
 */
require_once '../includes/session.php';
require_once('../includes/db.php');
require_once '../includes/functions.php';

global $conn;

// Handle post submission
if (isset($_POST['submit'])){
    if (!isset($_POST['category'])) {
        $catstring = 'uncategorized';

    }else{
        print_r($_POST['category']);
        $catstring = implode(", ",$_POST['category']);
        print_r($catstring);
    }
    mysqli_query($conn,"INSERT INTO `post`(`id`, `title`, `category`, `content`) VALUES (NULL,'".$_POST['title']."','".$catstring."','".$_POST['content']."');") or die('error');
        $_SESSION['successMessage'] = "Added Successful!";
        header("location: allposts.php");
}// end isset
?>
<?php include 'header.php'; ?>
<div class="container">
    <div class="jumbotron"><h1>Add Post:</h1></div>
    <form method="post" action="addpost.php">
        <div class="input-group">
            <label class="input-group-addon">Title:</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="all-categories">
            <h3>Category:</h3>
            <?php $categories = mysqli_query($conn,"SELECT * FROM category;"); ?>
            <?php while($category = mysqli_fetch_assoc($categories)): ?>
                <div class="checkbox">
                    <label for="cb<?php echo $category['id']; ?>">
                        <input type="checkbox" id="cb<?php echo $category['id']; ?>" name="category[]" value="<?php echo $category['name']; ?>">
                        <?php echo $category['name']; ?>
                    </label>
                </div>
            <?php endwhile; ?>
        </div><!-- end of all-categories -->
        <div class="input-group">
            <label class="input-group-lg">Content:</label>
            <textarea id="summernote" name="content" class="form-control" required></textarea>
        </div>
        <button class="btn btn-primary form-control" name="submit">Add Post</button>
    </form>
</div>

<?php include 'footer.php'; ?>