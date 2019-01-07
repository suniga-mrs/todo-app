<?php 
	require_once ("app/partials/header.php");
?>

<!-- CONTENT -->
<main>
	<section id="main-app" class="d-flex d-md-block flex-wrap align-content-center justify-content-center">
		<h1 class="p-2">To Do App</h1>

		<form method="POST" action="">
			<div class="form-group">
				<input type="text" name="inputtask" id="inputtask" class="form-control">
				<button type="submit" class="btn btn-info form-control my-2">Add Task</button>
			</div>
		</form>

	</section>

	<section id="display-app" class="align-content-center justify-content-center">
		<div id="task-list" class="accordion">

			<div class="display collapsed" data-toggle="collapse" data-target="#task-1">
				<p>Task 1</p>
			</div>
			<div id="task-1" class="controls collapse show" data-parent="#task-list">
				<span class="done-btn">done</span>
				<span class="edit-btn">edit</span>
				<span class="remove-btn">remove</span>
			</div>


			<div class="display collapsed" data-toggle="collapse" data-target="#task-2">
				<p>Task 2</p>
			</div>
			<div id="task-2" class="controls collapse" data-parent="#task-list">
				<span class="done-btn">done</span>
				<span class="edit-btn">edit</span>
				<span class="remove-btn">remove</span>
			</div>


			<div class="display collapsed" data-toggle="collapse" data-target="#task-3">
				<p>Task 3</p>
			</div>
			<div id="task-3" class="controls collapse" data-parent="#task-list">
				<span class="done-btn">done</span>
				<span class="edit-btn">edit</span>
				<span class="remove-btn">remove</span>
			</div>

		</div>

	</section>


</main>
<!-- CONTENT -->

<?php 
	require_once ("app/partials/footer.php");
?>