<?php
	include_once 'header.php';
?>
			<!---------------------------------Contact Us Form------------------------------------>
			<div class="sign-box">
			<h1 align="center">Contact Us</h1>
			<form action="include/contact.inc.php" method="POST" autocomplete="off">
				<label>Name</label>
				<input type="text" name="name" id="name" placeholder="Full Name" required><br>
				<label>Email</label>
				<input type="email" name="email" id="email" placeholder="Email" required><br>
				<label>Subject</label>
				<input type="text" name="subject" id="subject" placeholder="Subject" required><br>
				<label>Message</label>
				<textarea name="message" id="message" placeholder="Type Message Here" rows="5" cols="54" required></textarea>
				<input type="submit" name="submit" id="submit" class="btn" value="Send">
			</form>
		</div>
<?php
	include_once 'footer.php';
?>