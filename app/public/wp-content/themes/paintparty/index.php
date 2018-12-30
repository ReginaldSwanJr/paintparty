<div id="header">
	<?php get_header(); ?>
</div>


<?php
 function myFunction() {
 	echo 2 + 2;
 }
?>

<div>
	<?php

	while(have_posts()){
		the_post(); ?>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_content(); ?>
		<hr>
		<?php 
	} ?>
</div>


<div class="wrap">
<h1>Book a Party</h1>
<form id="partyinfo" action="register.php" method="post">
	<p>First Name: <input type="text" name="first_name" size="15" maxlength="20" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>"></p>
	<p>Last Name: <input type="text" name="last_name" size="15" maxlength="40" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>"></p>
	<p>Email Address: <input type="email" name="email" size="20" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" > </p>
	<p>Party Name: <input type="text" name="party_name" size="20" maxlength="60" value="<?php if (isset($_POST['party_name'])) echo $_POST['party_name']; ?>" > </p>
	<br>
	<textarea rows="4" cols="50" name="desc" value="<?php if (isset($_POST['desc'])) echo $_POST['desc']; ?>"> Enter party description here...</textarea>
	<p><input type="submit" name="submit" value="Register"></p>
</form>
</div>

<div class="btn-group float-right" role="group">
			<a class="btn btn-primary" href="<?php echo get_home_url(); ?>" role="button">Home</a>
			<a class="btn btn-primary" href="#" role="button">Register</a>
		</div>


<div id="footer">
	<?php get_footer(); ?>
</div>