<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="https://unpkg.com/nouislider@10.0.0/distribute/nouislider.min.js"></script>
		<script src="https://unpkg.com/wnumb@1.1.0"></script>
		<link rel="stylesheet" href="https://unpkg.com/nouislider@10.0.0/distribute/nouislider.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<title>Sign Up</title>
	</head>
	<body>
		<div class="wrapper">
			<!-- Sidebar Holder -->
			<!-- Page Content Holder -->
			<div id="content" class="container-fluid bg-contact">
				<div class="dropdown position-nav float-right">
					<a class="username" id="dropdown-user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-reorder fa-white fa-2x"></i>
					</a>
					<div class="dropdown-menu dropdown-signup2" aria-labelledby="dropdown-user">
						<a class="dropdown-item" href="#">Home</a>
						<a class="dropdown-item" href="#">Contact Us</a>
					</div>
				</div>
				<div class="text-center">
					<div class="logo-center">
						<img src="assets/logo/logo-hd-copy.png">
					</div>
					<h3 class="color-white font-roboto-bold margin-logo-signup">Sign Up</h3><br>
					<button type="button" id="sidebarCollapseStudent" class="btn btn-dark btn-purple btn-signup">Student</button>
					<button type="button" id="sidebarCollapseOrganization" class="btn btn-dark btn-purple btn-signup">Organization</button>
					<br>
					<p class="color-white font-roboto footer-signup">Copyright &copy;2017 Ospace. All Rights Reserved.</p>
				</div>
				
			</div>
			<nav id="sidebarStudent" class="active">
				<div class="container"><br>
					<div class="text-center">
						<span class="font-size-32 font-roboto-bold">Sign Up</span><span class="border-title-signup"></span><span class="font-size-24 font-roboto color-grey-signup">Student</span>
					</div>
					<div class="card-margin-inside">
						<form action="#" class="form-signup2">
							<div class="row">
								<div class="col-md-8 offset-md-2">
									<div class="form-group form-group-signup row">
										<label for="organization" class="col-sm-3 col-form-label">Name</label>
										<div class="col-sm-9">
											<input class="form-control form-signup" type="text">
										</div>
									</div>
								</div>
							</div><br>
							<div class="row">
								<div class="col-md-8 offset-md-2">
									<div class="form-group form-group-signup row">
										<label for="emailid" class="col-sm-3 col-form-label">Email ID</label>
										<div class="col-sm-9">
											<input class="form-control form-signup" type="text">
										</div>
									</div>
								</div>
							</div><br>
							<div class="row">
								<div class="col-md-8 offset-md-2">
									<div class="form-group form-group-signup row">
										<label for="phoneno" class="col-sm-3 col-form-label">Phone</label>
										<div class="col-sm-9">
											<input class="form-control form-signup" type="text">
										</div>
									</div>
								</div>
							</div><br>
							<div class="row">
								<div class="col-md-8 offset-md-2">
									<div class="form-group form-group-signup row">
										<label for="password" class="col-sm-3 col-form-label">Password</label>
										<div class="col-sm-9">
											<input class="form-control form-signup" type="password">
										</div>
									</div>
								</div>
							</div><br>
							<div class="row">
								<div class="col-md-8 offset-md-2">
									<div class="form-group form-group-signup row">
										<label for="confirm" class="col-sm-3 col-form-label">Confirm</label>
										<div class="col-sm-9">
											<input class="form-control form-signup" type="password">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8 offset-md-2">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
										<label class="form-check-label lowercase" for="defaultCheck3">
											I accept terms, conditions and privacy policy.
										</label>
									</div>
								</div>
							</div><br>
							<div class="row">
								<div class="col-md-8 offset-md-2">
									<button type="submit" class="btn btn-purple btn-signup float-right">Sign Up</button>
								</div>
							</div>
						</form><br>
						<div class="row">
							<div class="col-md-8 offset-md-2">
								<p class="color-grey-signup font-roboto-reg font-size-14">Sign Up with social media</p>
								<div class="btn-group">
									<a href="#" class="btn btn-facebook">
										<i class="fa fa-facebook fa-white"></i>Facebook
									</a>
									<a href="#" class="btn btn-google font-roboto-reg">
										<img src="assets/logo/layer-2.jpg" class="fa-google1">Google
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>
			<nav id="sidebarOrganization" class="active">
				<div class="container"><br>
					<div class="text-center">
						<span class="font-size-32 font-roboto-bold">Sign Up</span><span class="border-title-signup"></span><span class="font-size-24 font-roboto color-grey-signup">Organization</span>
					</div>
					<div class="card-margin-inside">
						<form class="form-signup2">
						<div class="row">
							<div class="col-md-8 offset-md-2">
								Logo
							<label class="btn">
								<div class="circle-insertlogo">
									<h1 class="plus-insert-logo">+
									<input type="file" class="inputfile" id="customFile">
									</h1>
								</div>
							</label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 offset-md-2">
								<div class="form-group form-group-signup row">
									<label for="organization" class="col-sm-3 col-form-label">Organization</label>
									<div class="col-sm-9">
										<input class="form-control form-signup" type="text">
									</div>
								</div>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-8 offset-md-2">
								<div class="form-group form-group-signup row">
									<label for="emailid" class="col-sm-3 col-form-label">Email ID</label>
									<div class="col-sm-9">
										<input class="form-control form-signup" type="text">
									</div>
								</div>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-8 offset-md-2">
								<div class="form-group form-group-signup row">
									<label for="phoneno" class="col-sm-3 col-form-label">Phone No.</label>
									<div class="col-sm-9">
										<input class="form-control form-signup" type="text">
									</div>
								</div>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-8 offset-md-2">
								<div class="form-group form-group-signup row">
									<label for="password" class="col-sm-3 col-form-label">Password</label>
									<div class="col-sm-9">
										<input class="form-control form-signup" type="password">
									</div>
								</div>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-8 offset-md-2">
								<div class="form-group form-group-signup row">
									<label for="confirm" class="col-sm-3 col-form-label">Confirm</label>
									<div class="col-sm-9">
										<input class="form-control form-signup" type="password">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 offset-md-2">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
									<label class="form-check-label lowercase" for="defaultCheck3">
										I accept terms, conditions and privacy policy.
									</label>
								</div>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-8 offset-md-2">
								<button class="btn btn-purple btn-signup float-right">Sign Up</button>
							</div>
						</div>
						</form><br>
						<div class="row">
							<div class="col-md-8 offset-md-2">
								<p class="color-grey-signup font-roboto-reg font-size-14">Sign Up with social media</p>
								<div class="btn-group">
									<label class="btn btn-facebook">
										<i class="fa fa-facebook fa-white"></i>Facebook
									</label>
									<label class="btn btn-google font-roboto-reg">
										<img src="assets/logo/layer-2.jpg" class="fa-google1">Google
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
		<script type="text/javascript" src="assets/js/map.js"></script>
		<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5M2b8xx5D28aonuIs1RbVb4TcRFUT7Bg&callback=initMap">
		</script>
		<script type="text/javascript" src="assets/js/signup.js">
		</script>
	</body>
</html>