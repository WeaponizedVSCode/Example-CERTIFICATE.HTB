<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$first_name = trim($_POST['first_name']);
	$last_name = trim($_POST['last_name']);
	$username = trim($_POST['username']);
	$email = trim($_POST['email']);
	$role = trim($_POST['role']);
	$password = trim($_POST['password']);
	$password_confirm = trim($_POST['password-confirm']);


	if (!empty($first_name) && !empty($last_name) && !empty($username) && !empty($email) && !empty($role) && ($role == 'student' || $role == 'teacher') && !empty($password) && !empty($password_confirm) && ($password === $password_confirm)) {
		if ($role == "teacher") {
			$is_active = 0;
		} else {
			$is_active = 1;
		}
		// Hash the password securely
		$options = ['cost' => 4];
		$hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);
		# now we need to open DB connection
		require 'db.php';
		try {
			// Use prepared statements to prevent SQL injection
			$stmt = $pdo->prepare('INSERT INTO Users (first_name, last_name, username, email, password, role, is_active) VALUES (:first_name, :last_name, :username, :email, :password, :role, :is_active)');
			$stmt->execute([
				':first_name' => $first_name,
				':last_name' => $last_name,
				':username' => $username,
				':email' => $email,
				':password' => $hashedPassword,
				':role' => $role,
				':is_active' => $is_active
			]);

			// Registration successful
			$message = 'Registration successful! You can <a href="login.php">Login here</a>';
		} catch (PDOException $e) {
			// Handle duplicate username error
			if ($e->getCode() === '23000') { // SQLSTATE 23000: Integrity constraint violation
				$message = 'ERROR: Account already exists. Please choose another.';
			} else {
				$message = 'An error occurred. Please try again later.';
			}
		}
	} else {
		$message = 'ERROR: Please fill in all fields properly!';
	}
}
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!-- Favicon -->
	<link rel="shortcut icon" href="static/img/fav.png" />
	<!-- Author Meta -->
	<meta name="author" content="colorlib" />
	<!-- Meta Description -->
	<meta name="description" content="" />
	<!-- Meta Keyword -->
	<meta name="keywords" content="" />
	<!-- meta character set -->
	<meta charset="UTF-8" />
	<!-- Site Title -->
	<title>Account Registeration | Certificate</title>

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700" rel="stylesheet" />
	<!--
      CSS
      =============================================
    -->
	<link rel="stylesheet" href="static/css/linearicons.css" />
	<link rel="stylesheet" href="static/css/font-awesome.min.css" />
	<link rel="stylesheet" href="static/css/bootstrap.css" />
	<link rel="stylesheet" href="static/css/magnific-popup.css" />
	<link rel="stylesheet" href="static/css/owl.carousel.css" />
	<link rel="stylesheet" href="static/css/nice-select.css">
	<link rel="stylesheet" href="static/css/hexagons.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" />
	<link rel="stylesheet" href="static/css/main.css" />
</head>

<body>
	<!-- ================ Start Header Area ================= -->
	<?php include "header.php" ?>
	<!-- ================ End Header Area ================= -->

	<!-- ================ start banner Area ================= -->
	<section class="banner-area">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-12 banner-right">
					<h1 class="text-white">
						Account Registeration
					</h1>
					<br />
					<div class="link-nav">
						<span class="box">
							<a href="index.php">Home </a>
							<i class="lnr lnr-arrow-right"></i>
							<a href="register.php">Account Registeration</a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ================ End banner Area ================= -->

	<!-- ================ Start contact-page Area  ================= -->
	<section class="contact-page-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 d-flex flex-column address-wrap">
					<img class="img-fluid" src="static/img/header-img.png" alt="" />
				</div>
				<div class="col-lg-8">
					<?php
					if (isset($message)) {
						echo '<div class="row">
						<div class="col-lg-12">
							<blockquote class="generic-blockquote">
							'.$message.'
							</blockquote>
						</div>
					</div>' ;
					}
					?>
					<div class="">
						<ul class="unordered-list">
							<li>Please note that after creating a teacher account you need to contact ours support to verify your identity and activate your account</li>
						</ul>
					</div>
					<br />
					<form class="form-area contact-form text-right" id="myForm" action="" method="post">
						<div class="row">
							<div class="col-lg-6 form-group">
								<input name="first_name" placeholder="Enter your First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your First Name'"
									class="common-input mb-20 form-control" required="" type="text">

								<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control"
									required="" type="email">

								<input name="password" placeholder="Enter password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter password'"
									class="common-input mb-20 form-control" required="" type="password">

								<input name="password-confirm" placeholder="Confirm password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm password'"
									class="common-input mb-20 form-control" required="" type="password">
							</div>
							<div class="col-lg-6 form-group">

								<input name="last_name" placeholder="Enter your Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Last Name'"
									class="common-input mb-20 form-control" required="" type="text">

								<input name="username" placeholder="Enter username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter username'"
									class="common-input mb-20 form-control" required="" type="text">

								<label for="role" style="font: bolder;">Select account type</label>

								<select id="role" name="role" required="">
									<option value="student">student</option>
									<option value="teacher">teacher</option>
								</select>

							</div>
							<div class="col-lg-12">
								<div class="alert-msg" style="text-align: left;"></div>
								<button type="submit" class="genric-btn primary circle arrow" style="float: right;">Submit <span class="lnr lnr-arrow-right"></span></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- ================ End contact-page Area ================= -->

	<!-- ================ start footer Area ================= -->
	<?php include "footer.php" ?>
	<!-- ================ End footer Area ================= -->

	<script src="static/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
		crossorigin="anonymous"></script>
	<script src="static/js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="static/js/jquery.ajaxchimp.min.js"></script>
	<script src="static/js/jquery.magnific-popup.min.js"></script>
	<script src="static/js/parallax.min.js"></script>
	<script src="static/js/owl.carousel.min.js"></script>
	<script src="static/js/jquery.sticky.js"></script>
	<script src="static/js/hexagons.min.js"></script>
	<script src="static/js/jquery.counterup.min.js"></script>
	<script src="static/js/waypoints.min.js"></script>
	<script src="static/js/jquery.nice-select.min.js"></script>
	<script src="static/js/main.js"></script>
</body>

</html>