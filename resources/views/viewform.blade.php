<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>SEN T.A ORJI| ANNUAL SCHOLARSHIP 2021 EDITION PORTAL</title>	

		<meta name="keywords" content="Scholarship" />
		<meta name="description" content="ANNUAL SCHOLARSHIP 2021 EDITION PORTAL">
		<meta name="author" content="WBL IT SOLUTIONS">

		<!-- Favicon -->
		<link rel="shortcut icon" href="../img/logo-red.png" type="image/x-icon" />
		<link rel="apple-touch-icon" href="../img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="../vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="../vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="../vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="../vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="../vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="../css/theme.css">
		<link rel="stylesheet" href="../css/theme-elements.css">
		<link rel="stylesheet" href="../css/theme-blog.css">
		<link rel="stylesheet" href="../css/theme-shop.css">

		<!-- Skin CSS -->
		{{-- <link id="skinCSS" rel="stylesheet" href="../css/skins/default.css"> --}}
        <link id="skinCSS" rel="stylesheet" href="css/skins/skin-corporate-6.css">


		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="../css/custom.css">

		<!-- Head Libs -->
		<script src="../vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body data-plugin-page-transition>

		<div class="body">

			<x-header></x-header>

			<div role="main" class="main">

				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
					<div class="container">
						<div class="row">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="font-weight-bold">Application Form</h1>
							</div>
							<div class="col-md-12 align-self-center order-1">
								<ul class="breadcrumb d-block text-center">
									<li><a href="{{ url('/scholarship') }}">Scholarship</a></li>
									<li class="active">Form</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container pt-3 pb-2">

						<div class="row pt-2">
							<div class="col-lg-3 mt-4 mt-lg-0">

								<div class="d-flex justify-content-center mb-4">
									<div class="profile-image-outer-container">
										<div class="profile-image-inner-container bg-color-primary">
											<img src="{{ url($passport) }}">
										</div>
									</div>
								</div>

								{{-- <aside class="sidebar mt-2" id="sidebar">
									<ul class="nav nav-list flex-column mb-5">
										<li class="nav-item"><a class="nav-link text-3 text-dark active" href="#">My Profile</a></li>
										<li class="nav-item"><a class="nav-link text-3" href="#">User Preferences</a></li>
										<li class="nav-item"><a class="nav-link text-3" href="#">Billing</a></li>
										<li class="nav-item"><a class="nav-link text-3" href="#">Invoices</a></li>
									</ul>
								</aside> --}}

							</div>

							<div class="col-lg-9">

							<table class="table table-bordered">
										{{-- <thead>
											<tr>
												<th>
													#
												</th>
												<th>
													First Name
												</th>
												<th>
													Last Name
												</th>
												<th>
													Username
												</th>
											</tr>
										</thead> --}}
										<tbody>
											<tr>
												<td>
													<strong>App No.</strong>
												</td>
												<td>
													{{$app_no}}
												</td>
												<td>
													<strong>Full Name</strong>
												</td>
												<td>
													{{ strtoupper($surname)}}, {{$firstname}} {{$othername}}
												</td>
											</tr>
											<tr>
												<td>
													<strong>Address</strong>
												</td>
												<td>
													{{$address}}
												</td>
												<td>
													<strong>Contacts</strong>
												</td>
												<td>
													{{$phone}} <br/> {{ $alt_phone}} <br/> {{$email}} 
												</td>
											</tr>
											<tr>
												<td>
													<strong>State</strong>
												</td>
												<td>
													Abia State ( Abia Central Senatorial District)
												</td>
												<td>
													<strong>LGA</strong>
												</td>
												<td>
													{{$lga}}
												</td>
											</tr>
											<tr>
												<td>
													<strong>University</strong>
												</td>
												<td>
													{{$university}}
												</td>
												<td>
													<strong>Course of Study</strong>
												</td>
												<td>
													{{$major}}
												</td>
											</tr>
											<tr>
												<td>
													<strong>Social Media URL</strong>
												</td>
												<td>
													<a href="{{$social_media_url}}">{{$social_media_url}}</a>
												</td>
												<td>
													<strong>Documents</strong>
												</td>
												<td>
													<a href="{{url($admission_letter)}}">Admission Letter</a> <br/>
													<a href="{{url($idcard)}}">ID Card</a> <br/>
													<a href="{{url($lga_doc)}}">LGA Certificate</a> <br/>
												</td>
											</tr>


										</tbody>
									</table>


									<div class="form-group row">
										<div class="form-group col-lg-9">

										</div>
										<div class="form-group col-lg-3">
										<button type="button" class="btn btn-info" onclick="window.print()">Print Form</button>
										</div>
									</div>
							</div>

						</div>

				</div>

			</div>

		</div>

	</body>
</html>
