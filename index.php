<?php

$todos = file_get_contents("assets/todos.json");
$todos = json_decode($todos, true);

?>



<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title></title>
	<!-- Imports custom sylesheet -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Kavivanar" rel="stylesheet">
	<script src="https://use.fontawesome.com/dc4336ab48.js"></script>
</head>
<body>
	<div id="container">
		
		<h1>CHECKLIST</h1>	
		<input type="text" placeholder="Add New Task" id="newTask">
		<ul>
			<?php

				foreach ($todos as $key => $todo) {
					if ($todo['done'] === false)
						echo '<li id="' .$key. '"><span> <i class="fa fa-minus"></i></span>'.$todo['task'].'</li>';
						
					else
						echo '<li id="' .$key. '" class="completed"><span> <i class="fa fa-minus"> </i></span>'.$todo['task'].'</li>';
				}

			?>

		</ul> 

	</div>

	<script type="text/javascript" src="assets/lib/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="assets/js/todos.js"></script>



</body>
</html>