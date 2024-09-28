<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	
    <title> Answer Page </title>
</head>
<body>
    <center>
	
        <h2> Answer the clients Questions </h2>
		<select id="inquiry_select" style="width: 500px; height: 40px;">
        <option value="None">Select inquiry ID</option>
    <?php
		include_once'config.php';
	?>
    <?php 
		$q = "SELECT i.iid FROM inquiry i LEFT OUTER JOIN answer a ON i.iid = a.iid WHERE a.answer IS NULL;";
		$result_set = $conn->query($q);
		$n = $result_set->num_rows;
    
		for($i=0;$i<$n;$i++)
		{
			$r = $result_set->fetch_assoc();//[iid="1"]
    ?>
			<option value="<?php echo $r["iid"]?>"><?php echo $r["iid"] ?></option>
    <?php
		}
    $conn->close()
    ?>
	
		</select> <br> <br>
		<textarea id="question" disabled placeholder="Question" style="width: 500px; height: 150px"> </textarea>

		<br> <br>
	
		<textarea id="answer" placeholder="Answer" style="width:500px; height: 200px"> </textarea>
	
		<br> <br>
	
		<button type="submit" onclick="answerProcess();" style="width: 500px; height: 35px;"> Submit </button>

    </center>

    <script src="js/script.js"></script>
	
</body>
</html>