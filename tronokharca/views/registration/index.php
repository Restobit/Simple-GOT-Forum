<div class="container">
	<div class="card d-flex column justify-content-center border">

		<div class="card-header">
			<h2 class="text-center">Regisztráció</h2>
		</div>

		<div class="card-content d-flex justify-content-center">
			<div class="card p-4 m-4">
				<form action="registration/process" method="post" class="d-flex flex-column align-self-center">
					<label for="username">Felhasználónév</label>
					<input type="text" name="username">

					<label for="password">Jelszó</label>
					<input type="password" name="password">


					<label for="email">Email</label>
					<input type="email" name="email"><br>
			</div>
		</div>

		<div class="card-footer text-center">
			<button type="submit" class="btn btn-primary">Mentés</button>
			</form>
		</div>

	</div>
</div>