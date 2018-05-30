<?php include("include/header.php");
include("include/connection.php");
	
include("include/menu.php");

 ?>

<div class="category_post">
<?php
 	
 	$category_wise_query="SELECT * FROM POST WHERE cat_name='mohot'";
 	$cat_wise_query_ran=mysqli_query($con,$category_wise_query);
 	while($row=mysqli_fetch_array($cat_wise_query_ran)){
 		$post_body=substr($row['post_body'],0,200);
 		$post_title=$row['post_title'];
 		$post_author=$row['post_author'];
 		$post_time=$row['post_time'];
 		$post_id=$row['post_id'];
 		$post_img=$row['post_img'];


 		?>

 		<div class='post'>
		<h1><?php echo $post_title?></h1>
		<img src='hidden_admin_panel/img/<?php echo $post_img?>' >
		
		<span>posted by:</span><a href='https://www.facebook.com/mohot.p.mohot?ref=bookmarks'><?php echo $post_author ?></a><br>
		<a class='time_style' href='https://www.facebook.com/mohot.p.mohot?ref=bookmarks'>post time:<?php echo $post_time ?></a>

		<p><?php echo $post_body ?>
		</p>
	<a class='see_more' href='single_post.php?post_id=<?php echo $post_id ?>'>see more</a>
	</div>
<?php

 	}
 } 
}


?>

</div>

<?php include("include/footer.php")?>