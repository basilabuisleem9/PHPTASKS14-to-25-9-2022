<?php
	$db = mysqli_connect("localhost", "root", "", "todo");

if (isset($_POST['submit'])){
    $task = $_POST['task'];
    mysqli_query($db , "INSERT INTO tasks (task) VALUES ('$task')");
    header('location :Todolist.php');
}

$tasks = mysqli_query($db ,"SELECT * FROM tasks");
?>

<!DOCTYPE html>
<html>
<head>
	<title>ToDo List Application PHP and MySQL</title>
</head>
<body>
	<div class="heading">
		<h2 style="font-style: 'Hervetica';">ToDo List Application PHP and MySQL database</h2>
	</div>
	<form method="post" action="Todolist.php" class="input_form">
		<input type="text" name="task" class="task_input">
		<button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
	</form>
    <table>
	<thead>
		<tr>
			<th>N</th>
			<th>Tasks</th>
			<th style="width: 60px;">Action</th>
		</tr>
	</thead>
	<tbody>
        <?php 
        while ($row = mysqli_fetch_array($tasks)) { ?>
           
              <td><?php echo $row ['id']; ?></td>
            <td class = "task"><?php echo $row ['task']; ?></td>
            <td class = "delete">
                <a href="#">x</a>
            </td>
            <tr>
          
        </tr>
      <?php  }; ?>
		
	</tbody>
</table>
</body>
</html>



