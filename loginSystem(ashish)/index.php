<?php 
	$page_title = "User Authentication - Homepage";
	include_once 'partials/header.php';
?>

    <div class="container">


    



      <div class="flag">
        <h1>User Authentication System</h1>
        <p class="lead">Learn to Code a login registration System with PHP.<br> Enhance your PHP skill and make more cash.</p>

        <?php if(!isset($_SESSION['username'])) { 

		echo '<P class="lead">You are currently not signed in <a href="login.php">Login</a> Not yet a member? <a href="signup.php">Signup</a> </P>';

		}

		else{

		echo "<p class='lead'>You are logged in as ". $_SESSION['username'] ." <a href='logout.php'>Logout</a> </p>";

		}
		?>
      </div>

    </div><!-- /.container -->





	

	

<?php include_once 'partials/footer.php'; ?>