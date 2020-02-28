<?php 
	require_once('includes/db.php');
	global $conn;
 ?>
 	<?php include 'header.php'; ?>
 	<main>
		<div class="container">
			<div class="works">
				<div class="work">
					<div class="image"></div>
					<h2 class="work-heading">Android Development</h2>
					<p class="work-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias suscipit, vel fuga ut quis atque ab nemo odio! Corporis non quia incidunt blanditiis ex doloribus dolor explicabo recusandae quos perspiciatis, sapiente pariatur doloremque. Praesentium magni, voluptate. Accusantium quae beatae velit, porro nostrum perferendis maxime obcaecati numquam, est facilis officia, veritatis?</p>
				</div> <!-- end of work -->
				<div class="work">
					<div class="image"></div>
					<h2 class="work-heading">Software Development</h2>
					<p class="work-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias suscipit, vel fuga ut quis atque ab nemo odio! Corporis non quia incidunt blanditiis ex doloribus dolor explicabo recusandae quos perspiciatis, sapiente pariatur doloremque. Praesentium magni, voluptate. Accusantium quae beatae velit, porro nostrum perferendis maxime obcaecati numquam, est facilis officia, veritatis?</p>
				</div> <!-- end of work -->
				<div class="work">
					<div class="image"></div>
					<h2 class="work-heading">Web Development</h2>
					<p class="work-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias suscipit, vel fuga ut quis atque ab nemo odio! Corporis non quia incidunt blanditiis ex doloribus dolor explicabo recusandae quos perspiciatis, sapiente pariatur doloremque. Praesentium magni, voluptate. Accusantium quae beatae velit, porro nostrum perferendis maxime obcaecati numquam, est facilis officia, veritatis?</p>
				</div> <!-- end of work -->
				<div class="clear-fix"></div>
			</div> <!-- end of works -->
		</div>  <!-- end of container -->
		<div class="container">
			<div class="posts">
				<?php $posts = mysqli_query($conn, "SELECT * FROM `post`;"); ?>
				<?php while($post = mysqli_fetch_assoc($posts)): ?>
					<div class="post">
						<h1 class="post-heading"> <?php echo $post['title']; ?></h1>
						<small class="post-meta">Created By Admin, Under <?php echo $post['category']; ?>.</small>
						<a class="read-more-btn" href="post.php?id=<?php echo $post['id']; ?>">Read More</a>
					</div> <!-- end of post -->
					<hr>
				<?php endwhile; ?>
			</div><!-- end of posts -->
		</div> <!-- end of container -->
	</main>
	<?php include 'footer.php'; ?>