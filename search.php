<?php 

include("include/header.php");
include("include/connection.php");
include("include/menu.php");
 ?>
 <?php 

if (isset($_GET['search_submit'])) {
	$search_content=$_GET['search'];

	$search_query="SELECT * FROM post WHERE post_title LIKE'%$search_content%'";
	$search_query_ran=mysqli_query($con,$search_query);
	while ($row=mysqli_fetch_assoc($search_query_ran)) {
		
	$search_post_id=$row['post_id'];
	$search_post_title=$row['post_title'];
	$search_post_body=substr($row['post_body'],0,200);
	$search_post_author=$row['post_author'];
	$search_post_time=$row['post_time'];
	$search_post_img=$row['post_img'];

			?>
			<div class='post'>
				<h1><?php echo $search_post_title ?></h1>
				<img src='hidden_admin_panel/img/<?php echo $search_post_img ?>' >
		
				<span>posted by:</span><a href='https://www.facebook.com/mohot.p.mohot?ref=bookmarks'><?php echo $search_post_author ?></a><br>
				<a class='time_style' href='https://www.facebook.com/mohot.p.mohot?ref=bookmarks'>post time:<?php echo $search_post_time?></a>

				<p><?php echo $search_post_body?>
				</p>
				<a class='see_more' href='single_post.php?post_id=<?php echo $search_post_id?>'>see more</a>
			</div>";






	<?php }


}


  ?>