<?php 
	require_once ("app/partials/header.php");

?>

<!-- CONTENT -->
<main>
	<section id="main-app">
		<div class="container">
			<div class="row align-items-center ">
				<div class="col-md-8 offset-md-2 col-12">

					<h1 class="p-2">To Do App</h1>
					<div class="form-group">
						<input type="text" name="inputtask" id="inputtask" class="form-control">
						<button id="addtask" class="btn btn-info form-control my-2">Add Task</button>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section id="display-app" class="align-content-center justify-content-center">
		<div class="container">
			<div id="taskList" class="accordion">
			</div>
		</div>
	</section>
</main>

<footer>
	<p>Michelle Suniga &copy; 2019</p>
</footer>


<!-- END CONTENT -->

<?php 
	require_once ("app/partials/footer.php");
?>