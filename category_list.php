<?php include("include/connection.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>category</title>
</head>
<body>
 <ul>
<?php
	$category_query="SELECT * FROM category LIMIT 10";
	$category_query_ran=mysqli_query($con,$category_query);
	while($row=mysqli_fetch_array($category_query_ran)){

		$cat_id=$row['cat_id'];
		$cat_name=$row['cat_name'];


		echo "<li><a href='category.php?id=$cat_id'>$cat_name</a></li>";




?>

<?php }
	
 ?>
 </ul>

</body>
</html>