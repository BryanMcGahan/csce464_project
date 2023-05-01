<?php include '../common/document_head.html' ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles/footer.css">
	</head>
	<footer>
		<div class="container">
			<p id="footer_title">Register</p>
			<form action="scripts/register.php" method="post">
			<div class="form-row">
					<div class="form-item">
						<label for="">First Name:</label>
						<input name="firstname" type="text">
					</div>
					<div class="form-item">
						<label for="">Last Name:</label>
						<input name="lastname" type="text">
					</div>
				</div>
			<div class="form-row">
					<div class="form-item">
						<label for="">Email:</label>
						<input name="email" type="text">
					</div>
				</div>
			<div class="form-row">
					<div class="form-item">
						<label for="">Phone:</label>
						<input name="phone" type="text">
					</div>
					<div class="form-item">
						<label for="">Address:</label>
						<input name="address" type="text">
					</div>
				</div>
			<div class="form-row">
				</div>
				<div class="form-item">
				<button>Submit</button>
				</div>
			</form>
		</div>
	</footer>
</html>
