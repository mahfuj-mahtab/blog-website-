<?php 

include("include/header.php");
include("include/menu.php");
include("include/connection.php");
 ?>
<div class="main_container">


 <?php 

 if (isset($_GET['post_id'])) {

 	if(!is_numeric($_GET['post_id']))
 	{
 		die("fuck you hacker");
 	}else{
 	$post_id=$_GET['post_id'];
 	$single_post_query="SELECT * FROM post WHERE post_id='$post_id'";
 	$single_post_query_ran=mysqli_query($con,$single_post_query);
 	$row=mysqli_fetch_array($single_post_query_ran);
 	$single_post_title=$row['post_title'];
 	$single_post_body=$row['post_body'];
 	$single_post_author=$row['post_author'];
 	$single_post_time=$row['post_time'];
 	$single_post_img=$row['post_img'];
 	$single_post_file=$row['post_file'];
 	?>
 	<div class="left_container">
 		<div class='single_post'>
		<h1><?php echo $single_post_title ?></h1>
		<img src='hidden_admin_panel/img/<?php echo $single_post_img ?>' >
		
		<span>posted by:</span><a href='#'><?php echo $single_post_author ?></a><br>
		<a class='time_style' href='#'>post time:<?php echo $single_post_time ?></a>

		<p><?php echo $single_post_body ?>
		</p>
		<?php if (empty($single_post_file))

		{}

		 else { ?>
			
		<a href="hidden_admin_panel/file/<?php echo $single_post_file ?>">click here to download</a>
	<?php } ?>
	</div>
<?php }}

  ?>

<div class="comment_box">
	<h1>please comment here</h1>
 <table>
 	<tr>
 		<td>
 			name:
 		</td>
 		<td>
 			<input class="comment_box_input" type="text" name="comment_name">
 		</td>
 	</tr>
 	<tr>
 		<td>
 			comment:
 		</td>
 		<td>
 			<textarea class="comment_box_textarea"></textarea>
 		</td>
 	</tr>
 	<tr>
 		<td>
 			
 		</td>
 		<td>
 			<input class="comment_box_submit" type="submit" name="comment_submit" value="submit comment">
 		</td>
 	</tr>
 </table>
</div>
<div class="show_comment">

	
</div>
</div>

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
</div>

<?php 
include("include/footer.php");
 ?>


