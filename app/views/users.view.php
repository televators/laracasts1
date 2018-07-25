<?php require "app/views/partials/head.php"; ?>

<h1 class="page__title">All Users</h1>
<div class="user-list">
	<?php foreach ($users as $user) : ?>

		<div class="user">
			<h3><?= $user->first_name . " " . $user->last_name; ?></h3>
			<p><?= $user->age . " years old"; ?></p>
		</div>

	<?php endforeach;	?>
</div>

<h2 class="section--users">Create a New User</h2>
<form class="" action="/users" method="post">
	<label for="first_name">First Name:<br>
		<input type="text" name="first_name">
	</label>
	<br>
	<label for="last_name">Last Name:<br>
		<input type="text" name="last_name">
	</label>
	<br>
	<label for="age">Age:<br>
		<input type="number" name="age">
	</label>
	<br><br>
	<button type="submit">Submit</button>
</form>


<?php require "app/views/partials/footer.php"; ?>
