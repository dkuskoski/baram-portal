<link href="/css/login.css" rel="stylesheet">
<script src="/js/login.js">

<div class="column column_2_3">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Најава</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" method="POST"
						action="http://localhost:8000/login">
						<input type="hidden" name="_token"
							value="lqz2fPGP5fjAIw8yWIja7HnY55f7nzuPRNWw8EDN">

						<div class="form-group">
							<label for="email" class="col-md-4 control-label">Корисничко име</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control" name="email"
									value="" required autofocus>

							</div>
						</div>

						<div class="form-group">
							<label for="password" class="col-md-4 control-label">Лозинка</label>

							<div class="col-md-6">
								<input id="password" type="password" class="form-control"
									name="password" required>

							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label> <input type="checkbox" name="remember"> Запамти ме
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-8 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Испрати</button>

								<a class="btn btn-link"
									href="http://localhost:8000/password/reset"> Ресетирај лозинка? </a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
