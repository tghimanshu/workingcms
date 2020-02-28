<?php require_once '../includes/session.php'; ?>
<?php 
  require_once('../includes/db.php'); 
  global $conn; 
?>

<?php  
	if (isset($_GET['action'])) {
		switch ($_GET['action']) {
			case 'delete':
				mysqli_query($conn, "DELETE FROM post WHERE id = ".$_GET['id'].";");
				$_SESSION['successMessage'] = "Delete Success!";
				break;
			case 'edit':
				echo "edit post ". $_GET['id'];
				break;
		}
	}
?>
	<?php include 'header.php'; ?>
		<?php $posts = mysqli_query($conn, "SELECT * FROM `post`;"); ?>
		<a href="addpost.php" class="btn btn-primary">Add Post</a>
		<table class="table table-hover table-inverse">
			<thead>
				<tr>
					<th>id</th>
					<th>title</th>
					<th>category</th>
					<th>actions</th>
				</tr>
			</thead>
			<tbody>
				<?php while($post = mysqli_fetch_assoc($posts)): ?>
					<tr>
						<td><?php echo $post['id']; ?></td>
						<td><?php echo $post['title']; ?></td>
						<td><?php echo $post['category']; ?></td>
						<td>
							<a href="../post.php?id=<?php echo $post['id']; ?>" class="btn btn-info">View</a>
							<a href="allposts.php?action=delete&id=<?php echo $post['id']; ?>" class="btn btn-danger m">Delete</a>
							<a href="allposts.php?action=edit&id=<?php echo $post['id']; ?>" class="btn btn-primary">Edit</a>
						</td>
					</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	<?php include 'footer.php'; ?>