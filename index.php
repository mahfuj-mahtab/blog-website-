<?php 
include("include/connection.php");
include("include/header.php");
?>



<!-- menu start-->
<div class="menu">
<ul>
	<li>
	<a href="index.php">home</a></li>
	<li><a href="about.php">about</a></li>
	<li><a href="contact.php">contact</a></li>
	<li><a href="cat.php">category</a>
	</li>
</ul>
</div>
<!-- menu end-->
<div class="main_container">
	<!-- left container start-->
<div class="left_container">

<?php
$post_query="SELECT * FROM post ORDER BY rand() LIMIT 100";
$post_query_ran=mysqli_query($con,$post_query);
while ($row=mysqli_fetch_array($post_query_ran)) {
	$post_id=$row['post_id'];
	$post_title=$row['post_title'];
	$post_body=substr($row['post_body'],0,200);
	$post_author=$row['post_author'];
	$post_time=$row['post_time'];
	$post_img=$row['post_img'];


	?>
	<div class='post'>
		<h1><?php echo $post_title ?></h1>
		<img src='hidden_admin_panel/img/<?php echo $post_img ?>'>
		
		<span>posted by:</span><a href='https://www.facebook.com/mohot.p.mohot?ref=bookmarks'><?php echo $post_author ?></a><br>
		<a class='time_style' href='https://www.facebook.com/mohot.p.mohot?ref=bookmarks'>post time:<?php echo $post_time ?></a>

		<p><?php echo $post_body ?>
		</p>
	<a class='see_more' href='single_post.php?post_id=<?php echo $post_id?>'>see more</a>
	</div>

<?php 


     }

?>



</div>

<!-- left container end-->
<!-- right container start-->
<div class="right_container">
	
<div class="latest_post_style">
	<h1>Latest post</h1>
	
		<?php
$post_query="SELECT * FROM post ORDER BY rand() LIMIT 0 ,3";
$post_query_ran=mysqli_query($con,$post_query);
while ($row=mysqli_fetch_array($post_query_ran)) {
	$post_id=$row['post_id'];
	$post_title=$row['post_title'];
	$post_body=substr($row['post_body'],0,50);
	$post_author=$row['post_author'];
	$post_time=$row['post_time'];
	$post_img=$row['post_img'];


	?>
	<div class='latest_post'>
		
		<img src='hidden_admin_panel/img/<?php echo $post_img ?>'>
		
		<span>posted by:</span><a href='https://www.facebook.com/mohot.p.mohot?ref=bookmarks'><?php echo $post_author ?></a><br>
		<a class='time_style' href='https://www.facebook.com/mohot.p.mohot?ref=bookmarks'>post time:<?php echo $post_time ?></a>

		<p><?php echo $post_body ?>
		</p>
	<a class='see_more' href='single_post.php?post_id=<?php echo mysqli_real_escape_string($con,$post_id) ?>'>see more</a>
	</div>

<?php 


     }

?>

<div >
	
</div>


</div>


<div class="category_style">
	<h1>Category list</h1>

	<ul>
	<?php
	$category_query="SELECT * FROM category";
	$category_query_ran=mysqli_query($con,$category_query);
	while($row=mysqli_fetch_array($category_query_ran)){

		$cat_id=$row['cat_id'];
		$cat_name=$row['cat_name'];


		echo "<li><a href='category.php?id=$cat_id'>$cat_name</a></li>";

	}


?>
	</ul>

</div>







</div>
<!-- right container end-->
</div>
<div class="clear"></div>
<?php include("include/footer.php");?>