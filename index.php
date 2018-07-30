<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: home.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: home.php");
  }
  

$db = mysqli_connect('localhost', 'root', '', 'registration');

$output = '';

if (isset($_POST['search'])) {
  $searchQuery = $_POST['search'];
  $searchQuery = preg_replace("#[^0-9a-z]#i", "", $searchQuery);
  
  
  $query = mysqli_query($db, "SELECT * FROM forsearch WHERE movies LIKE '%$searchQuery%'");
  
  $count = mysqli_num_rows($query);
  
	  if($count == 0)
	  {
		  $output = 'There was no search results!';
	  }
	  else
	  {
		  while($row = mysqli_fetch_array($query))
		  {
			   $output .= '<div>'.$row['movies'].'</div>';
		  }
	  }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Search Page</h2>
	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
</div>
<div class="content">

  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>


    <?php  if (isset($_SESSION['username'])) : ?>
		<form method="post" action="index.php">
			<div class="input-group">
				<input type="text" name="search" placeholder="Search">
			</div>
			
			<div class="input-group">
				<button type="submit" class="btn">Search Your Text</button>
			</div>
     </form>
	 <div class="content" style="margin-top: 20px;">
	 <p>Results: </p>
	 
		 <div class="content" >
			 <?php 
			 print("$output");
			 ?>
		  </div>
	  </div>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>