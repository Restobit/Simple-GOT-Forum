<div class="container">
	<div id="content" class="card d-flex column justify-content-center border">

		<div class="card-header">
			<h2 class="text-center">Kapcsolat</h2>
		</div>

		<div class="flex-column">
			<div class="card p-4 m-4 shadow">
				<div class="col-md ">
					<form action="contact/process" method="post" class="d-flex flex-column align-self-center">
						<label for="name">Név</label>
						<input type="text" name="fullname">

						<label for="email">Email</label>
						<input type="email" name="email">

						<label for="comment">Üzenet</label>
						<textarea type="text" name="comment" maxlength="250" minlength="10" rows="8" cols="4"> </textarea>
				</div>
			</div>
		</div>

		<div class="card-footer text-center">
			<button type="submit" class="btn btn-primary">Küldés</button>
			</form>
		</div>

	</div>
</div>