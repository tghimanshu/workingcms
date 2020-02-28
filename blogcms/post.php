<?php 
	require_once('includes/db.php');
	global $conn;
 ?>
 <?php 
 	if (isset($_GET['id'])) {
 		$id = $_GET['id'];
 	}else{header("location: /");}
  ?>
  	<?php include 'header.php'; ?>
	<main>
		<div class="container">
			<?php $posts = mysqli_query($conn, "SELECT * FROM `post` WHERE id = ".$id.";"); ?>
			<?php while($post = mysqli_fetch_assoc($posts)): ?>
				<article class="post">
					<h1 class="post-heading"> <?php echo $post['title']; ?></h1>
					<small class="post-meta">Created By Admin, Under <?php echo $post['category']; ?>.</small>
					<br><br>
					<p>
						<?php echo $post['content']; ?>
					</p>
				</article> <!-- end of post article -->
				<hr>
			<?php endwhile; ?>
		</div> <!-- end of container -->
	</main>
	<?php include 'footer.php'; ?>