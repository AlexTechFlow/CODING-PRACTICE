<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php include("../includes/layouts/header.php"); ?>


	<section>
		<h2>Home Page: Look at All These Ideas! Manage Content</h2>

        <h3>Users:</h3>
	    <ul>
			<?php
				// 3. Use returned data 
				while($subject = mysqli_fetch_assoc($result)) {  // BEGIN WHILE LOOP 
					// output data from each row
			?>

			<li><?php echo $subject["menu_name"] . " (" . $subject["id"] . ")"; ?>
				<?php
					// 2. Perform database query
					$query  = "SELECT * ";
					$query .= "FROM users ";
					$query .= "WHERE visible = 1 ";
					$query .= "ORDER BY position ASC";
					$result = mysqli_query($connection, $query);
					confirm_query($result); // Test if there was a query error - function from functions.php
			    ?>
				
				<ul>
					
				</ul>

			</li> <!-- IDEA_TITLE WITH an UNDERSCORE, NOT DASH -->

		  <?php
				} // END WHILE LOOP
			?>





		    <?php
				  // 4. Release returned data
				  mysqli_free_result($result);
			?>

		</ul>


		<div class="gallery">
			<div class="idea_detail">
				<a href="ideadetail.html"><img src="images/idea_placeholder.png" alt="Idea Details" />
				<span class="image_title">Idea Title</span></a>
			</div>
			<div class="idea_detail">
				<a href="ideadetail.html"><img src="images/idea_placeholder.png" alt="Idea Details"/>
				<span class="image_title">Idea Title</span></a>
			</div>
			<div class="idea_detail">
				<a href="ideadetail.html"><img src="images/idea_placeholder.png" alt="Idea Details"/>
				<span class="image_title">Idea Title</span></a>
			</div>
		</div>
		<div class="gallery">
			<div class="idea_detail">
				<a href="ideadetail.html"><img src="images/idea_placeholder.png" alt="Idea Details"/>
				<span class="image_title">Idea Title</span></a>
			</div>
			<div class="idea_detail">
				<a href="ideadetail.html"><img src="images/idea_placeholder.png" alt="Idea Details"/>
				<span class="image_title">Idea Title</span></a>
			</div>
			<div class="idea_detail">
				<a href="ideadetail.html"><img src="images/idea_placeholder.png" alt="Idea Details"/>
				<span class="image_title">Idea Title</span></a>
			</div>
		</div>
	</section>



<?php include("../includes/layouts/footer.php"); ?>

