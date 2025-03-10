<!doctype html>
<html lang="en">

<head>
	<title><?= $nombre_pagina ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?= base_url(RECURSOS_USUARIO_CSS . '/style.css') ?> ">
</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"><?= $titulo_pagina  ?></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(<?= base_url(RECURSOS_USUARIO_IMG . '/bg-1.jpg') ?>);">
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Sign In</h3>
								</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
							</div>

							<?php echo form_open("ruta", ["class" => "signin-form", "id" => "form_login"]) ?>
							<!-- <form action="#" class="signin-form"> -->
							<div class="form-group mb-3">
								<label class="label" for="name">Username</label>
								<?php
								$atributos = [
									'type' => 'text',
									'class' => 'form-control',
									'value' => '',
									'placeholder' => '',
									'name' => 'correo_electronico',
									'required' => true
								];
								echo form_input($atributos);
								?>
							</div>
							<div class="form-group mb-3">
								<label class="label" for="password">Password</label>
								<?php
								$atributos = [
									'type' => 'password',
									'class' => 'form-control',
									'value' => '',
									'placeholder' => '',
									'id' => 'password-field',
									'name' => 'correo_electronico',
									'required' => true
								];
								echo form_input($atributos);
								?>
							</div>
							<div class="form-group">
								<?php
								$atributos = [
									'type' => 'password',
									'class' => 'form-control btn btn-primary rounded submit px-3',
								];
								echo form_submit('btn-submit', 'Sign In', $atributos);
								?>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50 text-left">
									<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
										<?php

										$data = [
											'id'      => '',
											'name'    => '',
											'value'   => 'accept',
											'checked' => true,
											'style'   => '',
										];
										echo form_checkbox($data);
										?>
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#">Forgot Password</a>
								</div>
							</div>
							<!-- </form> -->
							<?php form_close() ?>
							<p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?= base_url(RECURSOS_USUARIO_JS . '/jquery.min.js') ?>"></script>
	<script src="<?= base_url(RECURSOS_USUARIO_JS . '/popper.js') ?>"></script>
	<script src="<?= base_url(RECURSOS_USUARIO_JS . '/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url(RECURSOS_USUARIO_JS . '/main.js') ?>"></script>

</body>

</html>