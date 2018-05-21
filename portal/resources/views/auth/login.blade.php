
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token"
	content="lqz2fPGP5fjAIw8yWIja7HnY55f7nzuPRNWw8EDN">

<title>Baram.be</title>

<!-- Styles -->
<link href="/css/app.css" rel="stylesheet">

<!-- Scripts -->
<script>
window.Laravel = {"csrfToken":"lqz2fPGP5fjAIw8yWIja7HnY55f7nzuPRNWw8EDN"}    </script>
</head>
<body>
	<div id="app">
		<br> <br>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">Login</div>
						<div class="panel-body">
							<form class="form-horizontal" role="form" method="POST"
								action="/login">
								@if (session('status'))
								<div class="help-block alert alert-success">{{ session('status') }}</div>
								@endif @if (session('warning'))
								<div class=" help-blockalert alert-warning">{{ session('warning') }}</div>
								@endif <input type="hidden" name="_token"
									value="lqz2fPGP5fjAIw8yWIja7HnY55f7nzuPRNWw8EDN">

								@if($errors->has('email')) <span class="help-block alert alert-warning"> <strong>{{
										$errors->first('email') }}</strong>
								</span> @endif

								<div class="form-group">
									<label for="email" class="col-md-4 control-label">E-Mail
										Address</label>
									<div class="col-md-6">
										<input id="email" type="email" class="form-control"
											name="email" value="" required autofocus>

									</div>
								</div>

								@if ($errors->has('password')) <span class="help-block alert alert-warning"> <strong>{{
										$errors->first('password') }}</strong>
								</span> @endif

								<div class="form-group">
									<label for="password" class="col-md-4 control-label">Password</label>

									<div class="col-md-6">
										<input id="password" type="password" class="form-control"
											name="password" required>

									</div>
								</div>

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<div class="checkbox">
											<label> <input type="checkbox" name="remember"> Remember Me
											</label>
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-8 col-md-offset-4">
										<button type="submit" class="btn btn-primary">Login</button>

										<a class="btn btn-link"
											href="http://localhost:8000/password/reset"> Forgot Your
											Password? </a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Scripts -->
	<script src="/js/app.js"></script>
</body>
</html>
