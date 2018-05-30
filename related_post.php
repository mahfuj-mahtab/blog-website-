<div class="related_post">

	//<?php 

	//$related_post_query="SELECT * FROM post WHERE post_title LIKE '%$single_post_title%' LIMIT 3";
	//$related_post_query_ran=mysqli_query($con,$related_post_query);
	//while ($row=mysqli_fetch_array($related_post_query_ran)) {
	//	$related_post_title=$row['post_title'];
	//	$related_post_body=$row['post_body'];
	//	$related_post_img=$row['post_img'];
	//	$related_post_time=$row['post_time'];
	//	?>
		<!--<div class='related_post'>
		<h1><?php echo $single_post_title ?></h1>
		<img src='hidden_admin_panel/img/<?php echo $post_img ?>'>
		
		<span>posted by:</span><a href='#'><?php echo $single_post_author ?></a><br>
		<a class='time_style' href='#'>post time:<?php echo $single_post_time ?></a>

		<p><?php echo $single_post_body ?>
		</p>
	<a class='see_more' href='single_post.php?post_id=<?php echo $post_id ?>'>see more</a>
	</div>
	<?php }

	 ?>
</div>