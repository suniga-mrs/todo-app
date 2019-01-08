
	
	console.log("Hello!");

	function retrieveTasks() {		
		$.ajax({
			method: 'POST',
			url: 'app/controller/task_server.php',
			data: {},
			success: function(jsondata) {
				// console.log(JSON.parse(jsondata));
				let taskResult = JSON.parse(jsondata);
				var content = ``;

				if (taskResult !== "failed"){
					for (x = 0; x < taskResult.length; x++) {
						let id = taskResult[x].id;
						let name = taskResult[x].name;

						content += `
							<div class="display collapsed" data-toggle="collapse" data-target="#task${id}" task-id="${id}">
								<p>${name}</p>
							</div>
							<div id="task${id}" class="controls collapse" data-parent="#taskList">
								<a class="doneBtn">done</a>
								<a class="editBtn">edit</a>
								<a class="removeBtn" id="${id}">remove</a>
							</div>
						`;			
					}					
				}
				$("#taskList").html(content);
			}
		}) 		
	};

	function removeTasks(taskID) {
		// console.log(taskID);
		$.ajax({
			url: 'app/controller/remove_task.php',
			type: 'POST',
			data: {
				id: taskID
			},
			success: function(jsondata) {
				console.log(jsondata);

				let element = `div[task-id=${taskID}]`;
				let elementControl = `#task${taskID}`;
				$(element).fadeOut('fast');
				$(elementControl).fadeOut('fast');
				// retrieveTasks();
			}
		})
	};

	retrieveTasks();

	$('#addtask').click( (event) => { 
		// event.preventDefault();

		const newTask = $("#inputtask").val();
		// VALIDATION
		if (newTask === "") {
			console.log("No input");
		} else {
			// AJAX
			$.ajax({
				method: 'POST',
				url: 'app/controller/add_task.php',
				data: {
					taskname : newTask
				},
				success: function(jsondata) {
					console.log("add success");

					// $(element).fadeIn('fast');
					// $(elementControl).fadeIn('fast');
					retrieveTasks();
				}
			});
			
		}
	});


	$("#taskList").on("click", '.removeBtn', function(event) {
		const taskID = parseInt($(this).attr('id'));
		removeTasks(taskID);
	});

	// $("#taskList").on("click", '.removeBtn',