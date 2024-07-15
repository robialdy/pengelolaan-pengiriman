<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<title>
		Login
	</title>
	<link href="<?= base_url() ?>assets/dist/css/sb-admin-2.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>

<body class="bg-gradient-light">

	<div class="container">


		<div class="row justify-content-center">
			<div class="col-xl-10 ">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">

						<div class="row">

							<div class="col-lg-6">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">Pengelolaan-Pengiriman</h1>
									</div>
									<form class="user" action="<?php echo base_url('auth/login'); ?>" method="post">
										<div class="form-group">
											<input type="text" class="form-control form-control-user" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter Username" autocomplete="off" required>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" autocomplete="off" required>
												<div class="input-group-append">
													<button class="btn btn-outline-secondary" type="button" id="togglePassword">
														<i class="fa fa-eye"></i>
													</button>
												</div>
											</div>
										</div>


										<hr>
										<button type="submit" class="btn btn-primary btn-user btn-block">
											Login
										</button>


									</form>

								</div>
							</div>

							<div class="col-lg-6 d-none d-lg-block mt-4 ps-5">
								<img src="https://www.jne.co.id/cfind/source/images/jne-motor-2.png" alt="QR Code" style="max-width: 100%; max-height: 100%;">
							</div>

						</div>
					</div>
				</div>

			</div>

		</div>

	</div>


	<!-- Bootstrap core JavaScript-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
